@extends('layouts.main')
@section('body')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <h1 class="text-center">Data Kartu Keluarga </h1>
            <h1>{{$kk}}</h1>
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NAMA</th>
                            <th>NIK</th>
                            <th>HUBUNGAN KELUARGA</th>
                            <th>JENIS KELAMIN</th>
                            <th>TEMPAT LAHIR</th>
                            <th>TANGGAL LAHIR</th>
                            <th>AGAMA</th>
                            <th>PENDIDIKAN</th>
                            <th>JENIS PEKERJAAN</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($penduduks as $penduduk)
                            <tr>
                                <td>{{$penduduk->nama}}</td>
                                <td>{{$penduduk->nik}}</td>
                                <td>{{$penduduk->hubungan_keluarga}}</td>
                                <td>{{$penduduk->kelamin}}</td>
                                <td>{{$penduduk->tempat_lahir}}</td>
                                <td>{{$penduduk->tanggal_lahir}}</td>
                                <td>{{$penduduk->agama}}</td>
                                <td>{{$penduduk->pendidikan}}</td>
                                <td>{{$penduduk->pekerjaan}}</td>
                                <td><a href="/data_penduduk/detail/{{$penduduk->id}}"><button class="btn btn-primary p-1" title="Tampil"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                  </svg></button></a>
                                <a href="/data_penduduk/edit/{{$penduduk->id}}"><button class="btn btn-info p-1" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg></button></a>
                                <!-- Button trigger modal Keluar-->

                                <button class="btn btn-warning p-1" title="Keluar" data-bs-toggle="modal"
                                data-bs-target="#ModalKeluar{{$penduduk->id}}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi bi-box-arrow-right"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg></button>


                            <!-- Modal Keluar -->
                            <div class="modal fade" id="ModalKeluar{{$penduduk->id}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Penduduk Keluar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apa anda yakin ingin mengeluarkan penduduk?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href="/data_penduduk/keluar/{{ $penduduk->id }}"><button type="button" class="btn btn-primary">Save changes</button><a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- button hapus --}}
                            <!-- Button trigger modal Hapus-->

                            <button class="btn btn-danger p-1" title="Keluar" data-bs-toggle="modal"
                            data-bs-target="#ModalHapus{{$penduduk->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg></button>


                        <!-- Modal Hapus -->
                        <div class="modal fade" id="ModalHapus{{$penduduk->id}}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Penduduk</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apa anda yakin ingin menghapus penduduk secara permanen?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                            <a href="/data_penduduk/hapus/{{ $penduduk->id }}"><button type="button" class="btn btn-primary">Save changes</button><a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

