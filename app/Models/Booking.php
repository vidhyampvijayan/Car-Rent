<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking_details';
    protected $fillable = ['id', 'name', 'mob_no', 'email', 'no_days', 'address', 'Arrival_Date', 'Return_Date', 'car_need', 'car_det_tbl_id'];
}
