<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function index() {
        return view('signin.index');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required|min:10|max:30',
            'password' => 'required|min:5|max:30'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/portfolio');
        }

        return back()->with('gagal', 'Failed to sign in');
    }

    public function signout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
