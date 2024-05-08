<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Helpers\UploadHelper;

use App\Models\Teacher;
use Carbon\Carbon; 
class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherStoreRequest $request)
    {
        $validated = $request->validated(); 
        
        if(!empty($validated['profile_pic'])) { 
            $validated['profile_pic'] = UploadHelper::uploadImage($request, 'teachers');
        }  
  
        Teacher::create([
            "name" => $validated['name'],
            "profile_pic" => $validated['profile_pic'],
            "phone_number" => $validated['phone_number'], 
            "salary" => $validated['salary'],
            "birthday" => Carbon::createFromFormat('d-m-Y', $validated['birthday'])->format('Y-m-d'),
            "gender" => $validated['gender'],
            "password" => bcrypt($validated['password'])
        ]);

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('admin.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherUpdateRequest $request, Teacher $teacher)
    {
        $validated = $request->validated(); 
         
        if(!empty($validated['profile_pic'])) {  
            UploadHelper::deleteOldImage($teacher->profile_pic, 'teachers');
            $validated['profile_pic'] = UploadHelper::uploadImage($request, 'teachers');
        }else{
            $validated['profile_pic'] = $teacher->profile_pic;
        } 
  
        $teacher->update([
            "name" => $validated['name'],
            "profile_pic" => $validated['profile_pic'],
            "phone_number" => $validated['phone_number'], 
            "salary" => $validated['salary'],
            "birthday" => Carbon::createFromFormat('d-m-Y', $validated['birthday'])->format('Y-m-d'),
            "gender" => $validated['gender'],
            "password" => bcrypt($validated['password'])
        ]);

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('admin.teachers.index')->with('success', 'Teacher deleted successfully');
    }
}
