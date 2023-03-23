<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holi;

class HoliController extends Controller
{
    public function index()
    {
        $holi_data = Holi::where('id',1)->first();
    //dd($about_data);
        return view('front.holi', compact('holi_data'));
    }
}