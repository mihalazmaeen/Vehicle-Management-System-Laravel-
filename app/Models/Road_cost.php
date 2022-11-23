<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Road_cost extends Model
{
    use HasFactory;
    protected $table ='road_cost';
    protected $fillable = [
        'trip_id',
        'r_type',
        'r_amount',
        'r_quantity',
        'r_total_cost'
    ];
}
