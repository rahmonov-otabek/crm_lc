<?php

namespace App\Http\Controllers;

use App\Exports\TeachersExport;
use App\Exports\StudentsExport;
use App\Exports\RoomsExport;
use App\Exports\GroupsExport;
use App\Exports\CoursesExport;
use App\Exports\DepartmentsExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportToExcelController extends Controller
{
    public function get_teachers() 
    {
        return Excel::download(new TeachersExport, 'teachers.xlsx');
    }
    
    public function get_students() 
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
    }

    public function get_groups() 
    {
        return Excel::download(new GroupsExport, 'groups.xlsx');
    }

    public function get_departments() 
    {
        return Excel::download(new DepartmentsExport, 'departments.xlsx');
    }

    public function get_rooms() 
    {
        return Excel::download(new RoomsExport, 'rooms.xlsx');
    }

    public function get_courses() 
    {
        return Excel::download(new CoursesExport, 'courses.xlsx');
    }
}
