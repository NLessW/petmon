<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('Contact/Index');
    }

    public function store(StoreContactRequest $request)
    {
        Contact::create($request->all());
        return Redirect::back()->with('success', '정상적으로 접수되었습니다.');
    }

    public function status()
    {
        return Inertia::render('Contact/Status');
    }
}
