<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class Input extends Controller
{
    public function index(){
    	$nama = "Litak ";
    	$makan = ["nasgor", "bakso"];
    	return view('input', ['nama' => $nama, 'mkn' => $makan]);
    }

    public function baru($nama){
    	return $nama;
    }

    public function formulir(){
    	return view('input');
    }

    public function proses(Request $rq){
    	$no_paket = $rq->input('no_paket');
    	$program = $rq->input('program');
    	$kegiatan = $rq->input('kegiatan');
    	$pekerjaan  = $rq->input('pekerjaan');
    	$format = $rq->input('format');
    	$ta = $rq->input('ta');
    	$pokja = $rq->input('pokja');
    	return "No Paket : ".$no_paket. ", Program : ".$program. "kegiatan : ".$kegiatan. ", pekerjaan : ".$pekerjaan. "format : ".$format. ", ta : ".$ta. ", pokja : ".$pokja ;
    }

    public function insert(Request $rq){
        DB::table('aset_bpbj')->insert([
            'nama_brg' => $rq->nama_brg,
            'merk' => $rq->merk,
            'tahun' => $rq->tahun,
            'id_uuid' => Uuid::uuid4()->getHex()
        ]);
        return redirect('/aset');
    }

    public function edit($id){
        $edit = DB::table('aset_bpbj')->where('id_uuid',$id)->get();
        return view('v_aset_edit', ['edit' => $edit]);
    }

    public function update(Request $request){
        DB::table('aset_bpbj')->where('id_aset',  $request->id_aset)->update([
            'nama_brg' => $request->nama_brg,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
        ]);
        return redirect('/aset');
    }

    public function hapus($id){
        DB::table('aset_bpbj')->where('id_aset',$id)->delete();
        return redirect('/aset');
    }

    public function halaman(){
        $barang = DB::table('aset_bpbj')->paginate(10);
        return view('v_aset',['aset_bpbj' => $barang]);
    }


    public function cari(Request $request){
        $cari = $request->cari;
        $barang = DB::table('aset_bpbj')
        ->where('nama_brg','like',"%".$cari."%")
        ->paginate();
        return view('v_aset',['aset_bpbj' => $barang]);
    }

     public function prosess(Request $request){
        $this->validate($request,[
           'nama_brg' => 'required|min:5|max:20',
           'merk' => 'required',
           'tahun' => 'required|numeric'
        ]);
 
        // return view('proses',['data' => $request]);

        DB::table('aset_bpbj')->insert([
            'nama_brg' => $request->nama_brg,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'id_uuid' => Uuid::uuid4()->getHex()
        ]);
        return redirect('/halaman');
    }

}
