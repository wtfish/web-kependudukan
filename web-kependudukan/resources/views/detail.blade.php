@extends('layouts.main')
@section('body')
<div class="container bg-white">

    @csrf
    <div class="row ">
        <div class="col-12 purp text-white my-2 " style="">Detail Penduduk</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">NIK</div>
        <div class="col-8 ">:</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Nama</div>
        <div class="col-8 ">:</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">TTL</div>
        <div class="col-8 ">:</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Jenis Kelamin</div>
        <div class="col-8 ">:</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Alamat</div>
        <div class="col-8 ">:</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Agama</div>
        <div class="col-8 ">:</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Status Kawin</div>
        <div class="col-8 ">:</div>
    </div>
    <div class="row border-bottom">
        <div class="col-4 ">Pekerjaan</div>
        <div class="col-8 ">:</div>
    </div>
    <a href="/data_penduduk"><button>Kembali</button></a>



</div>
@endsection
