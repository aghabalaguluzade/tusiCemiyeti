<?php

namespace App\Http\Controllers\Honor;

use App\Http\Controllers\Controller;
use App\Models\Martyrs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MartyrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $martyrs = Martyrs::latest('created_at')->get(); 
        return view('martyrs.index', compact('martyrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('martyrs.create');
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
        $directory = 'uploads/martyr/';
        $img_name = Str::slug($request->name)."." . $image->getClientOriginalExtension();
        $image->move($directory,$img_name);
        $img_name = $directory.$img_name;

        $martyr = Martyrs::create([
            'img' => $img_name,
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description
        ]);

        return redirect()->back()->with($martyr ? "success" : "error", true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Martyrs  $martyr
     * @return \Illuminate\Http\Response
     */
    public function show(Martyrs $martyr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Martyrs  $martyr
     * @return \Illuminate\Http\Response
     */
    public function edit(Martyrs $martyr)
    {
        return view('martyrs.edit', compact('martyr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Martyrs  $martyr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Martyrs $martyr)
    {
        $request->validate([
            'name' => ['string','max:255'],
            'job' => ['string','max:255'],
            'img' => ['image','mimes:png,jpg,jpeg,gif,jfif,webp','max:2048']
        ]);

        if($request->hasFile('img')) {
            $image = $request->file('img');
            $directory = 'uploads/martyr/';
            $img_name = Str::slug($request->name).'.' . $image->getClientOriginalExtension();
            
            if(file_exists($martyr->img)) {
                unlink($martyr->img);
            }
            
            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $martyr->img = $img_name;
        }

        $martyr->name = $request->name;
        $martyr->description = $request->description;
        $martyr->job = $request->job;

        return redirect()->back()->with($martyr->save() ? "success" : "error", true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Martyrs  $martyr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Martyrs $martyr)
    {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        if($martyr) {
            if(file_exists($martyr->img)) {
                unlink($martyr->img);
            }
            return redirect()->back()->with($martyr->delete() ? "success" : "error", true);
        }
        return redirect()->back()->with("not_found", true);
    }
}