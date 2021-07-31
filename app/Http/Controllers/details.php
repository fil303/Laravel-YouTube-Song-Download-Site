<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hindi;
use App\English;
use App\Bangla;
use App\Update;



class details extends Controller
{
    public function index($cat, $id){

    	if ($cat == 'hindi') {
    		$a = Hindi::where('id', $id)->first();
		    //$a = DB::table('hindis')->where('id', id)->first(); 
		    return view('details.details',compact('a'));


    	} else if ($cat == 'english'){
    		$a = English::where('id', $id)->first();
		    //$a = DB::table('hindis')->where('id', id)->first(); 
		    return view('details.details',compact('a'));

    	}else if ($cat == 'bangla'){
    		$a = Bangla::where('id', $id)->first();
		    //$a = DB::table('hindis')->where('id', id)->first(); 
		    return view('details.details',compact('a'));
    		
    	} else {
    		$a = Update::where('id', $id)->first();
		    //$a = DB::table('hindis')->where('id', id)->first(); 
		    return view('details.details',compact('a'));
    	}
    	
    	
    	
    }










    // public function h($id){
    // 	$a = Hindi::where('id', $id)->get();
    // 	//$a = DB::table('hindis')->where('id', id)->first(); 
    // 	return view('details.details',compact('a'));
    // }

    // public function e($id){
    // 	$a = English::where('id', $id)->first();
    // 	//$a = DB::table('hindis')->where('id', id)->first(); 
    // 	return view('details.details',compact('a'));
    // }


    // public function b($id){
    // 	$a = Bangla::where('id', $id)->first();
    // 	//$a = DB::table('hindis')->where('id', id)->first(); 
    // 	return view('details.details',compact('a'));
    // }


    // public function u($id){
    // 	$a = Update::where('id', $id)->first();
    // 	//$a = DB::table('hindis')->where('id', id)->first(); 
    // 	return view('details.details',compact('a'));
    // }
}
