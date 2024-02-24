<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function artikel ($id) {
        return 'Artikel dengan id '.$id ;
    }
}
