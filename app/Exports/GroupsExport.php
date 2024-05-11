<?php

namespace App\Exports;

use App\Models\Group;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GroupsExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Group::join('courses', 'courses.id', '=', 'groups.course_id')
                    ->join('teachers', 'teachers.id', '=', 'groups.teacher_id')
                    ->join('rooms', 'rooms.id', '=', 'groups.room_id') 
                    ->select('groups.id', 'groups.name', 'courses.name as courses_name', 'teachers.name as teachers_name', 'rooms.name as rooms_name')
                    ->get(); 
    }

    public function headings(): array
    {
        return [
            'Id',
            'Nom',  
            'Kurs', 
            'Ustoz', 
            'Xona'
        ];
    }
}
