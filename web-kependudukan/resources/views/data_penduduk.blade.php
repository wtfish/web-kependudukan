@extends('layouts.main')
@section('body')
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">

                <div class="card-header">
                    <h1 class="text-center">Data Penduduk Aktif</h1>
                    <hr>
                    <a href="/tambah"><button type="button" class="btn btn-primary"><img
                                src="/assets/logoTambah.png">Tambah</button></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                            <path
                                d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z" />
                            <path
                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg> Import data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Upload data penduduk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="data_penduduk/import" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <p>Pastikan file sudah mengikuti aturan <a href="https://google.com">disini</a></p>
                                        <div class="form-group">
                                            <input type="file" name="data_penduduk" id="" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <table class="table" id="datatablesSimple">
                        
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>No KK</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot class="text-center">
                            <tr>
                                <th>No</th>
                                <th>No KK</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
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
                                <tr class="text-center">
                                    <td>{{ $penduduk->id }}</td>
                                    <td>{{ $penduduk->kk }}</td>
                                    <td>{{ $penduduk->nik }}</td>
                                    <td>{{ $penduduk->nama }}</td>
                                    <td>{{ $penduduk->kelamin }}</td>
                                    <td>{{ $penduduk->rt_id != null ? "RT {$penduduk->rt_id}/ RW {$penduduk->rt->rw->id}/ DUSUN {$penduduk->rt->rw->dusun->deskripsi}" : '-' }}
                                    </td>


                                    <td>
                                        <a href="/data_penduduk/detail/{{ $penduduk->id }}"><button
                                                class="btn btn-primary p-1" title="Tampil"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                </svg></button></a>
                                        <a href="/data_penduduk/edit/{{ $penduduk->id }}"><button class="btn btn-info p-1"
                                                title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    height="18" fill="currentColor" class="bi bi-pencil-square"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></button></a>


                                        <!-- Button trigger modal Keluar-->

                                            <button class="btn btn-warning p-1" title="Keluar" data-bs-toggle="modal"
                                            data-bs-target="#ModalKeluar"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-box-arrow-right"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                            </svg></button>


                                        <!-- Modal Keluar -->
                                        <div class="modal fade" id="ModalKeluar" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Penduduk Keluar</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        apa anda yakin ingin memindahkan data
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                            <a href="/data_penduduk/keluar/{{ $penduduk->id }}"><button type="button" class="btn btn-primary">Save changes</button><a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="#"><button class="btn btn-danger p-1" title="Hapus"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    <div class="p-3">{{ $penduduks->links() }}</div>
                </div>
            </div>
        </div>
    </main>
@endsection
