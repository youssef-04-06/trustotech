<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();             // Log out the user
        $request->session()->invalidate();        // Invalidate session
        $request->session()->regenerateToken();   // Regenerate CSRF token

        return redirect('/login');                // Redirect to login page
    }
}