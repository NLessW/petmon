<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function index(Request $request)
    {
        return Inertia::render('Booking');
    }
}
