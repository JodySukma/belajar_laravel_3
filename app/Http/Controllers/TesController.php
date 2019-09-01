<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    // Menampilkan isi session
    public function tampilkanSession(Request $request)
    {
        if($request->session()->has('nama')){
            echo $request->session()->get('nama');
        }else{
            echo 'Tidak ada session';
        }
    }

    // Membuat session
    public function buatSession(Request $request)
    {
        $request->session()->put('nama', 'Jody Sukma Atmadja');
        echo "data telah ditambahkan ke session";
    }

    // Menghapus session
    public function hapusSession(Request $request)
    {
        $request->session()->forget('nama');
        echo "data telah dihapus dari session";
    }
}
