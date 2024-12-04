<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('welcome',['contacts'=>$contacts]);
    }

    public function store(Request $request){
        $name = $request->name;
        $mobile = $request->mobile;

        $contact = new Contact();
        $contact->name = $name;
        $contact->mobile = $mobile;

        $contact->save();

        return redirect()->route('contact.index');
    }

    public function edit($id){
        $contact = Contact::find($id);
        return view ('edit',['contact'=>$contact]);
    }

    public function update(){}

    public function delete(){}
}
