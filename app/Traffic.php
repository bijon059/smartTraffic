<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    protected $table = 'traffics';
    
    public function logs()
    {
        return $this->hasMany(Logs::class,'id');
    }
}
