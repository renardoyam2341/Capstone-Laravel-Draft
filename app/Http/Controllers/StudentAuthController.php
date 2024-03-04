<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentAuthController extends Controller
{
    /**
     * Show the student login form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showLoginForm()
    {
        return view('student.login');
    }

    /**
     * Handle student login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('student')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended(route('student.dashboard'));
        }

        // Authentication failed...
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}