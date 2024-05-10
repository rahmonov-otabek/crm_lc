<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\RoomStoreRequest;
use App\Http\Requests\Admin\RoomUpdateRequest;
use App\Models\Room;

class RoomController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomStoreRequest $request)
    {
        $validated = $request->validated();  
  
        Room::create($validated);

        return redirect()->route('admin.rooms.index')->with('success', 'Room created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoomUpdateRequest $request, Room $room)
    {
        $validated = $request->validated();  
  
        $room->update($validated);

        return redirect()->route('admin.rooms.index')->with('success', 'Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('admin.rooms.index')->with('success', 'Room deleted successfully');
    }
}
