<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello () {
        return 'Ohayou sekai good morning world';
    }
    public function greeting(){
        return view('blog.hello')
        ->with('name','Iyok')
        ->with('occupation','Pro Player Valorant');
    }
}
