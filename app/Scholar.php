<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    protected $fillable = ['name', 'scholarship_id'];
    
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
