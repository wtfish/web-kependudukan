<?php

namespace App\Exports;

use App\Models\Penduduk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell as CellCell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;

class UserPindahExport extends DefaultValueBinder implements WithCustomValueBinder,FromView
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Penduduk::all();
    // }
    public function view():View{
        return view("export.penduduk",[
            "penduduks" => Penduduk::with(["rt", "rt.rw", "rt.rw.dusun"])->where("status_penduduk_baru","Pindah")->get()
        ]);
    }
    public function bindValue(CellCell $cell, $value)
    {
        if (strlen($value)==16) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }

        // else return default behavior
        return parent::bindValue($cell, $value);
    }
}
