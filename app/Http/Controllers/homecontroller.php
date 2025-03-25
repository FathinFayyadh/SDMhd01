<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function home(){
        return view('home.tamplate');
    }
    Public function aboute(){
        return view('home.aboute');
    }
    Public function fasilitas(){
        return view('home.fasilitas');
    }
    
}
