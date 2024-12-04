<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $users = [
        //     ['name'=>'Rahul'],
        //     ['name'=>'Hari'],
        //     ['name'=>'Pari']
        // ];
        // return view('welcome',['users'=>$users]);

        $contact=Contact::all();
        return $contact;
    }

    public function header(){
        return view ('header');
    }
}
