<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StudentStoreRequest;
use App\Http\Requests\Admin\StudentUpdateRequest;
use App\Helpers\UploadHelper;

use App\Models\Student;
use Carbon\Carbon; 

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request)
    {
        $validated = $request->validated(); 
        
        if(!empty($validated['profile_pic'])) { 
            $validated['profile_pic'] = UploadHelper::uploadImage($request, 'students');
        }else{
            $validated['profile_pic'] = null;
        } 
  
        Student::create([
            "name" => $validated['name'],
            "profile_pic" => $validated['profile_pic'],
            "phone_number" => $validated['phone_number'], 
            "cash" => $validated['cash'],
            "address" => $validated['address'],
            "birthday" => Carbon::createFromFormat('d-m-Y', $validated['birthday'])->format('Y-m-d'),
            "gender" => $validated['gender'],
            "password" => bcrypt($validated['password'])
        ]);

        return redirect()->route('admin.students.index')->with('success', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentUpdateRequest $request, Student $student)
    {
        $validated = $request->validated(); 
         
        if(!empty($validated['profile_pic'])) {  
            UploadHelper::deleteOldImage($student->profile_pic, 'students');
            $validated['profile_pic'] = UploadHelper::uploadImage($request, 'students');
        }else{
            $validated['profile_pic'] = $student->profile_pic;
        } 
  
        $student->update([
            "name" => $validated['name'],
            "profile_pic" => $validated['profile_pic'],
            "phone_number" => $validated['phone_number'], 
            "cash" => $validated['cash'],
            "address" => $validated['address'],
            "birthday" => Carbon::createFromFormat('d-m-Y', $validated['birthday'])->format('Y-m-d'),
            "gender" => $validated['gender'] 
        ]);

        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully');
    }
}
