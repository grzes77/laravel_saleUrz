<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faculty;

class Event extends Model
{
    protected $fillable =['name_events', 'faculty_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
