<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VillaStay;
use DB;

class AdminVillaStayController extends Controller
{
    public function villa(){
        $villa = DB::table('villa_stays as v')
                  ->select('v.*')
                  ->orderBy('v.id', 'DESC')
                  ->get();
                  //dd($villa);
        return view('admin.villa',compact('villa'));
    }
}
