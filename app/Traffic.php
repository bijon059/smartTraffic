<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    public function cases()
    {
        return $this->hasMany('App\Models\Cases','case_id','id.cases');
    }
    public function rider()
    {
        return $this->hasMany('App\Models\Rider','riders_id','id.riders');
    }
    public function log()
    {
        return $this->belongsTo('App\Models\Logs','logs_id','id.logs');
    }
}
