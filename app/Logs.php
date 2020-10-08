<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    public function cases()
    {
        return $this->hasMany('App\Models\Cases','case_id','id.cases');
    }
    public function traffic()
    {
        return $this->belongsTo('App\Models\Traffic','traffics_id','id.traffics');
    }
    
}
