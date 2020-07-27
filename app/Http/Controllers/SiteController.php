<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
    	$data = '<p style="background:red;">This is Home Page Text</p>';
    	$data1 = '<script>alert("Danger Alert")</script>';

    	return view('welcome' , compact('data','data1'));
    }

    public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('contact');
    }
    public function extra(){
    	return view('extra');
    }
}
