<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    public function traffics()
    {
        return $this->hasMany('App\Models\Traffic','traffics_id','id.traffics');
    }
    public function rider()
    {
        return $this->belongsTo('App\Models\Rider','riders_id','id.riders');
    }
    public function log()
    {
        return $this->belongsTo('App\Models\Logs','logs_id','id.logs');
    }
}
