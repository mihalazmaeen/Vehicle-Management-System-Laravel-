<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_cost extends Model
{
    use HasFactory;
    protected $table ='maintenance_cost';
    protected $fillable = [
        'trip_id',
        'm_type',
        'm_amount',
        'm_quantity',
        'm_total_cost'
    ];
}
