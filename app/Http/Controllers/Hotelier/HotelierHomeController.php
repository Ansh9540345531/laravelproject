<?php

namespace App\Http\Controllers\Hotelier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;



class HotelierHomeController extends Controller
{
    public function index()
    {
        return view('hotelier.home');
    }
}
