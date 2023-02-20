<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactIndex() {
        $contacts = ContactUs::select('location','phone','email')->get();
        return view('contact', compact('contacts'));
    }

    public function contactPost(Request $request) {
        $request->validate([
            'name' => 'max:255',
            'email' => 'email|max:255',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:50',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone
        ]);

        return redirect()->back()->with($contact ? "success" : "error", true);
    }
}