<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function rfidData()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', '192.168.43.36/smartTraffic/app/RFIDdata/UIDContainer.php');
        $uid = $response->getBody();
        //$uid=base64_decode($uid);
        //$data['uid']=$uid;
        return $uid;
    }

}
