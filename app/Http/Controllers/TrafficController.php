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
        $data['rider'] = Rider::where('rfid',$rfid)->get()->first();
        $data['cases']  = Logs::join('cases', 'logs.case_id', '=', 'cases.id')
                        ->where('rider_id',$data['rider']->id)
                        ->with('cases')
                        ->get();

        return $data;
                    }
    public function riderRegister()
    {

        return view('traffic.riderRegister');
    }

    public function showIndex()
    {
        $data['cases']=Cases::get();
        return view('traffic.index', $data);
    }

    public function insertFromTraffic(Request $request)
    {
        $cases = explode(",",$request->cases_id);

        for ($i = 0; $i < count($cases); $i++) {
            $log = new Logs;
            $log->case_id = $cases[$i];
            $log->traffic_id = $request->traffic_id;
            $log->rider_id = $request->rider_id;

            $log->save();

            $rider = Rider::find($request->rider_id);
            $rider->case_status = 1;
            $rider->check_status = 1;
            $rider->save();
        }

        $rfid = $this->rfidData();
        $data['rider'] = Rider::where('rfid',$rfid)->get()->first();
        $data['cases']  = Logs::join('cases', 'logs.case_id', '=', 'cases.id')
                        ->where('rider_id',$data['rider']->id)
                        ->with('cases')
                        ->get();


        return view('traffic.casesPage', $data);
    }
}
