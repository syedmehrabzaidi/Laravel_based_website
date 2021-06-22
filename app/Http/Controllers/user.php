<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function list(){

       return view('user_list');
    }
    function create(){

        return view('create'); 
     }
}
