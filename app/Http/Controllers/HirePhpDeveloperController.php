<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HirePhpDeveloperController extends Controller
{
    public function index(){
        return view('pages.hire-PHP-developer');
    }
}
