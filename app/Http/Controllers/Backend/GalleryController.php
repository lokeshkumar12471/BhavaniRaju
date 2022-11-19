<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        return view('pages.backend.gallery');
    }
}