<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.backend.about.display');
    }
}