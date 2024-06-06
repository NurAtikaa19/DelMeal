<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Breakfast extends Model
{
    protected $fillable = [
        'name', 'description', 'price',
    ];
    protected $table='menu';
}
