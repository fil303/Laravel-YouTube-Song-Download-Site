<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class category extends Controller
{
   public function hindi(){
   		return view('playlist.hplaylist');
   }
   public function english(){
   		return view('playlist.eplaylist');
   }
   public function bangla(){
   		return view('playlist.bangla');
   }


}
