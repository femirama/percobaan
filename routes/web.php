<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', function () {
    return "cobaaaaaaaaaaaaaaaaaaa ";
});

Route::get('input', function () {
    return view('input');
});

Route::get('c_input', 'input@index');

Route::get('panggilmethod/{nama}', 'input@baru');

Route::get('/inputt', 'input@formulir');

Route::post('/formulir/proses', 'input@proses');

Route::get('/blog', 'C_blog@home');

Route::get('/blog/tentang', 'C_blog@tentang');

Route::get('/blog/kontak', 'C_blog@kontak');

Route::get('/aset', "c_aset@index");

Route::post('/formulir/insert', 'input@insert');

Route::get('/formulir/edit/{id}', 'input@edit');

Route::post('/formulir/update', 'input@update');	

Route::get('/formulir/hapus/{id}', 'input@hapus');

Route::get('/halaman', 'input@halaman');

Route::get('/halaman/cari', 'input@cari');

Route::post('/prosess', 'input@prosess');





Route::get('main', 'maincontroller@main');  



Route::get('/paket', 'C_Paket@index');

Route::get('/fil_pb', 'C_Paket@fil_pb');	

Route::get('/fil_pk', 'C_Paket@fil_pk');	

Route::get('/fil_jl', 'C_Paket@fil_jl');	

Route::get('/fil_jk', 'C_Paket@fil_jk');	

Route::get('/tender', 'C_Paket@paket_opd');

Route::get('/paket/cetak', 'C_Paket@cetak_paket');	