<?php

namespace App\Http\Controllers\Activities;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = Activity::find(1);
        return view('activity.activity',compact('activity'));
    }

    public function update(Request $request,$id)
    {
        $activity = Activity::find($id);
        if($activity === null) {
            $activity = new Activity();
            $activity->description = $request->description;
        }
        $activity->description = $request->description;
        
        if($activity->img === null || $activity->description === null) {
            $request->validate([
                'img' => 'required|image|mimes:png,jpg,jpeg,gif,jfif,webp',
                'description' => 'required'
            ]);    
        }

        $request->validate([
        'img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp',
        'description' => 'required'
    ]);

        if($request->hasFile('img')) {
            $image = $request->file('img');
            $directory = 'uploads/activity/';
            $img_name = $request->file('img')->getClientOriginalName();
            
            if(file_exists($activity->img)) {
                unlink($activity->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $activity->img = $img_name;
        }

        return redirect()->back()->with($activity->save() ? "success" : "error", true);
    }
}
