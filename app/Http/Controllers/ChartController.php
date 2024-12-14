<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

Class ChartController extends Controller
{
    public function index(){
        return view("chart");
    }
}
