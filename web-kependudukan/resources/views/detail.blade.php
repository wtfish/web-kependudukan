@extends('layouts.main')
@section('body')
<div class="container bg-white">

    @csrf
    <div class="row ">
        <div class="col-12 purp text-white my-2 " style="">Detail Penduduk</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">NIK</div>
        <div class="col-8 ">: {{$penduduk->nik}}</div>
    </div>

    <div class="row border-bottom">
        <div class="col-4 ">KK</div>
        <div class="col-8 ">: {{$penduduk->kk}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Validasi</div>
        <div class="col-8 ">: {{$penduduk->validasi}}</div>
    </div>

    <div class="row border-bottom">
        <div class="col-4 ">Nama</div>
        <div class="col-8 ">: {{$penduduk->nama}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">TTL</div>
        <div class="col-8 ">: {{$penduduk->tempat_lahir}}, {{$penduduk->tanggal_lahir}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Jenis Kelamin</div>
        <div class="col-8 ">: {{($penduduk->kelamin == 1? "Laki-Laki" : "Perempuan")}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Nama Ayah</div>
        <div class="col-8 ">: {{$penduduk->nama_ayah}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Nama Ibu</div>
        <div class="col-8 ">: {{$penduduk->nama_ibu}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">RT/RW/DUSUN</div>
        <div class="col-8 ">: RT {{$penduduk->rt->id}}/ RW {{$penduduk->rt->rw->id}}/ DUSUN {{$penduduk->rt->rw->dusun->deskripsi}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Agama</div>
        <div class="col-8 ">: {{$penduduk->agama->deskripsi}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Status Perkawinan</div>
        <div class="col-8 ">: {{$penduduk->status->deskripsi}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Pekerjaan</div>
        <div class="col-8 ">: {{$penduduk->pekerjaan->deskripsi}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Hubungan Keluarga</div>
        <div class="col-8 ">: {{$penduduk->hubungan_keluarga->deskripsi}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Status Penduduk Baru</div>
        <div class="col-8 ">: {{$penduduk->status_penduduk_baru}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-12 text-center"><strong>KELAHIRAN</strong></div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Akte Kelahiran</div>
        <div class="col-8 ">: {{($penduduk->akte_kelahiran == ""? "-" : $penduduk->akte_kelahiran)}}</div>
    </div>

    <div class="row border-bottom">
        <div class="col-12 text-center"><strong>PERNIKAHAN</strong></div>
    </div>

    <div class="row border-bottom">
        <div class="col-4 ">Tanggal Nikah</div>
        <div class="col-8 ">: {{($penduduk->tanggal_nikah == ""? "-" : $penduduk->tanggal_nikah)}} </div>
    </div>

    <div class="row border-bottom">
        <div class="col-4 ">Nomor Buku Nikah</div>
        <div class="col-8 ">: {{($penduduk->nomor_buku_nikah == ""? "-" : $penduduk->nomor_buku_nikah)}} </div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">KUA</div>
        <div class="col-8 ">: {{($penduduk->kua == ""? "-" : $penduduk->kua)}}</div>
    </div>

    <div class="row border-bottom">
        <div class="col-12 text-center"><strong>KEMATIAN</strong></div>
    </div>

    <div class="row border-bottom">
        <div class="col-4 ">Tanggal Kematian</div>
        <div class="col-8 ">: {{($penduduk->tanggal_kematian == ""? "-" : $penduduk->tanggal_kematian)}}</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Keterangan</div>
        <div class="col-8 ">: {{($penduduk->keterangan_kematian == ""? "-" : $penduduk->keterangan_kematian)}}</div>
    </div>

    <div class="row border-bottom">
        <div class="col-12 text-center"><strong>KEMISKINAN</strong></div>
    </div>

    <div class="row border-bottom">
        <div class="col-4 ">Keterangan</div>
        <div class="col-8 ">: {{($penduduk->kemiskinan == "" ? "-" : $penduduk->kemiskinan)}}</div>
    </div>
    



</div>

<a href="/data_penduduk" class="mt-5"><button class="mx-3 btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
  </svg> Kembali</button></a>
@endsection
