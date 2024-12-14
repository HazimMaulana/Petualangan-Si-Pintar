<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

Class GameController extends Controller
{
    public function index(){
        return view("gameChoice");
    }

    public function game(){
        return view("games");
    }
}
