<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentManagementSystemDevelopmentController extends Controller
{
    public function index(){
        return view('pages.document-management-system-development');
    }
}
