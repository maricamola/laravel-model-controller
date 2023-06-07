<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class MyPageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function movies(){

        $movies = Movie::all();

        return view('movies' , compact('movies'));
    }
}
