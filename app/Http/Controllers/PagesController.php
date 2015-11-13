<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    function getAbout(){
        return view('about');
    }

    function getBlog(){
        return view('Blog');
    }
}
