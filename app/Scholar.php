<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    public function scholarship()
    {
        return $this->belongsTo(Scholar::class);
    }
}
