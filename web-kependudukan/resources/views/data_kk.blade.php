@extends('layouts.main')
@section('body')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <h1 class="text-center">Data Kepala Keluarga</h1>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>KK</th>
                            <th>RT/RW</th>
                            <th>Dusun</th>
                            <th>Kepala Keluarga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>KK</th>
                            <th>RT/RW</th>
                            <th>Dusun</th>
                            <th>Kepala Keluarga</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $ind=0 ?>
                        @foreach ($kks as $kk)
 
                        <tr>
                            {{-- @dd($obj) --}}
                            <td>{{$ind++}}</td>
                            <td>{{$kk->kk}}</td>
                            <td>{{$kk->rt_id != null ? "RT {$kk->rt_id}/ RW {$kk->rt->rw->id}" : "-" }}</td>
                            <td>{{$kk->rt_id != null ? "{$kk->rt->rw->dusun->deskripsi}" : "-" }}</td>
                            <td>{{$kk->nama}}</td>
                            <td>
                                <a href="/data_kk/detail/{{$kk->kk}}"><button
                                    class="btn btn-primary p-1" title="Tampil"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg></button></a>
                                    
                                <!-- Button trigger modal Keluar-->
                                <button class="btn btn-warning p-1" title="Keluar" data-bs-toggle="modal"
                                data-bs-target="#ModalKeluar{{$kk->kk}}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi bi-box-arrow-right"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg></button>


                            <!-- Modal Keluar -->
                            <div class="modal fade" id="ModalKeluar{{$kk->kk}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">KK Keluar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apa anda yakin ingin mengeluarkan kk ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                                <a href="/data_kk/keluar/{{$kk->kk}}"><button type="button" class="btn btn-primary">Keluarkan kk</button><a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <!-- Button trigger modal hapus-->
                                <button class="btn btn-danger p-1" title="Keluar" data-bs-toggle="modal"
                                data-bs-target="#ModalHapus{{$kk->kk}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                  </svg></button>


                            <!-- Modal hapus -->
                            <div class="modal fade" id="ModalHapus{{$kk->kk}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus KK</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apa anda yakin ingin menghapus permanen seluruh anggota kk ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                                <a href="/data_kk/hapus/{{$kk->kk}}"><button type="button" class="btn btn-primary">Hapus kk</button><a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
