<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WireframeDesignController extends Controller
{
    public function index(){
        return view('pages.wireframe-design');
    }
}
