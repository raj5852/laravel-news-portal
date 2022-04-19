<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpController extends Controller
{
    //
    function index(){
        return view('php-page');
    }
}
