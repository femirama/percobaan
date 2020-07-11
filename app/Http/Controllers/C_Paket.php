<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use PDF;

class C_Paket extends Controller{

    public function index(){
		$paket = Paket::all();
		return view('v_konten', ['paket'=>$paket]);
	}


	public function fil_pb(){
		// $paket = Paket::all();
		$fil_pb = Paket::where('jenis', 'PB')->get(); 
		// return view('v_konten', ['paket'=>$paket]);
		return view('v_filter_jenis', ['filter'=>$fil_pb]);
	}

	public function fil_pk(){
		$fil_pk = Paket::where('jenis', 'PK')->get(); 
		return view('v_filter_jenis', ['filter'=>$fil_pk]);
	}

	public function fil_jl(){
		$filter = Paket::where('jenis', 'JL')->get(); 
		return view('v_filter_jenis', ['filter'=>$filter]);
	}

	public function fil_jk(){
		$filter = Paket::where('jenis', 'JK')->get(); 
		return view('v_filter_jenis', ['filter'=>$filter]);
	}

	public function paket_opd(){
		$paket_opd = Paket::all();
		return view('paket_tender', ['paket_opd'=>$paket_opd]);
	}

	public function cetak_paket(){
    	$cetak_paket = Paket::all(); 
    	$pdf = PDF::loadview('cetak_paket',['cetak'=>$cetak_paket]);
    	// return $pdf->download('laporan-paket-pdf.pdf');
    	return $pdf->stream();
    }
}
