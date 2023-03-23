<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResortStay;
use DB;

class AdminResortStayController extends Controller
{
   public function resort(){
        $resort = DB::table('resort_stays as r')
                ->select('r.*')
                ->orderBy('r.id', 'DESC')
                ->get();
                //dd($resort);
        return view('admin.resort',compact('resort'));
   }
}
