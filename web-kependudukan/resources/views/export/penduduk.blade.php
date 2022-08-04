<head>
    <style>
        th, td {
  border: 1px solid black;
  border-collapse: collapse;
  vertical-align: middle;
  padding: 5px

}
th{
    font-weight: bold
}
    </style>
</head>
<table>
    <thead>
        <tr>
            <th><strong>DATA PENDUDUK</strong></th>
        </tr>
        <tr>
            <th><strong>DESA SUMBEREJO KECAMATAN GEDANGAN</strong></th>
        </tr>
        <tr>

        </tr>
        <tr>
            <th rowspan="2" style="text-align: center;"></th>
            <th rowspan="2" style="text-align: center;">NOMOR KK</th>
            <th rowspan="2" style="text-align: center;">VALIDASI</th>
            <th rowspan="2" style="text-align: center;">NIK</th>
            <th rowspan="2" style="text-align: center;">NAMA</th>
            <th rowspan="2" style="text-align: center;">TEMPAT LAHIR</th>
            <th rowspan="2" style="text-align: center;">TANGGAL LAHIR</th>
            <th rowspan="2" style="text-align: center;">UMUR</th>
            <th rowspan="2" style="text-align: center;">HUBUNGAN KELUARGA</th>
            <th rowspan="2" style="text-align: center;">STATUS</th>
            <th rowspan="2" style="text-align: center;">PENDIDIKAN</th>
            <th rowspan="2" style="text-align: center;">L/P</th>
            <th rowspan="2" style="text-align: center;">AGAMA</th>
            <th rowspan="2" style="text-align: center;">PEKERJAAN</th>
            <th colspan="2" style="text-align: center;">NAMA ORANGTUA</th>
            <th rowspan="2" style="text-align: center; background: yellow; color: red">MISKIN</th>
            <th colspan="3" style="text-align: center;">ALAMAT</th>
            <th rowspan="2" style="text-align: center;">TANGGAL NIKAH</th>
            <th rowspan="2" style="text-align: center;">NOMOR BUKU NIKAH</th>
            <th rowspan="2" style="text-align: center;">KUA</th>
            <th rowspan="2" style="text-align: center;">AKTE KELAHIRAN/SURAT KENAL LAHIR</th>
            <th colspan="3" style="text-align: center;">KEMATIAN</th>
            <th rowspan="2" style="text-align: center;">NOMOR PBI JK/BPJS</th>
            <th rowspan="2" style="text-align: center;">JABATAN</th>
            <th rowspan="2" style="text-align: center;">TELEPON</th>
            <th rowspan="2" style="text-align: center;">NOMOR IJAZAH/STTB</th>
            <th colspan="2" style="text-align: center;">NIK ORANGTUA</th>
            <th colspan="2" style="text-align: center;">PERCERAIAN</th>
            <th rowspan="2" style="text-align: center;">GOLONGAN DARAH</th>
            <th rowspan="2" style="text-align: center;">PENYANDANG CACAT</th>
            <th rowspan="2" style="text-align: center;">KEWARGANEGARAAN</th>
        </tr>
        <tr>
            <td style="text-align: center;">IBU</td>
            <td style="text-align: center;">AYAH</td>
            <td style="text-align: center;">RT</td>
            <td style="text-align: center;">RW</td>
            <td style="text-align: center;">DUSUN</td>
            <td style="text-align: center;">TANGGAL KEMATIAN</td>
            <td style="text-align: center;">PUKUL</td>
            <td style="text-align: center;">KETERANGAN</td>
            <td style="text-align: center;">NIK IBU</td>
            <td style="text-align: center;">NIK AYAH</td>
            <td style="text-align: center;">TANGGAL CERAI</td>
            <td style="text-align: center;">NOMOR AKTA CERAI</td>
        </tr>
        <tr>
            <?php for ($i=1; $i <=40; $i++) {?>
                    <td style="text-align: center;"><?=$i?></td>                
            <?php } ?>
        </tr>
        <tr>

        </tr>
    </thead>
    <tbody>
        <?php $index=0?>
        @foreach ($penduduks as $penduduk)
            <tr>
                <td>{{$index++}}</td>
                <td>{{$penduduk->kk}}</td>
                <td>{{$penduduk->validasi}}</td>
                <td>{{$penduduk->nik}}</td>
                <td>{{$penduduk->nama}}</td>
                <td>{{$penduduk->tempat_lahir}}</td>
                <td>{{($penduduk->tanggal_lahir =="" ? "": "=DATEVALUE(\"{$penduduk->tanggal_lahir}\")")}}</td>
                <td>{{\Carbon\Carbon::parse($penduduk->tanggal_lahir)->age}}</td>
                <td>{{$penduduk->hubungan_keluarga}}</td>
                <td>{{$penduduk->status_perkawinan}}</td>
                <td>{{$penduduk->pendidikan}}</td>
                <td>{{$penduduk->kelamin}}</td>
                <td>{{$penduduk->agama}}</td>
                <td>{{$penduduk->pekerjaan}}</td>
                <td>{{$penduduk->nama_ibu}}</td>
                <td>{{$penduduk->nama_ayah}}</td>
                <td>{{$penduduk->kemiskinan}}</td>
                <td>{{$penduduk->rt_id}}</td>
                <td>{{($penduduk->rt_id=="" ? $penduduk->rt_id :  $penduduk->rt->rw->id )}}</td>
                <td>{{($penduduk->rt_id==""? $penduduk->rt_id:$penduduk->rt->rw->dusun->deskripsi )}}</td>
                <td>{{($penduduk->tanggal_nikah =="" ? "": "=DATEVALUE(\"{$penduduk->tanggal_nikah}\")")}}</td>
                <td>{{$penduduk->nomor_buku_nikah}}</td>
                <td>{{$penduduk->kua}}</td>
                <td>{{$penduduk->akte_kelahiran}}</td>
                <td>{{($penduduk->tanggal_kematian =="" ? "": "=DATEVALUE(\"{$penduduk->tanggal_kematian}\")")}}</td>
                <td>{{$penduduk->waktu_kematian}}</td>
                <td>{{$penduduk->keterangan_kematian}}</td>
                <td>{{$penduduk->nomor_bpjs}}</td>
                <td>{{$penduduk->jabatan}}</td>
                <td>{{$penduduk->telepon}}</td>
                <td>{{$penduduk->nomor_ijazah}}</td>
                <td>{{$penduduk->nik_ibu}}</td>
                <td>{{$penduduk->nik_ayah}}</td>
                <td>{{($penduduk->tanggal_cerai =="" ? "": "=DATEVALUE(\"{$penduduk->tanggal_cerai}\")")}}</td>
                <td>{{$penduduk->nomor_akta_cerai}}</td>
                <td>{{$penduduk->golongan_darah}}</td>
                <td>{{$penduduk->penyandang_cacat}}</td>
                <td>{{$penduduk->kewarganegaraan}}</td>
            </tr>

        @endforeach
    </tbody>
</table>