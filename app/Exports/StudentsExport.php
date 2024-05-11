<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::select('id','name','phone_number', 'gender', 'address', 'birthday')->get();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Ism',
            'Telefon raqam', 
            'Jins', 
            'Manzil', 
            'Tug`ilgan sana'
        ];
    }
}
