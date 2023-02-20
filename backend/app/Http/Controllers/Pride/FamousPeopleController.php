<?php

namespace App\Http\Controllers\Pride;

use App\Http\Controllers\Controller;
use App\Models\FamousPeople;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FamousPeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $famousPeople = FamousPeople::latest('created_at')->get();
        return view('famousPeople.index',compact('famousPeople'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('famousPeople.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'job' => ['required','string','max:255'],
            'description' => ['required'],
            'img' => ['required','image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048']
        ]);

        $image = $request->file('img');
        $directory = 'uploads/famous_people/';
        $img_name = Str::slug($request->name)."." . $image->getClientOriginalExtension();
        $image->move($directory,$img_name);
        $img_name = $directory.$img_name;

        $famousPeople = FamousPeople::create([
            'img' => $img_name,
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description
        ]);

        return redirect()->back()->with($famousPeople ? "success" : "error", true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FamousPeople  $famous_person
     * @return \Illuminate\Http\Response
     */
    public function show(FamousPeople $famous_person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FamousPeople  $famous_person
     * @return \Illuminate\Http\Response
     */
    public function edit(FamousPeople $famous_person)
    {
        return view('famousPeople.edit', compact('famous_person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FamousPeople  $famous_person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FamousPeople $famous_person)
    {
        $request->validate([
            'name' => ['string','max:255'],
            'job' => ['string','max:255'],
            'img' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048']
        ]);

        if($request->hasFile('img')) {
            $image = $request->file('img');
            $directory = 'uploads/famous_people/';
            $img_name = Str::slug($request->name).'.' . $image->getClientOriginalExtension();
            
            if(file_exists($famous_person->img)) {
                unlink($famous_person->img);
            }
            
            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $famous_person->img = $img_name;
        }

        $famous_person->name = $request->name;
        $famous_person->description = $request->description;
        $famous_person->job = $request->job;

        return redirect()->back()->with($famous_person->save() ? "success" : "error", true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FamousPeople  $famous_person
     * @return \Illuminate\Http\Response
     */
    public function destroy(FamousPeople $famous_person)
    {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        if($famous_person) {
            if(file_exists($famous_person->img)) {
                unlink($famous_person->img);
            }
            return redirect()->back()->with($famous_person->delete() ? "success" : "error", true);
        }
        return redirect()->back()->with("not_found", true);
    }
}
