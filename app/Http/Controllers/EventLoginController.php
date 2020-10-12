<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventLoginController extends Controller
{
    protected $guard = 'event';

    protected function guard()
    {
        return Auth::guard('event');


    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Event $event, Request $request)
    {
        $credentials = ['token' => $event->token, 'password' => $request->password];

        if (Auth::guard('event')->attempt($credentials)) {
            return back();
        }
        return back()->with('login_error', 'Invalid Credentails');
    }
}
