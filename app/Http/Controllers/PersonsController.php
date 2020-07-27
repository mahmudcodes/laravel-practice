<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function index(){
        $person_list = Person::all();
        // dd($person_list->toArray());
        return view('person', compact('person_list'));
    }
}
