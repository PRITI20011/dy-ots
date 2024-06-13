<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileAppDevelopmentController extends Controller
{
    public function index(){
        return view('pages.mobile-apps-development');
    }
}
