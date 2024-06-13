<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireSmoSpecialistController extends Controller
{
    public function index(){
        return view('pages.hire-smo-specialist');
    }
}
