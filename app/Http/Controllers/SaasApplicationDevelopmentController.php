<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaasApplicationDevelopmentController extends Controller
{
    public function index(){
        return view('pages.saas-application-development');
    }
}
