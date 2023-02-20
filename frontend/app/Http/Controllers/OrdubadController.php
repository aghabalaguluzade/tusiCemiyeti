<?php

namespace App\Http\Controllers;

use App\Models\Customs_Traditions;
use App\Models\Fauna;
use App\Models\Flora;
use App\Models\Folklore;
use App\Models\General_Information;
use App\Models\History;
use App\Models\Hotel_Restaurant;
use App\Models\Kitchen;
use App\Models\Monuments;
use App\Models\Nature;
use App\Models\Production;
use App\Models\Tourism;
use Illuminate\Http\Request;

class OrdubadController extends Controller
{
    public function ordubadIndex() {
        $history = History::select('description','img')->first();
        $monuments = Monuments::select('img','description')->first();
        $folklore = Folklore::select('img','description')->first();
        $customs_traditions = Customs_Traditions::select('img','description')->first();
        $nature = Nature::select('img','description')->first();
        $kitchen = Kitchen::select('img','description')->first();
        $flora = Flora::select('img','description')->first();
        $tourism = Tourism::select('img','description')->first();
        $fauna = Fauna::select('img','description')->first();
        $hotel_restaurant = Hotel_Restaurant::select('img','description')->first();
        $general_information = General_Information::select('img','description')->first();
        $production = Production::select('img','description')->first();
        return view('text-inner',compact('history','monuments','folklore','customs_traditions','nature','kitchen','flora','tourism','fauna','hotel_restaurant','general_information','production'));
    }
}
