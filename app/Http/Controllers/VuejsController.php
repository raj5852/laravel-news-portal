<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuejsController extends Controller
{
    //
    function index(){
        return view('vue-page');
    }
}
