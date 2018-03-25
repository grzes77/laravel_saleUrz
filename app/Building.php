<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['name_build', 'post_code', 'city', 'address', 'faculty_id'];
}
