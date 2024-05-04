<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginShowAdmin(Request $request)
    {
        return view('admin.login');
    }

    public function loginAdmin(Request $request)
    {
        
    }

    public function loginShowTeacher(Request $request)
    {
        return view('teacher.login');  
    }

    public function loginTeacher(Request $request)
    {
        
    }

    public function loginShowStudent(Request $request)
    {
        return view('student.login');
    }

    public function loginStudent(Request $request)
    {
        
    }
}
