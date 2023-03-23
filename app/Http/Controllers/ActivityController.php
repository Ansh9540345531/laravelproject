<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use Hash;
use Auth;
use Validator;



class ActivityController extends Controller
{
    public function index()
    {
        $activity = Activity::get();
        return view('admin.select_activities_view', compact('activity'));
    }

    public function add()
    {
        return view('admin.activities_add');
    }


    public function store(Request $request)
    {
    
        $obj = new Activity();
        $obj->activities = $request->activities;
        $obj->save();

        return redirect()->back()->with('success', 'Activity is submit successfully.');

    }

    public function edit($id)
    {
        $activity_data = Activity::where('id',$id)->first();
        return view('admin.activities_edit', compact('activity_data'));
    }

    public function update(Request $request,$id) 
    {        
        $obj = Activity::where('id',$id)->first();
        $obj->activities = $request->activities;
        $obj->update();

        return redirect()->back()->with('success', 'Activity Name is updated successfully.');
    }
    
    public function delete($id)
    {
        $data = Activity::where('id',$id)->first();
        $data->delete();

        return redirect()->back()->with('success', 'Activity Name is deleted successfully.');
    }

}
