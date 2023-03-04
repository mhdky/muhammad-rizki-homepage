<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|email|max:50',
            'message' => 'required|min:5|max:1000'
        ]);

        Contact::create($validateData);
        return redirect('/')->with('berhasil', 'Pesan terkirim, terima kasih');
    }
}
