<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCarsController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->paginate(10);
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
  'brand' => 'required|string|max:120',
  'model' => 'required|string|max:120',
  'year' => 'required|integer|min:1950|max:2100',
  'price' => 'required|integer|min:0',
  'kilometres' => 'required|integer|min:0',

  'city_en' => 'nullable|string|max:120',
  'city_ar' => 'nullable|string|max:120',

  'description_en' => 'nullable|string',
  'description_ar' => 'nullable|string',

  'condition_en' => 'nullable|string|max:50',
  'condition_ar' => 'nullable|string|max:50',

  'fuel_en' => 'nullable|string|max:50',
  'fuel_ar' => 'nullable|string|max:50',

  'transmission_en' => 'nullable|string|max:50',
  'transmission_ar' => 'nullable|string|max:50',

  'payment_options_en' => 'nullable|string|max:160',
  'payment_options_ar' => 'nullable|string|max:160',

  'body_type_en' => 'nullable|string|max:120',
  'body_type_ar' => 'nullable|string|max:120',

  'air_conditioning_en' => 'nullable|string|max:160',
  'air_conditioning_ar' => 'nullable|string|max:160',

  'color_en' => 'nullable|string|max:120',
  'color_ar' => 'nullable|string|max:120',

  'interior_en' => 'nullable|string|max:160',
  'interior_ar' => 'nullable|string|max:160',

  'version' => 'nullable|string|max:120',
  'doors' => 'nullable|integer|min:1|max:8',

  
  'images' => 'required|array|size:6',
  'images.*' => 'required|image|max:4096',
  'is_special' => 'nullable|boolean',
]);

        $gallery = [];
        foreach ($request->file('images') as $img) {
            $gallery[] = $img->store('cars/gallery', 'public');
        }

        $data['images'] = $gallery;
        $data['image'] = $gallery[0];  
        $data['is_special'] = $request->boolean('is_special');

        Car::create($data);

        return redirect()->route('admin.cars')->with('ok', 'Car added successfully.');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
{
    $data = $request->validate([
        'brand' => 'required|string|max:120',
        'model' => 'required|string|max:120',
        'year' => 'required|integer|min:1950|max:2100',
        'price' => 'required|integer|min:0',
        'kilometres' => 'required|integer|min:0',

        'city_en' => 'nullable|string|max:120',
        'city_ar' => 'nullable|string|max:120',

        'description_en' => 'nullable|string',
        'description_ar' => 'nullable|string',

        'condition_en' => 'nullable|string|max:50',
        'condition_ar' => 'nullable|string|max:50',

        'fuel_en' => 'nullable|string|max:50',
        'fuel_ar' => 'nullable|string|max:50',

        'transmission_en' => 'nullable|string|max:50',
        'transmission_ar' => 'nullable|string|max:50',

        'payment_options_en' => 'nullable|string|max:160',
        'payment_options_ar' => 'nullable|string|max:160',

        'body_type_en' => 'nullable|string|max:120',
        'body_type_ar' => 'nullable|string|max:120',

        'air_conditioning_en' => 'nullable|string|max:160',
        'air_conditioning_ar' => 'nullable|string|max:160',

        'color_en' => 'nullable|string|max:120',
        'color_ar' => 'nullable|string|max:120',

        'interior_en' => 'nullable|string|max:160',
        'interior_ar' => 'nullable|string|max:160',

        'version' => 'nullable|string|max:120',
        'doors' => 'nullable|integer|min:1|max:8',

        'images' => 'nullable|array|size:6',
        'images.*' => 'nullable|image|max:4096',
        'remove_gallery' => 'nullable|boolean',
        'is_special' => 'nullable|boolean',
    ]);

    
    if ($request->boolean('remove_gallery') && $request->hasFile('images')) {

        if (is_array($car->images)) {
            foreach ($car->images as $oldImage) {
                Storage::disk('public')->delete($oldImage);
            }
        }

        $gallery = [];

        foreach ($request->file('images') as $img) {
            $gallery[] = $img->store('cars/gallery', 'public');
        }

        $data['images'] = $gallery;
        $data['image'] = $gallery[0];

    } else {
        unset($data['images']);
        unset($data['image']);
    }

    unset($data['remove_gallery']);
$data['is_special'] = $request->boolean('is_special');
    $car->update($data);

    return redirect()->route('admin.cars')->with('ok', 'Car updated successfully.');
}

    public function destroy(Car $car)
    {
       
        if (is_array($car->images)) {
            foreach ($car->images as $img) Storage::disk('public')->delete($img);
        }

        $car->delete();

        return back()->with('ok', 'Car deleted.');
    }
}