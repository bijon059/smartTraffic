<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';

    public function log()
    {
        return $this->belongsTo(Logs::class,'case_id');
    }
}
