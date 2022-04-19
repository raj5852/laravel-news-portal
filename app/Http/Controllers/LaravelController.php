<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    //

    function index(){
        return view('laravel-page');
    }
}
