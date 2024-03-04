<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    // Other methods...

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
        }

        // Authentication failed...
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
