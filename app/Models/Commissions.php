<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commissions extends Model
{
    use HasFactory;
    protected $table = 'commissions';
    protected $fields = [
        'trip_id',
        'commission_amount',
        'driver_name'
    ];
}
