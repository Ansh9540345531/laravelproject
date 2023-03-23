<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diwali;

class DiwaliController extends Controller
{
    public function index()
    {
        $diwali_data = Diwali::where('id',1)->first();
    //dd($about_data);
        return view('front.diwali', compact('diwali_data'));
    }
}