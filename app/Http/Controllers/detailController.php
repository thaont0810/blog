<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    public function getDetail(){
        return view ('main.contact');
    }
}
