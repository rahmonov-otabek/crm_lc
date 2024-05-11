<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\GroupStoreRequest;
use App\Http\Requests\Admin\GroupUpdateRequest;
use App\Models\Group;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Room;
use App\Models\WeekDay;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('admin.groups.index', compact('groups'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        $rooms = Room::all();
        $week_days = WeekDay::all();
        
        return view('admin.groups.create', compact('courses', 'teachers', 'rooms', 'week_days'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupStoreRequest $request)
    {
        $validated = $request->validated();
        
        $group = Group::create($validated);  

        $group->week_days()->attach($validated['week_days']);

        return redirect()->route('admin.groups.index')->with('success', 'Group created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return view('admin.groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    { 
        $courses = Course::all();
        $teachers = Teacher::all();
        $rooms = Room::all();
        $week_days = WeekDay::all();
        
        return view('admin.groups.edit', compact('group', 'courses', 'teachers', 'rooms', 'week_days'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GroupUpdateRequest $request, Group $group)
    {
        $validated = $request->validated();  
  
        $group->update($validated);

        $group->week_days()->sync($validated['week_days']); 

        return redirect()->route('admin.groups.index')->with('success', 'Group updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('admin.groups.index')->with('success', 'Group deleted successfully');
    } 
}
