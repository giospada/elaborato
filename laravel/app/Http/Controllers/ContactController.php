<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $new_contact=new Contact;
        $new_contact->nome=$request->input('name');
        $new_contact->email=$request->input('email');
        $new_contact->testo=$request->input('message');
        $new_contact->save();
        return view('contacts');
    }
}
