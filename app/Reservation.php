<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function field_study()
    {
        return $this->belongsTo(Field_study::class);
    }
}
