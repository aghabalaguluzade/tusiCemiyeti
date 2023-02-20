<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Creation;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activityIndex() {
        $activity = Activity::select('img','description')->first();
        $creation = Creation::select('img','description')->first();
        return view('activity', compact('activity','creation'));
    }

    
}
