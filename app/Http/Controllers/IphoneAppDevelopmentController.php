<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IphoneAppDevelopmentController extends Controller
{
    public function index(){
        return view('pages.iphone-app-development');
    }
}
