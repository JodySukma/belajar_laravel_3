<?php

namespace App\Http\Controllers;

use App\Gambar;
use File;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        $gambar = Gambar::get();

        return view('upload', ['gambar' => $gambar]);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
           'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
           'keterangan' => 'required'
        ]);

        // menyimpan file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Gambar::create([
           'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
//
//        // nama file
//        echo 'file name : '.$file->getClientOriginalName();
//        echo '<br/>';
//
//        // ekstensi file
//        echo 'file extension : '.$file->getClientOriginalExtension();
//        echo '<br/>';
//
//        // reat path
//        echo 'File Real Path : '.$file->getRealPath();
//        echo '<br/>';
//
//        // ukuran file
//        echo 'File size : '.$file->getSize();
//        echo '<br/>';
//
//        // tipe mime
//        echo 'file mime type : '.$file->getMimeType();
//
//        // isi dengan nama folder tempat kemana file diupload
//        $tujuan_upload = 'data_file';
//
//        // upload file
//        $file->move($tujuan_upload, $file->getClientOriginalName());

    }

    public function hapus($id)
    {
        // hapus file
        $gambar = Gambar::where('id',$id)->first();

        File::delete('data_file/'.$gambar->file);

        // hapus data
        Gambar::where('id',$id)->delete();

        return redirect()->back();
    }
}
