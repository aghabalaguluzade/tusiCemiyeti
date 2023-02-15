<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function AdminLoginIndex() {
        return view('admin_login');
    }

    public function AdminLoginPost(Request $request) {
        $request->validate([
            'email' => 'required|max:255|email:rfc,dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard'); 
        }
        return back()->withErrors([
            'email' => 'Daxil olunan email səhvdir.',
            'password' => "Daxil olunan şifrə səhvdir"
        ])->onlyInput('email','password');
    }

    public function AdminLogout(Request $request) {

        Auth::guard('web')->logout();
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('AdminLoginIndex');

    }
}
