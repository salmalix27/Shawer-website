<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminApplicationsController;
use App\Http\Controllers\Admin\AdminCarsController;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home.alias');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/Automotive', function () {
    return view('Automotive');
})->name('Automotive');

Route::get('/homeFinishing', function () {
    return view('homeFinishing');
})->name('homeFinishing');

Route::get('/gold', function () {
    return view('gold');
})->name('gold');


Route::get('/insurance', function () {
    return view('insurance');
})->name('insurance');

Route::get('/summerVehicles', function () {
    return view('summerVehicles');
})->name('summerVehicles');

Route::get('/mortgage', function () {
    return view('mortgage');
})->name('mortgage');

Route::get('/BrandNewCars', function () {
    return view('BrandNewCars');
})->name('BrandNewCars');

Route::get('/usedCars', function () {
    return view('usedCars');
})->name('usedCars');

Route::get('/cars', [CarController::class, 'index'])->name('cars');
Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');

Route::get('/transportation', function () {
    return view('transportation');
})->name('transportation');

Route::get('/vans', function () {
    return view('vans');
})->name('vans');
// ✅ Admin login routes (OUTSIDE auth group)
Route::view('/admin/login', 'admin.login')->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// ✅ Admin protected area
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/applications', [AdminApplicationsController::class, 'index'])->name('admin.applications');
    Route::post('/applications/{id}/accept', [AdminApplicationsController::class, 'accept'])->name('admin.applications.accept');
    Route::delete('/applications/{id}', [AdminApplicationsController::class, 'destroy'])->name('admin.applications.delete');

    Route::get('/cars', [AdminCarsController::class, 'index'])->name('admin.cars');
    Route::get('/cars/create', [AdminCarsController::class, 'create'])->name('admin.cars.create');
    Route::post('/cars', [AdminCarsController::class, 'store'])->name('admin.cars.store');
    Route::get('/cars/{car}/edit', [AdminCarsController::class, 'edit'])->name('admin.cars.edit');
    Route::put('/cars/{car}', [AdminCarsController::class, 'update'])->name('admin.cars.update');
    Route::delete('/cars/{car}', [AdminCarsController::class, 'destroy'])->name('admin.cars.delete');
 
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
Route::post('/contact', [ContactRequestController::class, 'store'])->name('contact.store');

