<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index() {
        //$name="laravel"; 
        //$arrayName = array(1,2,3,4,5,6,7,8,9);
       return view('task1.login');
       }
}
