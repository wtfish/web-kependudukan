<?php

namespace App\Exports;

use App\Models\Penduduk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Cell;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell as CellCell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;

class UserActiveExport extends DefaultValueBinder implements WithCustomValueBinder,FromView
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Penduduk::with(["rt", "rt.rw", "rt.rw.dusun"])->whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->orderBy('rt_id', 'asc')->orderBy('kk', 'asc')->paginate(15);
    // }
    public function view():View{
        return view("export.penduduk",[
            "penduduks" => Penduduk::with(["rt", "rt.rw", "rt.rw.dusun"])->whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->orderBy('rt_id', 'asc')->orderBy('kk', 'asc')->get()
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
