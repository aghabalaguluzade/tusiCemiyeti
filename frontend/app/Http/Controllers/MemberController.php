<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function membersIndex() {
        return view('members');
    }

    public function membersPost(Request $request) {
        $request->validate([
            'name' => 'max:255',
            'email' => 'email|max:255',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:50',
        ]);

        $contact = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone
        ]);

        return redirect()->back()->with($contact ? "success" : "error", true);        
    }
}
