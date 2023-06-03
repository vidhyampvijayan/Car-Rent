<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'car_details';
    protected $fillable = ['id', 'image', 'name', 'description', 'model', 'mode', 'Type', 'price'];
}
