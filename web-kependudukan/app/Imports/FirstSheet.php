<?php

namespace App\Imports;

use App\Models\Penduduk;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithStartRow;

class FirstSheet implements ToModel, WithStartRow,WithCalculatedFormulas
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Penduduk([
            "kk" => (string)$row[1],
            "validasi" => $row[2],
            "nik" => (string)$row[3],
            "nama" => $row[4],
            "tempat_lahir" => $row[5],
            "tanggal_lahir" => ($row[6] == null ? $row[6] : Carbon::createFromDate(1900,1,1)->addDay((int)$row[6]-2)),
            // "tanggal_lahir" => ($row[] == null ? $row[] : Carbon::parse(((int)($row[20])- 25569) * 86400)->format("Y-m-d")),
            "hubungan_keluarga" => $row[8],
            "status_perkawinan" => $row[9],
            "pendidikan" => $row[10],
            "kelamin" => $row[11],
            "agama" => $row[12],
            "pekerjaan" => $row[13],
            "nama_ibu" => $row[14],
            "nama_ayah" => $row[15],
            "kemiskinan" => $row[16],
            "rt_id" => $row[17], // ($row[] == null ? $row[] : Carbon::parse(((int)($row[20])- 25569) * 86400)->format("Y-m-d"))
            "tanggal_nikah" => ($row[20] == null ? $row[20] : Carbon::createFromDate(1900,1,1)->addDay((int)$row[6]-2)),
            "nomor_buku_nikah" => $row[21],
            "kua" => $row[22],
            "akte_kelahiran" => $row[23],
            // "tanggal_kematian" => ($row[24] == null ? $row[24] : Carbon::parse(((int)($row[24]) - 25569) * 86400)->format("Y-m-d")),
            "tanggal_kematian" => ($row[24] == null ? $row[24] : Carbon::createFromDate(1900,1,1)->addDay((int)$row[24]-2)),
            // "waktu_kematian"=> ($row[25] == null ? $row[25] : intdiv($row[25]*24*60, 60).':'. ($row[25]*24*60 % 60)),
            "waktu_kematian" => $row[25],
            "keterangan_kematian" => (($row[24] != null) ? ($row[11] != null ? ($row[11] == "L" ? "MDL" : "MDP") : "MD") : null),
            "nomor_bpjs" => $row[27],
            "jabatan" => $row[28],
            "telepon" => $row[29],
            "nomor_ijazah" => $row[30],
            "nik_ibu" => $row[31],
            "nik_ayah" => $row[32],
            "tanggal_cerai" => ($row[33] == null ? $row[33] : Carbon::createFromDate(1900,1,1)->addDay((int)$row[33]-2)),
            "nomor_akta_cerai" => $row[34],
            "golongan_darah" => $row[35],
            "penyandang_cacat" => $row[36],
            "kewarganegaraan" => $row[37],
            "status_penduduk_baru" =>$row[38]
        ]);
    }
    public function startRow(): int
    {
        return 8;
    }
}
