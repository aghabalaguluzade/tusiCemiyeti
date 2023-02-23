<?php

namespace App\Http\Controllers;
use App\Models\FamousPeople;
use Illuminate\Http\Request;

class FamousMenController extends Controller
{
    public function famousMenIndex() {
        $famousMen = FamousPeople::select('id','name','img','job','description')->get();
        return view('famous-men', compact('famousMen'));
    }

        public function famousShow($id) {
            $new = FamousPeople::find($id);
            return view('famous_detail',compact('new'));
        }
}
