<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUsIndex() {
        $contact_us = ContactUs::find(1);
        return view('contact.contactUs',compact('contact_us'));
    }

    public function contactUsPost(Request $request) {
        $request->validate([
            'location' => 'max:255',
            'email' => 'email|max:255',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:50',
        ]);

        $data = ContactUs::find(1);
        $data->location = $request->location;
        $data->email = $request->email;
        $data->phone = $request->phone;
       
        return redirect()->back()->with($data->save() ? "success" : "error", true);

    }
}
