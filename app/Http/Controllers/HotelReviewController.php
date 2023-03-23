<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelReview;
use Hash;
use Auth;
use Validator;



class HotelReviewController extends Controller
{
    public function store(Request $request)
    {
    
        $obj = new HotelReview();
        $obj->first_name = $request->first_name;
        $obj->last_name = $request->last_name;
        $obj->booking_number = $request->booking_number;
        $obj->title_review = $request->title_review;
        $obj->message_review = $request->message_review;
        $obj->save();


        return redirect()->back()->with('success', 'Hotel Review is added successfully.');

    }

}
