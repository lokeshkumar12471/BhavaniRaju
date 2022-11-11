<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('pages.frontend.home');
    }

    public function services()
    {
        return view('pages.frontend.services');
    }
    public function doctors()
    {
        return view('pages.frontend.doctors');
    }
    public function blogs()
    {
        return view('pages.frontend.blogs');
    }
    public function gallery()
    {
        return view('pages.frontend.gallery');
    }

    public function contact()
    {
        return view('pages.frontend.contact');
    }
}