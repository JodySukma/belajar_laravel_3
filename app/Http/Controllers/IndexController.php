<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($nama){
        if($nama == "Djokri"){
            return abort(403,'Anda tidak punya hak akses');
        }elseif ($nama == "Iwan"){
            return "Halo, ".$nama;
        }else{
            return abort(404);
        }
    }
}
