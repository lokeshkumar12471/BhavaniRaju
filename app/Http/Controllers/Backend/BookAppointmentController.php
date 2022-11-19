<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class BookAppointmentController extends Controller
{
    public function index()
    {
        return view('pages.backend.bookappointment');
    }
}