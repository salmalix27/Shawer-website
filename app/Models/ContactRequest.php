<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
   protected $fillable = [
    'name','phone','product','sub_product',
    'car_brand','car_model','car_comment',
    'status','accepted_at'
];
}
