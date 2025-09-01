<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\DonationResource;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreDonationRequest;

class DonationController extends Controller
{
    function auth(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'contact' => ['required'],
        ]);

        if (!empty($request->auth_code)) {
            if ($request->session()->get('auth_code') == $request->auth_code) {
                $request->session()->put('name', $request->name);
                $request->session()->put('contact', $request->contact);
                $request->session()->forget('auth_code');
                return Redirect::back()->with('success', '정상적으로 인증되었습니다.');
            } else {
                return Redirect::back()->with('error', '인증번호를 다시 확인해 주세요.');
            }
        }

        $exists = Donation::where('name', $request->name)
            ->where('contact', $request->contact)
            ->exists();

        if (!$exists) {
            return Redirect::back()->with('error', '정보가 확인되지 않습니다.');
        }

        $auth_code = six_digit_code();
        Log::debug('auth_code: ' . $auth_code);

        $result = send_sms($request->contact, '[' . config('app.name') . '] 인증번호 [' . $auth_code . '] 입력해 주세요.');
        if ($result->result_code != "1") {
            return Redirect::back()->with('error', $result->message);
        }

        $request->session()->put('auth_code', $auth_code);

        return Redirect::back()->with('success', '인증번호가 발송되었습니다.');
    }

    public function index(Request $request)
    {
        return Inertia::render('Donation/Index');
    }

    public function store(StoreDonationRequest $request)
    {
        Donation::create($request->all());
        return Redirect::back()->with('success', '정상적으로 접수되었습니다.');
    }

    public function list(Request $request)
    {
        $donations = null;
        $donation = null;
        $auth = $request->session()->get('name') && $request->session()->get('contact') ? true : false;

        if ($auth) {
            if (!empty($request->code)) {
                $donation = Booking::where('code', $request->code)->first();
                $donation = new DonationResource($donation);
            } else {
                $donations = Donation::where('name', $request->session()->get('name'))
                    ->where('contact', $request->session()->get('contact'))
                    ->latest()
                    ->paginate(10);
                $donations = DonationResource::collection($donations);
            }
        }
        return Inertia::render('Donation/List', [
            'donations' => $donations,
            'donation' => $donation,
            'auth' => $auth,
        ]);
    }

    public function history(Request $request)
    {
        $donations = null;
        $donation = null;
        $auth = $request->session()->get('name') && $request->session()->get('contact') ? true : false;

        if ($auth) {
            if (!empty($request->code)) {
                $donation = Booking::where('code', $request->code)->first();
                $donation = new DonationResource($donation);
            } else {
                $donations = Donation::where('name', $request->session()->get('name'))
                    ->where('contact', $request->session()->get('contact'))
                    ->latest()
                    ->paginate(10);
                $donations = DonationResource::collection($donations);
            }
        }
        return Inertia::render('Donation/History', [
            'donations' => $donations,
            'donation' => $donation,
            'auth' => $auth,
        ]);
    }
}
