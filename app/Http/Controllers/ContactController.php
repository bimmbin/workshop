<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function home() {
        $contacts = Contact::All();

        return view('home')->with('contacts', $contacts);
    }
    public function contact_save(request $request) {
        $contacts = new Contact;
        $contacts->name = $request->name;
        $contacts->number = $request->number;
        $contacts->save();
        return view('home');
    }
    public function contact_edit($id) {
        $contact = Contact::find($id);
        // // $contact->name = $request->name;
        // // $contact->number = $request->number;
        // // $contact->save();
        return view('update')->with('contact', $contact);
    }
    public function contact_update($id, request $request) {
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->number = $request->number;
        $contact->save();
        return redirect('/');
    }
}
