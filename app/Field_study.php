<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faculty;

class Field_study extends Model
{

    protected $fillable = ['name_field_study', 'faculty_id', 'mode_of_study' , 'year_of_start'];


    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
