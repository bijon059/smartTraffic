<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    protected $table = 'logs';

    public function cases()
    {
        return $this->hasMany(Cases::class,'id');
    }
    public function traffic()
    {
        return $this->belongsTo(Traffic::class,'traffic_id');
    }
    
}
