<?php

namespace App\Exports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CoursesExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Course::join('departments', 'departments.id', '=', 'courses.department_id')
                    ->select('courses.id', 'courses.name', 'courses.salary', 'departments.name as department_name')
                    ->get(); 
    }

    public function headings(): array
    {
        return [
            'Id',
            'Nom',
            'Narx',   
            'Bo`lim'
        ];
    }
}
