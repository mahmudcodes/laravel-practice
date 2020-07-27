<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    // public function mul($a){
    //     $multi = $a*5;
    //     return view('multi', [ 'result' => $multi , 'name' => 'Mahmud Hasan' ]);
    // }
    // public function sum($a, $b){
    //     $sum = $a + $b;
    //     return "Sum is ".$sum;
    // }

    public function sum($a, $b){
    	$result = $a + $b;
    	// $a = ['data' => $result];
    	// return view('sum', $a);

    	// return view('sum', ['data' => $result]);
    	// return view('sum', compact('result'));
    	// $data = ['name' => "Mahmud" , 'Roll' => "216135", "Mobile" => "01556856585"];
    	$data = [ 'name' => "Mahmud" , 'Roll' => "216135", "Mobile" => "01556856585", "Address" => "Rajshahi" ];
    	// return view('sum')->with('result',$sum)->with('bbb',$a)->with('person', $data);
    	return view('sum', compact('result','data'));
    }
    public function sub(){
    	// dd(request());
    	// return "sub";
    	// $a = request()->path();
    	// $b = request()->url();
    	$m = request()->method();
    	return $m;
    }
    public function div(){
    	return "div";
    }
}
