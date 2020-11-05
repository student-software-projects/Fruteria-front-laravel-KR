<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
    return view("Landing.Index");

    }
    public function Mandarina(){
        return view("Landing.Mandarina");
    }
    public function Domicilios(){
        return view("Landing.Domicilios");
}
}
