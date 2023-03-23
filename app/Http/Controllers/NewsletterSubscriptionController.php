<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsletterSubscription;
use App\Mail\Websitemail;
use Hash;
use Auth;
use Redirect;


class NewsletterSubscriptionController extends Controller
{


    public function index()
    {
        $newsletter = NewsletterSubscription::get();
        return view('admin.newsletter_view', compact('newsletter'));
    }



    public function store(Request $request)
    {
    
        $obj = new NewsletterSubscription();
        $obj->email = $request->email;
        $obj->save();


        return redirect()->back()->with('success', 'Newsletter Subscription is successfully.');

    }
}
