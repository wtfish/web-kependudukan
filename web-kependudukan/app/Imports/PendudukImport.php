<?php

namespace App\Imports;

use App\Models\Penduduk;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PendudukImport implements ToModel,WithStartRow,WithMultipleSheets
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $row)
    {
        return new Penduduk([
            "kk"=>$row[1],
            "validasi"=>$row[2],
            "nik"=>$row[3],
            "nama"=>$row[4],
            "tempat_lahir"=>$row[5],
            "tanggal_lahir"=>($row[6] == null ? $row[6] : Carbon::parse(((int)($row[6])- 25569) * 86400)->format("Y-m-d")),
            "hubungan_keluarga"=>$row[8],
            "status_perkawinan"=>$row[9],
            "pendidikan"=>$row[10],
            "kelamin"=>$row[11],
            "agama"=>$row[12],
            "pekerjaan"=>$row[13],
            "nama_ibu"=>$row[14],
            "nama_ayah"=>$row[15],
            "kemiskinan"=>$row[16],
            "rt_id"=>$row[17], // ($row[] == null ? $row[] : Carbon::parse(((int)($row[20])- 25569) * 86400)->format("Y-m-d"))
            "tanggal_nikah"=>($row[20] == null ? $row[20] : Carbon::parse(((int)($row[20])- 25569) * 86400)->format("Y-m-d")),
            "nomor_buku_nikah"=>$row[21],
            "kua"=>$row[22],
            "akte_kelahiran"=>$row[23],
            "tanggal_kematian"=>($row[24] == null ? $row[24] : Carbon::parse(((int)($row[24])- 25569) * 86400)->format("Y-m-d")),
            "waktu_kematian"=> $row[25],
            "keterangan_kematian"=>(($row[24] != null) ? ($row[11]!=null ? ($row[11]=="L" ? "MDL" : "MDP" ) : "MD" ) : null),
            "nomor_bpjs"=>$row[27],
            "jabatan"=>$row[28],
            "telepon"=>$row[29],
            "nomor_ijazah"=>$row[30],
            "nik_ibu"=>$row[31],
            "nik_ayah"=>$row[32],
            "tanggal_cerai"=>$row[33],
            "nomor_akta_cerai"=>$row[34],
            "golongan_darah"=>$row[35],
            "penyandang_cacat"=>$row[36],
        ]);
    }
    
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
            0 => new FirstSheetImport(),
        ];
    }
    public function startRow():int{
        return 11;
    }
    
}
