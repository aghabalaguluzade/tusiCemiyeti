<?php

namespace App\Http\Controllers;

use App\Models\Martyrs;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    public function heroesIndex() {
        $heroes = Martyrs::select('name','img','job','description')->get();
        return view('heroes', compact('heroes'));
    }
}
