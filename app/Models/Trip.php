<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'today_date',
        'trip_date',
        'car_number',
        'driver_name',
        'gross_income',
        'net_income',
        'road_cost',
        'maintenance_cost',
        'driver_commission'
        ];

}
