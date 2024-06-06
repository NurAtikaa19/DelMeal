<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Mealtype extends Model
{
    protected $fillable = [
        'type_name',
    ];

    protected $table='mealtype';
}
