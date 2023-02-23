<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function memberIndex() {
        $members = Member::all();
        return view('members', compact('members'));
    }

    public function membersDelete($id) {
        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        $members = Member::find($id);

        if($members) {
            return redirect()->back()->with($members->delete() ? "success" : "errror", true);
        }
        return redirect()->back()->with("not_found",true);
    }

    public function membersRead(Request $request, $id) {
        $members = Member::find($id);
        $members->read = $request->input('read');
        return redirect()->back()->with($members->save() ? "success" : "error", true);
    }
}
