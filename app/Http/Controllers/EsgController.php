<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class EsgController extends Controller
{
    public function index()
    {
        return Inertia::render('Esg/Index');
    }

    public function program()
    {
        return Inertia::render('Esg/Program');
    }
}
