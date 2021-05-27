<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        
        $new_contact=new Contact;
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string|max:700',
        ]);
        $new_contact->nome=$validatedData['name'];
        $new_contact->email=$validatedData['email'];
        $new_contact->testo=$validatedData['message'];
        $new_contact->save();
        return view('contacts');
    }
}
