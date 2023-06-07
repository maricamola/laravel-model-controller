<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function movies(){
        return view('movies');
    }

//     public function movies(){
// // con il metodo all salviamo nella variabile tutti i dati della tabella
//         $movies = movies::all();

//         return view('movies' , compact('movies'));
//     }
}
