<?php

namespace App\Exports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TeachersExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Teacher::select('id','name','phone_number', 'gender', 'salary', 'birthday')->get();
    }
    
    public function headings(): array
    {
        return [
            'Id',
            'Ism',
            'Telefon raqam', 
            'Jins', 
            'Oylik miqdori', 
            'Tug`ilgan sana'
        ];
    }
}
