<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Janamastmi;

class JanamastmiController extends Controller
{
    public function index()
    {
        $janamastmi_data = Janamastmi::where('id',1)->first();
    //dd($about_data);
        return view('front.janamastmi', compact('janamastmi_data'));
    }
}