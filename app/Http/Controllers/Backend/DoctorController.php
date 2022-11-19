<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        return view('pages.backend.doctor');
    }
}