<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncDripController extends Controller
{
    public function enktripsi()
    {
        $encrypted = Crypt::encryptString('Hallo');
        $decryped = Crypt::decryptString($encrypted);

        echo "hasil enkripsi : " .$encrypted;
        echo "<br/>";
        echo "<br/>";
        echo "hasil deskripsi : " .$decryped;
    }

    public function data()
    {
        $parameter =[
            'nama' => 'Jody Sukma Atmadja',
            'alamat' => 'Bandung'
        ];
        $enkripsi = Crypt::encrypt($parameter);
        echo "<a href='/data/".$enkripsi."'>Klik</a>";
    }

    public function data_proses($data)
    {
        $data = Crypt::decrypt($data);

        echo "Nama : " .$data['nama'];
        echo "<br/>";
        echo "Alamat : " .$data['alamat'];
    }
}
