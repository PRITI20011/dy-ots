<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireWordpressDeveloperController extends Controller
{
    public function index(){
        return view('pages.hire-wordpress-developer');
    }
}
