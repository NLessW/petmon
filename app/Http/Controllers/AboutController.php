<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return Inertia::render('About/Index');
    }

    public function hello()
    {
        return Inertia::render('About/Hello');
    }

    public function organization()
    {
        return Inertia::render('About/Organization');
    }

    public function people()
    {
        return Inertia::render('About/People');
    }

    public function ci()
    {
        return Inertia::render('About/Ci');
    }
}
