<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hindi;
use App\English;
use App\Bangla;

class videolist extends Controller
{
    public function h($i){

    	$a = Hindi::where('list', $i)->get();
    	return view('videolist',compact('a'));

    }


    public function e($i){

    	$a = English::where('list', $i)->get();
    	return view('videolist',compact('a'));
    	
    }


    public function b($i){

    	$a = Bangla::where('list', $i)->get();
    	return view('videolist',compact('a'));
    	
    }
}
