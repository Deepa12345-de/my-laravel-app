<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index()
    {
        return view('layout.index');
    }
    public function admindashboard()
    {
        return view('admin.admindashboard');
    }
    public function adminstudent()
    {
        return view('admin.admin_student');
    }
    public function adminteacher()
    {
        return view('admin.admin_teacher');
    }
    public function admincourses()
    {
        return view('admin.admin_courses');
    }
    public function adminfees()
    {
        return view('admin.admin_fees');
    }
   
}
