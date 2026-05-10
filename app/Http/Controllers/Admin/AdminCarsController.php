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
    private function carBrandsAndModels(): array
{
    return [
        'Alfa Romeo' => ['Stelvio', 'Giulia', 'Tonale', 'Mito', 'Giulietta'],
        'Audi' => ['A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'E Tron', 'Q2', 'Q3'],
        'Avatr' => ['6.0', '7.0', '11.0', '12.0'],
        'BAIC' => ['BJ30', 'MZ40', 'U5 Plus', 'X 55', 'X3', 'X5', 'X7'],
        'BMW' => ['116I', '118i', '120i', '218', '218i', '235i', '316i', '318i', '320i', '325i'],
        'BYD' => ['F0', 'F3', 'Flyer', 'Han', 'L3', 'QIN', 'Seagull', 'Seal'],
        'Chery' => ['Arrizo 5', 'Arrizo 5 Facelift', 'Arrizo 6 GT', 'Arrizo 8', 'E5', 'Envy', 'Long', 'QQ', 'Tiggo', 'Tiggo 3'],
        'Chevrolet' => ['Aveo', 'Camaro', 'Caprice classic', 'Captiva', 'Corsica', 'Corvette', 'Cruze', 'Equinox', 'Lanos', 'Malibu'],
        'Fiat' => ['500', '500C', '500L', '500X', 'Punto', 'Tipo', 'Tipo Hatchback'],
        'Ford' => ['Ecosport', 'Edge', 'Explorer', 'F150', 'Fairmont', 'Fiesta', 'Focus', 'Fusion', 'Grand C-Max', 'Kuga'],
        'Honda' => ['Accord', 'CR-V', 'CRX', 'City', 'Civic', 'HR-V', 'MRV', 'ZR-V', 'e:NP1', 'e:NP2'],
        'Hyundai' => ['Accent', 'Avante', 'Bayon', 'Creta', 'Elantra AD', 'Elantra CN7', 'Elantra HD', 'Elantra MD', 'Getz', 'Grand I10'],
        'Jeep' => ['Cherokee', 'Commander', 'Grand Cherokee', 'Renegade', 'Wagoneer', 'Wrangler'],
        'Kia' => ['Carens', 'Carnival', 'Ceed', 'Cerato', 'EV5', 'EV9', 'Forte', 'Grand Cerato', 'K3', 'K5'],
        'Land Rover' => ['DEFENDER', 'Discovery', 'Discovery Sport', 'Freelander', 'LR2', 'LR3', 'LR4', 'Range Rover vogue', 'Range Rover Velar', 'Range Rover Sport'],
        'Mercedes-Benz' => ['A 250e', 'A180', 'A200', 'A35', 'A45 AMG', 'B 180', 'B 200', 'C 180 station', 'C 250', 'C 280', 'C200', 'C300', 'E200', 'E300', 'G 63', 'GLA 200', 'GLC 200'],
        'MG' => ['350 S', '5', '6', '7', 'Cyberster', 'GT', 'HS', 'MG 3'],
        'Mitsubishi' => ['Attrage', 'Eclipse Cross', 'Lancer', 'Mirage', 'Outlander', 'Xpander', 'Montero', 'Nativa'],
        'Nissan' => ['350Z', 'Juke', 'Pathfinder', 'Patrol', 'Pick up', 'Qashqai', 'Sentra', 'Sunny', 'X-Trail'],
        'Opel' => ['Astra', 'Cascada', 'Corsa', 'Cross Land', 'Grand Land', 'Insignia', 'Mokka', 'Vectra'],
        'Peugeot' => ['2008', '207', '208', '3008', '301', '308', '5008', '508', 'Partner', 'RCZ'],
        'Porsche' => ['718', '718 Boxster', '718 Cayman', '911 Carrera', 'Cayenne', 'Macan', 'Panamera', 'Taycan'],
        'Renault' => ['Austral', 'Captur', 'Duster', 'Fluence', 'Kadjar', 'Kardian', 'Logan', 'Logan MCV', 'Megane'],
        'Seat' => ['ATECA', 'Arona', 'Ibiza', 'Leon', 'Tarraco', 'Toledo'],
        'Skoda' => ['Fabia', 'KAMIQ', 'KAROQ', 'KODIAQ', 'Octavia', 'Octavia vrs', 'Rapid', 'Roomster', 'SCALA', 'Superb'],
        'Suzuki' => ['Baleno', 'Ciaz', 'Dzire', 'Ertiga', 'Fronx', 'Jimny', 'Spresso', 'Swift'],
        'Tesla' => ['3 Model', 'Model Y', 'Model S', 'Model X', 'cybertruck'],
        'Toyota' => ['Auris', 'Belta', 'C-HR', 'Camry', 'Corolla', 'FJ', 'Fortuner', 'Hiace', 'Hilux', 'Land cruiser'],
        'Volkswagen' => ['Arteon', 'CC', 'Golf 6', 'Golf 7', 'Golf 8', 'ID.3', 'ID.4', 'Passat', 'Tiguan'],
        'Volvo' => ['C40', 'EX30', 'S60', 'S80', 'S90', 'V40', 'V60', 'XC 40', 'XC 60', 'XC 90'],
        'Xiaomi' => ['SU7', 'YU7'],
    ];
}

    public function create()
    {
    $modelsByBrand = $this->carBrandsAndModels();
    $brands = collect(array_keys($modelsByBrand));

    return view('admin.cars.create', compact('brands', 'modelsByBrand'));

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

  
  'images' => 'required|array|size:9',
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
        
    $modelsByBrand = $this->carBrandsAndModels();
    $brands = collect(array_keys($modelsByBrand));

    return view('admin.cars.edit', compact('car', 'brands', 'modelsByBrand'));
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

        'images' => 'nullable|array|size:9',
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