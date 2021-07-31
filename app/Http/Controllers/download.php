<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hindi;
use App\Bangla;
use App\English;
use App\Update;

class download extends Controller
{
    public function index($cat, $id){
    	if ($cat == 'hindi') {
    		$a = Hindi::where('id', $id)->first();
    	return view('download', compact('a'));
    	}else if ($cat == 'english') {
    		$a = English::where('id', $id)->first();
    	return view('download', compact('a'));
    	}else if ($cat == 'bangla') {
    		$a = Bangla::where('id', $id)->first();
    	return view('download', compact('a'));
    	} else{
    		$a = Update::where('id', $id)->first();
    	return view('download', compact('a'));
    	}

    	
    	

    }
}
