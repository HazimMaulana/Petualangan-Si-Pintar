<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

Class MateriController extends Controller
{
    public function index(){
        return view("materi");
    }

    public function videoPembelajaran(){
        return view("videopembelajaran");
    }
    
    public function materiPembelajaran(){
        return view("materipembelajaran");
    }
}
