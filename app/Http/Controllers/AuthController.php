<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Department;

class AuthController extends Controller
{
    public function loginShowAdmin(Request $request)
    {
        return view('admin.login');
    }

    public function loginAdmin(Request $request)
    { 
        $request->validate([ 
            'phone_number'=>'required',
            'password'=>'required'            
        ]);

        if (! auth()->guard('admin')->attempt($request->only('phone_number', 'password'))) {  
            throw ValidationException::withMessages([
                'phone-number' => trans('auth.failed'),
            ]);
        }

        return redirect()->route('admin-dashboard');
    }

    public function loginShowTeacher(Request $request)
    {
        return view('teacher.login');  
    }

    public function loginTeacher(Request $request)
    {
        $request->validate([ 
            'phone_number'=>'required',
            'password'=>'required'            
        ]);

        if (! auth()->guard('teacher')->attempt($request->only('phone_number', 'password'))) {  
            throw ValidationException::withMessages([
                'phone-number' => trans('auth.failed'),
            ]);
        }

        return redirect()->route('teacher-dashboard'); 
    }

    public function loginShowStudent(Request $request)
    {
        return view('student.login');
    }

    public function loginStudent(Request $request)
    {
        $request->validate([ 
            'phone_number'=>'required',
            'password'=>'required'            
        ]);

        if (! auth()->guard('student')->attempt($request->only('phone_number', 'password'))) {  
            throw ValidationException::withMessages([
                'phone-number' => trans('auth.failed'),
            ]);
        }

        return redirect()->route('student-dashboard');
    }

    public function dashboardAdmin(Request $request)
    {
        $students = Student::count();
        $teachers = Teacher::count();
        $departments = Department::count();

        return view('admin.dashboard', compact('students', 'teachers', 'departments'));
    }

    public function dashboardTeacher(Request $request)
    {
        return view('teacher.dashboard');
    }

    public function dashboardStudent(Request $request)
    {
        return view('student.dashboard');
    }

    public function logoutAdmin()
    { 
        Auth::guard('admin')->logout();  

    return redirect('/');
}
}
