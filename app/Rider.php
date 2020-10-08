<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    public function cases()
    {
        return $this->hasMany('App\Models\Cases','case_id','id.cases');
    }
    public function traffics()
    {
        return $this->hasMany('App\Models\Traffic','traffics_id','id.traffics');
    }
}
