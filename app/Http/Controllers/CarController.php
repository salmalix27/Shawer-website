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
    $model = trim((string) $request->input('model', ''));

$minPrice = (int) str_replace(',', '', (string) $request->input('min_price'));
$maxPrice = (int) str_replace(',', '', (string) $request->input('max_price'));
    $minKm    = $request->integer('min_km');
    $maxKm    = $request->integer('max_km');
    $minYear  = $request->integer('min_year');
    $maxYear  = $request->integer('max_year');

    $transmissions = (array) $request->input('transmission', []);
    $fuels         = (array) $request->input('fuel', []);

    $normalize = function ($value) {
        return str_replace(['-', ' '], '', strtolower(trim((string) $value)));
    };

    $modelsByBrand = [
        'Alfa Romeo' => ['Stelvio', 'Giulia', 'Tonale', 'Mito', 'Giulietta'],
        'Audi' => ['A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'E Tron', 'Q2', 'Q3', 'Q4 e Tron', 'Q5', 'Q7', 'Q8', 'Q8 e-tron', 'R8', 'RS 3', 'RS Q8', 'RS e-tron GT', 'S 5', 'SQ8', 'TT'],
        'Avatr' => ['6', '7', '11', '12'],
        'BAIC' => ['BJ30', 'MZ40', 'U5 Plus', 'X 55', 'X3', 'X5', 'X7'],
        'BMW' => ['116I', '118i', '120i', '218', '218i', '235i', '316i', '318i', '320i', '325i', '328i', '330i', '335ci', '335i', '340i', '418i', '420i Convertible', '420i Coupe', '420i Gran Coupe', '430i Convertible', '430i Coupe', '430i Gran Coupe', '440i Coupe', '440i Gran Coupe', '440i convertible', '5 Series', '518', '520i', '523i', '525i', '528', '528i', '530i', '535i', '540i', '640i', '645 Coupe', '650i', '720', '725', '730Li', '735', '740Li', '740i', '745i', '750E', '750Li', '750i', '760i', '840i coupe', '840i gran coupe', 'BMW M2 Competition', 'Li 730', 'M3', 'M4', 'M5', 'M8', 'M850i', 'X1', 'X2', 'X3', 'X4', 'X5', 'X6', 'X7', 'Z3', 'Z4', 'i3', 'i3 sedan', 'i4', 'i5', 'i7', 'i8', 'iX', 'iX1', 'iX3'],
        'BYD' => ['F0', 'F3', 'Flyer', 'Han', 'L3', 'QIN', 'S5', 'Seagull', 'Seal', 'Seal U', 'Song L', 'Song Plus', 'Tang L', 'Yuan Plus'],
        'Bentley' => ['Bentiaga', 'Continental GT', 'Flying spur'],
        'Brilliance' => ['FRV', 'FRV Cross', 'FSV', 'H 530', 'H330', 'H5', 'S30', 'Splendor', 'V3', 'V5', 'V6'],
        'Cadillac' => ['Brougham', 'DTS', 'Dls', 'Escalade', 'Lyriq', 'SRX'],
        'Changan' => ['CS15', 'CS35 PLUS', 'CS55', 'CS55-Plus', 'CS75 Plus', 'EADO', 'Eado Plus', 'UNI-T', 'UNI-V', 'V7', 'X5 Plus'],
        'Changhe' => ['M50s', 'Q35'],
        'Chery' => ['Arrizo 5', 'Arrizo 5 Facelift', 'Arrizo 6 GT', 'Arrizo 8', 'E5', 'Envy', 'Long', 'QQ', 'Tiggo', 'Tiggo 3', 'Tiggo 4 PRO', 'Tiggo 7', 'Tiggo 7 Pro', 'Tiggo 7 Pro Max', 'Tiggo 8', 'Tiggo 8 PRO', 'Tiggo 8 PRO MAX', 'eQ7'],
        'Chevrolet' => ['Aveo', 'Camaro', 'Caprice classic', 'Captiva', 'Corsica', 'Corvette', 'Cruze', 'Equinox', 'Lanos', 'Malibu', 'N200', 'N300', 'NKR', 'NPR', 'NQR', 'Optra', 'Silverado', 'Spark', 'TFR', 'Trailblazer'],
        'Chrysler' => ['300C', 'Crossfire', 'M300', 'Neon', 'PT Cruiser', 'Pacifica', 'Sebring', 'Spring Sedan', 'Stratus', 'Town & Country', 'Town and country', 'Voyager'],
        'Citroen' => ['AX', 'Berlingo', 'C-Elysee', 'C2', 'C3', 'C3 Aircross', 'C3 Picasso', 'C4', 'C4 Grand Picasso', 'C4 Picasso', 'C4 X', 'C5', 'C5 Aircross', 'C6', 'C8', 'Picasso', 'Xsara'],
        'Cupra' => ['Formentor', 'Leon', 'Terramar'],
        'DFSK' => ['Eagle 580', 'E5', 'E5 Plus', '600'],
        'DS' => ['DS 3', 'DS 4', 'DS 5', 'DS 7'],
        'Dodge' => ['Caravan', 'Challenger', 'Charger', 'Dart', 'Durango', 'Nitro', 'RS', 'Ram'],
        'Dongfeng' => ['007', 'Box', 'Huge', 'Mage', 'Mage EV', 'Shine'],
        'EXEED' => ['ES', 'ET', 'LX', 'RX', 'VX'],
        'Faw' => ['B30', 'Bestune', 'Vita', 'X40', 'Xiali'],
        'Ferrari' => ['296 GTB', '360 spider', '430 scuderia', '458 italia', '458 spider', '550 barchetta', '575m maranello', '599 gtb fiorano', '599 gto', '612 scaglietti', '612 sessanta', 'California', 'Challenge stradale', 'Enzo', 'F430', 'F430 spider', 'Ff', 'Portofino', 'Roma', 'Scuderia spider 16m', 'Superamerica'],
        'Fiat' => ['500', '500C', '500L', '500X', 'Punto', 'Tipo', 'Tipo Hatchback'],
        'Ford' => ['Ecosport', 'Edge', 'Explorer', 'F150', 'Fairmont', 'Fiesta', 'Focus', 'Fusion', 'Grand C-Max', 'Kuga', 'Lincoln', 'Mondeo', 'Mustang', 'Ranger', 'Taurus'],
        'GAC' => ['EMKOO', 'EMPOW', 'EMZOOM', 'GS3 Max', 'GS4', 'GS4 Max'],
        'GMC' => ['Savana', 'Sierra', 'Super pan', 'Terrain', 'Yukon'],
        'Geely' => ['Cityray', 'Coolray', 'EMGRAND X7', 'Emgrand', 'GX3 PRO', 'Geometry C', 'Imperial', 'Okavango', 'Pandino', 'X 7', 'Starray'],
        'Golf Car' => ['Club Car'],
        'Haval' => ['H6 HEV', 'H7', 'JOLION', 'JOLION PRO'],
        'Hummer' => ['H1', 'H 2', 'H3', 'Hummer EV SUV'],
        'Honda' => ['Accord', 'CR-V', 'CRX', 'City', 'Civic', 'HR-V', 'MRV', 'ZR-V', 'e:NP1', 'e:NP2', 'e:NS1'],
        'Hyundai' => ['Accent', 'Avante', 'Bayon', 'Creta', 'Elantra AD', 'Elantra CN7', 'Elantra HD', 'Elantra MD', 'Getz', 'Grand I10', 'H1', 'I10', 'I20', 'I30', 'IONIQ', 'IONIQ 5', 'IONIQ 6', 'IX 20', 'IX 35', 'Matrix', 'SantaFe', 'Solaris', 'Sonata', 'Staria', 'Terracan', 'Tucson', 'Tucson NX4e'],
        'Infiniti' => ['Ex35', 'FX35', 'Fx50', 'Q30', 'QX56', 'QX70'],
        'Isuzu' => ['NPR', 'RBC'],
        'JAC' => ['J7', 'JS2', 'JS3', 'JS4', 'JS8 Pro', 'S2', 'S3', 'S4', 'S7'],
        'Jaguar' => ['E-PACE', 'F-PACE', 'F-TYPE', 'S Type', 'X Type', 'XE', 'XF', 'XF Portfolio', 'XFR', 'XJ', 'XJL', 'XK', 'XS', 'i pace'],
        'Jeep' => ['Cherokee', 'Commander', 'Grand Cherokee', 'Renegade', 'Wagoneer', 'Wrangler'],
        'Jetour' => ['Dashing', 'T1', 'T2', 'X70', 'X70 Plus', 'X90 Plus', 'X95'],
        'KGM' => ['Actyon', 'Tivoli', 'Torres', 'XLV'],
        'Kia' => ['Carens', 'Carnival', 'Ceed', 'Cerato', 'EV5', 'EV9', 'Forte', 'Grand Cerato', 'K3', 'K5', 'K8', 'Optima', 'Pegas', 'Picanto', 'Rio', 'Sorento', 'Sportage', 'XCeed', 'seltos'],
        'Lamborghini' => ['Huracan Evo', 'URUS S', 'Urus Peformante'],
        'Land Rover' => ['DEFENDER', 'Discovery', 'Discovery Sport', 'Freelander', 'LR2', 'LR3', 'LR4', 'Range Rover vogue', 'Range Rover Velar', 'Range Rover Sport', 'Range Rover Evoque'],
        'Lexus' => ['ES300', 'ES350', 'GS 330', 'Gx470', 'LS500', 'LX 460', 'LX570', 'LX600', 'RX300', 'RX330', 'RX350'],
        'Lotus' => ['Eletre', 'Emeya', 'Emira'],
        'mercedes benz' => ['A 250e', 'A180', 'A200', 'A35', 'A45 AMG', 'B 180', 'B 200', 'C 180 station', 'C 250', 'C 280', 'C 300e', 'C 43 AMG', 'C Coupe', 'C180', 'C200', 'C230', 'C240', 'C300', 'C320', 'C350', 'C63 S', 'CE230', 'CL63AMG', 'CLA 180', 'CLA 200', 'CLA 250e', 'CLA 45s', 'CLC 160', 'CLE 200 coupe', 'CLE 300', 'CLE200 Convertible', 'CLK', 'CLS 350', 'CLS 550', 'CLS53', 'Clk 200', 'E 180', 'E 250', 'E 63S', 'E Cabriolet', 'E coupe', 'E200', 'E220', 'E230', 'E240', 'E280', 'E300', 'E300e', 'E320', 'E350', 'E53', 'EQA 250', 'EQA 260', 'EQA 350', 'EQB 260', 'EQB 300', 'EQB 350', 'EQE 300', 'EQE 350', 'EQE 43', 'EQE SUV', 'EQS', 'EQS 450+', 'EQS SUV', 'EQV 300', 'G 500', 'G 63', 'G Class', 'GL 500', 'GLA 180', 'GLA 200', 'GLB 180', 'GLB 200', 'GLC 200', 'GLC 250', 'GLC 300', 'GLC 300 COUPE', 'GLC 43', 'GLC 63s', 'GLE 53', 'GLE63', 'GLK 250', 'GLK 280', 'GLK 300', 'GLK 350', 'GLS 580', 'GLS 580 Maybach', 'GT43', 'GT53', 'GT63', 'GTA63', 'Gle 450', 'ML320', 'Maybach S 450', 'Maybach S 560', 'Maybach S 580', 'Maybach S 650', 'Maybach S 680', 'Ml 350', 'Ml 55 amg', 'S280', 'S320', 'S350', 'S400', 'S450', 'S500', 'S560', 'S580', 'S63', 'SLE 200', 'SLE 280', 'SLE 300', 'SLE 500', 'SLE 600', 'SL 350', 'SL43 Convertible', 'SL55 AMG', 'SLC 180', 'Sl 320', 'Sl 500', 'Slk 200', 'Slr', 'Sls', 'V 250', 'V300', 'sprinter'],
        'MG' => ['350 S', '5', '6', '7', '750', 'Cyberster', 'GT', 'HS', 'MG 3', 'MG 3 Cross Over', 'MG 4', 'One', 'RX5', 'RX5 Plus', 'ZS'],
        'Maserati' => ['Ghibli', 'Gran Cabrio', 'GranTurismo', 'Grecale', 'Levante', 'Levante S', 'Quattroporte', 'Quattroporte S'],
        'Mazda' => ['2', '3', '6', 'CX 3'],
        'Mini' => ['Cabrio', 'Clubman', 'Cooper', 'Countryman', 'John Cooper Works', 'Paceman'],
        'Mitsubishi' => ['Attrage', 'Eclipse Cross', 'Lancer', 'Mirage', 'Outlander', 'Xpander', 'Montero', 'Nativa', 'Outlander Sport', 'Pajero', 'Vr4'],
        'Nissan' => ['350Z', 'Juke', 'Pathfinder', 'Patrol', 'Pick up', 'Qashqai', 'Sentra', 'Sunny', 'X-Trail'],
        'Opel' => ['Astra', 'Cascada', 'Corsa', 'Cross Land', 'Grand Land', 'Insignia', 'Mokka', 'Vectra'],
        'Peugeot' => ['2008', '207', '208', '3008', '301', '308', '5008', '508', 'Partner', 'RCZ'],
        'Porsche' => ['718', '718 Boxster', '718 Boxster GTS', '718 Boxster S', '718 Cayman', '718 Cayman GTS', '718 Cayman S', '911 Carrera', '911 Carrera 4S', '911 Carrera S', '911 GT3', '911 Targa 4', '911 Turbo', '944', 'Boxster', 'Boxster S', 'Carrera', 'Carrera 4', 'Carrera 4S', 'Carrera S', 'Cayenne', 'Cayenne Coupe', 'Cayenne New', 'Cayenne S', 'Cayman', 'Cayman S', 'Macan', 'Macan S', 'Panamera', 'Panamera 4', 'Panamera 4S', 'Panamera GTS', 'Panamera S', 'Panamera Turbo', 'Panamera Turbo S', 'Targa', 'Targa 4S', 'Taycan'],
        'Proton' => ['Gen 2', 'Persona', 'Saga'],
        'Renault' => ['Austral', 'Captur', 'Duster', 'Fluence', 'Kadjar', 'Kardian', 'Logan', 'Logan MCV', 'Megane', 'Sandero', 'Sandero Stepway', 'Taliant', 'Twizy'],
        'Rolls Royce' => ['Cullinan', 'Ghost', 'Phantom', 'Silver wraith', 'Spectre'],
        'Seat' => ['ATECA', 'Arona', 'Ibiza', 'Leon', 'Tarraco', 'Toledo'],
        'Skoda' => ['Fabia', 'KAMIQ', 'KAROQ', 'KODIAQ', 'Octavia', 'Octavia vrs', 'Rapid', 'Roomster', 'SCALA', 'Superb'],
        'Soueast' => ['A5', 'DX8S COUPE', 'Dx7 NOVA', 'S 05', 'S 06', 'S 07', 'S 09'],
        'Subaru' => ['Crosstrek', 'Forester', 'Impreza', 'Legacy', 'XV'],
        'Suzuki' => ['Baleno', 'Ciaz', 'Dzire', 'Ertiga', 'Fronx', 'Jimny', 'Spresso', 'Swift'],
        'Tesla' => ['3 Model', 'Model Y', 'Model S', 'Model X', 'cybertruck'],
        'Toyota' => ['Auris', 'Belta', 'C-HR', 'Camry', 'Corolla', 'FJ', 'Fortuner', 'Hiace', 'Hilux', 'Land cruiser', 'Prado', 'Rumion', 'Rush', 'Siena', 'Starlet', 'Tundra', 'Urban Cruiser', 'Veloz', 'Yaris', 'bZ4X'],
        'Volkswagen' => ['Arteon', 'CC', 'Caddy life', 'Eos', 'Golf 6', 'Golf 7', 'Golf 8', 'ID.3', 'ID.4', 'ID.4 Crozz', 'ID.6 Crozz', 'Jetta', 'New Beetles', 'Passat', 'Polo', 'Scirocco', 'T-Roc', 'Teramont', 'Tiguan', 'Touareg', 'Touran', 'e-Lavida', 'id7'],
        'Volvo' => ['C40', 'EX30', 'S60', 'S80', 'S90', 'V40', 'V60', 'XC 40', 'XC 60', 'XC 90'],
        'XPeng' => ['G6', 'G9', 'P7'],
        'Zeekr' => ['007', '7X', 'X'],
        'xiaomi' => ['SU7', 'YU7'],
    ];

    $brands = collect(array_keys($modelsByBrand));

    $cars = Car::query()
        ->when($brand !== '', function ($q) use ($brand, $normalize) {
            $q->whereRaw(
                "REPLACE(REPLACE(LOWER(TRIM(brand)), '-', ''), ' ', '') = ?",
                [$normalize($brand)]
            );
        })
        ->when($model !== '', function ($q) use ($model, $normalize) {
            $q->whereRaw(
                "REPLACE(REPLACE(LOWER(TRIM(model)), '-', ''), ' ', '') = ?",
                [$normalize($model)]
            );
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

    return view('cars', compact('cars', 'brands', 'modelsByBrand'));
}

public function show(Car $car)
{
    $imgs = [];

    if (!empty($car->images) && is_array($car->images)) {
        foreach ($car->images as $image) {
            $imgs[] = \Illuminate\Support\Facades\Storage::disk('cars')->url($image);
        }
    }

    if (empty($imgs)) {
        $imgPath = $car->image
            ? \Illuminate\Support\Facades\Storage::disk('cars')->url($car->image)
            : asset('img/mercedes.png');

        $imgs = array_fill(0, 9, $imgPath);
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
            Storage::disk('cars')->delete($oldImage);
        }
    }

    $newImages = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $newImages[] = $image->store('cars/gallery', 'cars');
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