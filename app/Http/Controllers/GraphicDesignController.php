<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphicDesingController extends Controller
{
    public function index(){
        return view('pages.graphic-design');
    }
}
