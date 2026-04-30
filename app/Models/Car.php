<?php

// app/Models/Car.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
protected $fillable = [
  'brand','model','year','price','kilometres','image','images','whatsapp','phone',

  'description_en','description_ar',

  'condition_en','condition_ar',
  'fuel_en','fuel_ar',
  'transmission_en','transmission_ar',
  'payment_options_en','payment_options_ar',
  'body_type_en','body_type_ar',
  'air_conditioning_en','air_conditioning_ar',
  'color_en','color_ar',
  'interior_en','interior_ar',
  'city_en','city_ar',
'version',
'doors',
 
  'condition','fuel','transmission','payment_options','body_type','air_conditioning','color','interior','city', 'is_special',
];

protected $casts = [
  'images' => 'array',
  'is_special' => 'boolean',
];
}
