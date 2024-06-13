<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpadAppDevelopmentController extends Controller
{
    public function index(){
        return view('pages.ipad-app-development');
    }
}
