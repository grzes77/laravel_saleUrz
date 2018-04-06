<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Building;

class Room extends Model
{
    protected $fillable = ['number', 'building_id' , 'type_romms_id' , 'numbers_of_seats', 'surface','numbers_of_computers', 'additional_equipment', 'addition_information'  ];


    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
