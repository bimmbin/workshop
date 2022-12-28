<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function hello() {
        return view('hello');
    }
    public function porm() {
        return view('porm');
    }
    
}
