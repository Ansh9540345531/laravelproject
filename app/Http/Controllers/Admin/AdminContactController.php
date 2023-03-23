<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use DB;

class AdminContactController extends Controller
{
    public function contact(){
        $contact = DB::table('contacts as c')
                  ->select('c.*')
                  ->orderBy('c.id', 'DESC')
                  ->get();
                  //dd($contact);
        return view('admin.contact',compact('contact'));
    }
  
}
