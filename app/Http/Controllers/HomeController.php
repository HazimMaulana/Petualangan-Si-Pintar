<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

Class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
}
