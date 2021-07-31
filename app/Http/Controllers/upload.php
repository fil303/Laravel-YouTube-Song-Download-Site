<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hindi;
use App\English;
use App\Bangla;
use App\Update;
class upload extends Controller 
{
    public function get(){
    	return view('upload');
    }

    public function post(Request $r){


        if ($r->cat == 'hindi') {
            $a = new Hindi;
            $a->v = $r->vdieo;
            $a->them = $r->them;
            $a->t = $r->title;
            $a->cat = $r->cat;
            $a->list = $r->list;
            $a->save();
        } else if ($r->cat == 'english'){
            $a = new English;
            $a->v = $r->vdieo;
            $a->them = $r->them;
            $a->t = $r->title;
            $a->cat = $r->cat;
            $a->list = $r->list;
            $a->save();
        } else if ($r->cat == 'bangla'){
            $a = new Bangla;
            $a->v = $r->vdieo;
            $a->them = $r->them;
            $a->t = $r->title;
            $a->cat = $r->cat;
            $a->list = $r->list;
            $a->save();
        } else{
            $a = new Update;
            $a->v = $r->vdieo;
            $a->them = $r->them;
            $a->t = $r->title;
            $a->cat = $r->cat;
            $a->list = $r->list;
            $a->save();
        }
        
    	
    	
    }
}

