<?php

// app/Models/Visit.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model {
  protected $fillable = ['ip','user_agent','path','referrer','visited_on'];
}
