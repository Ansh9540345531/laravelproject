<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CabEnquiry;
use DB;

class AdminCabController extends Controller
{
    public function cablisting(){
        $data = DB::table('cab_enquiries as c')
                ->select('c.to','c.from','c.email','c.mobile','c.person','c.pickup_date','c.time')
                ->where('return_date',NULL)
                ->orderBy('id', 'DESC')
                ->get();
                //dd($data);
       
    return view('admin.cablisting',compact('data'));
    }

    public function cablist(){
            $data = DB::table('cab_enquiries as c')
                ->select('c.to','c.from','c.email','c.mobile','c.person','c.return_date','c.pickup_date','c.time')
                ->where('return_date','!=',NULL)
                ->orderBy('id', 'DESC')
                ->get();
                //dd($data);

            return view('admin.cablist',compact('data'));
    }
}
