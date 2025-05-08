<?php
namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function showRegisterForm()
    {
        return view('layout.index');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $student = new Student();
        $student->name = $validated['name'];
        $student->email = $validated['email'];
        $student->password = bcrypt($validated['password']);
        $student->save();

        // Session alert
        return redirect()->route('student.student_dashboard')->with('success', 'Registration successful! Welcome, ' . $student->name);
    }

    public function dashboard()
    {
        return view('student.student_dashboard');
    }
}
