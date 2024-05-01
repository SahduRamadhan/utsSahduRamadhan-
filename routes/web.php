<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/index');
});

route::get('produk', function(){
    $kode = ['BRG001','BRG002'];
    $nama = ['Buku', 'Pena'];    
    $jenis = ['Alat Tulis', 'Alat Tulis'];  
    $harga = ['25000', '15000']; 
    $jumlah = count($kode);
    return view('produkk/produk', compact('kode', 'jumlah', 'nama', 'jenis', 'harga'));
});

route::get('tambah',function (){
    return view('tambahh/tambah');
});