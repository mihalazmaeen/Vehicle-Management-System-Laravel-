<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_infos extends Model
{
    use HasFactory;
    protected $table = 'trip_infos';
    protected $fillable = [
        'trip_id',
        'destination_from',
        'destination_to'

    ];
}
