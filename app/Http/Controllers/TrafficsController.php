<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traffic;
use App\Cases;
use App\Logs;
use App\Rider;



class TrafficsController extends Controller
{
    public function index()
    { 
        $data = Logs::with('traffic','cases')->where('rider_id','1')->get();
        
        return $data[0]->traffic['first_name'];

    }
}
