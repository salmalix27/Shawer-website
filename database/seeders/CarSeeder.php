<?php

// database/seeders/CarSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
       // database/seeders/CarSeeder.php
Car::updateOrCreate(
  ['brand' => 'Mercedes-Benz', 'model' => 'C200', 'year' => 2024],
  [
    'price' => 3200000,
    'kilometres' => 24000,
    'transmission' => 'Automatic',
    'fuel' => 'Benzine',
    'city' => 'El-Shorouk City, Cairo',
    'condition' => 'USED',
    'version' => 'AMG',
    'body_type' => 'SEDAN',
    'color' => 'GREY',
    'interior' => 'FULL LEATHER',
    'payment_options' => 'CASH OR INSTALLMENT',
    'air_conditioning' => 'AUTOMATIC AIR CONDITIONING',
    'doors' => 4,
    'description' => "Anything extra or any comments you want to write about the car\nAnything extra...\nAnything extra...",
    'image' => 'img/cars/mercedes.png',
    'images' => [
      'img/cars/mercedes.png',
      'img/cars/mercedes.png',
      'img/cars/mercedes.png',
      'img/cars/mercedes.png',
      'img/cars/mercedes.png',
      'img/cars/mercedes.png',
    ],
    'whatsapp' => '201000000000',
    'phone' => '201000000000',
  ]
);
    }
}
