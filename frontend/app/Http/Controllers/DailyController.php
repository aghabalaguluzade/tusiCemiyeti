<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use Illuminate\Http\Request;

class DailyController extends Controller
{


  public function dailyIndex() {
    $dailyAll = Daily::select('id','title','img','description')->get();
    return view('daily',compact('dailyAll'));
        }



}
