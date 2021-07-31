<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Update;

class wolcome extends Controller
{
   public function index(){
   	 $data = Update::paginate(25);
   	return view('welcome',compact('data'));
   	
   }
} 
