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
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->mobile =  $request->mobile;

        $contact->save();

        return redirect()->route('contact.index');
    }

    public function edit($id){
        $contact = Contact::find($id);
        return view ('edit',['contact'=>$contact]);
    }

    public function update($id , Request $request){
        $contact= Contact::find($id);

        $contact->name = $request->name;
        $contact->mobile = $request->mobile;

        $contact->update();

        return redirect()->route('contact.index');
    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
