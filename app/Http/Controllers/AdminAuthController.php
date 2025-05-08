<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('layout.index');
    }

    // Handle login logic
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Hardcoded admin credentials
    $adminEmail = 'admin@exa.com';
    $adminPassword = 'admin123'; // Change this to something secure!

    if ($request->email === $adminEmail && $request->password === $adminPassword) {
        // You can manually set session if needed
        session(['admin_logged_in' => true]);

        return redirect()->route('admin.admindashboard')->with('success', 'Login Successfully');
    }

    return back()->with('error', 'Invalid email or password');
}

    

    // Handle logout
    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_email']);

        // Redirect to login page after logout
        return redirect('/admin/login');
    }
}
