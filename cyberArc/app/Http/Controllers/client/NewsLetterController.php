<?php

namespace App\Http\Controllers\client;

use App\Mail\NewsLetter;
use Illuminate\Http\Request;
use App\Models\SubscribedUser;
use App\Mail\SubscribedUserMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class NewsLetterController extends Controller
{
    public function user(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = SubscribedUser::create([
            'email' => $request->email,
        ]);

        Mail::to($request->email)->send(new SubscribedUserMail($user));

        return redirect()->route('web.index');

    }

    public function email()
    {
        $emails = SubscribedUser::get('email');
        
    }
}
