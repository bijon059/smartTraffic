<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rider;
use App\Logs;
use App\Cases;

class TrafficController extends Controller
{
    // Data Collection Start
    public function rfidData()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', '192.168.43.155/smartTraffic/app/RFIDdata/UIDContainer.php');
        $uid = $response->getBody();
        $uid=base64_decode($uid);
        
        return $uid;
    }
    // Data Collection End
    public function index()
    {

        $rfid = $this->rfidData();
        $data['riders'] = Rider::where('rfid',$rfid)->get()->first();
        $data['cases']  = Logs::join('cases', 'logs.case_id', '=', 'cases.id')
                        ->where('rider_id',$data['riders']->id)
                        ->with('cases')
                        ->get();

        return view('traffic.index', $data);
    }
    public function register()
    {
        return view('traffic.register');
    }
}
