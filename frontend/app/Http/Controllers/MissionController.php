<?php

namespace App\Http\Controllers;

use App\Models\Charitable;
use App\Models\Enlightenment;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function missionIndex() {
        $charitable = Charitable::select('img','description')->first();
        $enlightenment = Enlightenment::select('img','description')->first();
        return view('mission', compact('charitable','enlightenment'));
    }
}
