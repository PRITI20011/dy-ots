<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireWebDesignerController extends Controller
{
    public function index(){
        return view('pages.hire-web-designer');
    }
}
