<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $brand = trim((string) $request->input('brand', ''));

        $minPrice = $request->integer('min_price');
        $maxPrice = $request->integer('max_price');
        $minKm    = $request->integer('min_km');
        $maxKm    = $request->integer('max_km');
        $minYear  = $request->integer('min_year');
        $maxYear  = $request->integer('max_year');

        $transmissions = (array) $request->input('transmission', []);
        $fuels         = (array) $request->input('fuel', []);

        $cars = Car::query()
            ->when($brand !== '', function ($q) use ($brand) {
                $q->where(function ($qq) use ($brand) {
                    $qq->where('brand', 'LIKE', "%{$brand}%")
                       ->orWhere('model', 'LIKE', "%{$brand}%");
                });
            })
            ->when($minPrice, fn($q) => $q->where('price', '>=', $minPrice))
            ->when($maxPrice, fn($q) => $q->where('price', '<=', $maxPrice))
            ->when($minKm,    fn($q) => $q->where('kilometres', '>=', $minKm))
            ->when($maxKm,    fn($q) => $q->where('kilometres', '<=', $maxKm))
            ->when($minYear,  fn($q) => $q->where('year', '>=', $minYear))
            ->when($maxYear,  fn($q) => $q->where('year', '<=', $maxYear))
            ->when(count($transmissions), fn($q) => $q->whereIn('transmission', $transmissions))
            ->when(count($fuels),         fn($q) => $q->whereIn('fuel', $fuels))
            ->latest()
            ->paginate(12)
            ->withQueryString();

        $brands = Car::query()
            ->select('brand')
            ->distinct()
            ->orderBy('brand')
            ->pluck('brand');

        return view('cars', compact('cars', 'brands'));
    }

    public function show(Car $car)
    {
        $imgs = [];

        if (!empty($car->images) && is_array($car->images)) {
            foreach ($car->images as $image) {
                $imgs[] = asset('storage/' . $image);
            }
        }

        if (empty($imgs)) {
            $imgPath = $car->image ? asset($car->image) : asset('img/mercedes.png');
            $imgs = array_fill(0, 6, $imgPath);
        }

        return view('car-details', compact('car', 'imgs'));
    }

    public function edit(Car $car)
    {
        return view('cars-edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $data = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'kilometres' => 'required|numeric',

            'fuel' => 'nullable|string|max:255',
            'transmission' => 'nullable|string|max:255',
            'city_en' => 'nullable|string|max:255',
            'city_ar' => 'nullable|string|max:255',
            'fuel_en' => 'nullable|string|max:255',
            'fuel_ar' => 'nullable|string|max:255',

            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:4096',
            'remove_gallery' => 'nullable',
        ]);

     
        if ($request->has('remove_gallery')) {

            if (!empty($car->images) && is_array($car->images)) {
                foreach ($car->images as $oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            $newImages = [];

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $newImages[] = $image->store('cars', 'public');
                }
            }

            $data['images'] = $newImages;
        } else {
            unset($data['images']);
        }

        $car->update($data);

        return redirect()
            ->route('cars.show', $car->id)
            ->with('success', 'Car updated successfully');
    }
}