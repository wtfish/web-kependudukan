@extends('layouts.main')
@section('body')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <a href="/tambah"><button type="button" class="btn btn-primary"><img src="/assets/logoTambah.png"> tambah</button></a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No KK</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No KK</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>
                                <a href="/detail"><img src="/assets/logoInfo.png"></a>
                                <a href="#"><img src="/assets/logoEdit.png"></a>
                                <a href="#"><img src="/assets/logoDelete.png"></a>
                            </td>
                        </tr> --}}
                        @foreach ($penduduks as $penduduk)
                        <tr>
                            <td>{{$penduduk->id}}</td>
                            <td>{{$penduduk->nik}}</td>
                            <td>{{$penduduk->nama}}</td>
                            <td>{{$penduduk->kelamin==1 ? "L" : 'P'}}</td>
                            <td>RT {{$penduduk->rt->id}}/RW {{$penduduk->rt->rw->id}}/DUSUN {{$penduduk->rt->rw->dusun->deskripsi}}</td>
                            <td>{{$penduduk->kk}}</td>
                            <td><a href="/detail"><img src="/assets/logoInfo.png"></a>
                                <a href="#"><img src="/assets/logoEdit.png"></a>
                                <a href="#"><img src="/assets/logoDelete.png"></a></td>
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
