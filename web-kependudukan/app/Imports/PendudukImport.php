<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class PendudukImport implements WithMultipleSheets
{

    
    
    
    
    // public function collection(Collection $rows)
    // {
    //     foreach ($rows as $row) 
    //     {
    //         Penduduk::create([
    //             'name' => $row[0],
    //         ]);
    //     }
    // }
    public function sheets(): array
    {
        return [
            0 => new FirstSheet,
        ];
    }
    
    
}
