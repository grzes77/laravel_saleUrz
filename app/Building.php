<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['name_build', 'post_code', 'city', 'adress', 'faculty_id'];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
