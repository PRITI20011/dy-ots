<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchEngineOptimizationController extends Controller
{
    public function index(){
        return view('pages.search-engine-optimization');
    }
}
