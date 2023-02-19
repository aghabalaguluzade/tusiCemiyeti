<?php

namespace App\Http\Controllers\Ordubad;

use App\Http\Controllers\Controller;
use App\Models\Hotel_Restaurant;
use Illuminate\Http\Request;

class Hotel_RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel_restaurant = Hotel_Restaurant::find(1);
        return view('ordubad.hotel_restaurant',compact('hotel_restaurant'));
    }

    public function update(Request $request,$id)
    {
        $hotel_restaurant = Hotel_Restaurant::find($id);
        if($hotel_restaurant === null) {
            $hotel_restaurant = new Hotel_Restaurant();
            $hotel_restaurant->description = $request->description;
        }
        $hotel_restaurant->description = $request->description;
        
        if($hotel_restaurant->img === null || $hotel_restaurant->description === null) {
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
            $directory = 'uploads/ordubad/';
            $img_name = $request->file('img')->getClientOriginalName();
            
            if(file_exists($hotel_restaurant->img)) {
                unlink($hotel_restaurant->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $hotel_restaurant->img = $img_name;
        }

        return redirect()->back()->with($hotel_restaurant->save() ? "success" : "error", true);
    }
}