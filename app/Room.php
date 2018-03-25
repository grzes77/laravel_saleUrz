<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['number', ' numbers_of_seats', 'surface',' numbers_of_computers', 'additional_equipment', 'additonal_information'  ];
}
