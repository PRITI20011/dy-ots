<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiUxDesignController extends Controller
{
    public function index(){
        return view('pages.ui-ux-design');
    }
}
