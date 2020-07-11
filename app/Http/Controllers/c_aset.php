<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class c_aset extends Controller
{
    public function index(){
    	$asett = DB::table('aset_bpbj')->get();
    	return view('v_aset', ['aset_bpbj' => $asett]);
    }

    
}
