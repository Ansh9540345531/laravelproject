<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OutStationCab;
use DB;

class AdminOutstationCabController extends Controller
{
    public function outstationcab(){
        $data = DB::table('out_station_cabs as c')
                ->select('c.to','c.from','c.email','c.mobile','c.person','c.pickup_date','c.time')
                ->where('return_date',NULL)
                ->orderBy('id', 'DESC')
                ->get();
                //dd($data);
       
    return view('admin.outstationcablist',compact('data'));
    }

    public function outstationcablist(){
            $data = DB::table('out_station_cabs as c')
                ->select('c.to','c.from','c.email','c.mobile','c.person','c.return_date','c.pickup_date','c.time')
                ->where('return_date','!=',NULL)
                ->orderBy('id', 'DESC')
                ->get();
                //dd($data);

            return view('admin.outstationcab',compact('data'));
    }
}
