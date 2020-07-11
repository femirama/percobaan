<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller{

	public function main(){
    	DB::table('input_paket')->count_all_results();
    	return view('v_konten');
    }

   public function jk(){
        DB::table('aset_bpbj')->count_all_results();
        return redirect('/main');
    }







}
