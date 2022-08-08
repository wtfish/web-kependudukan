@extends('layouts.main')
@section('body')
    <main>
        <div class="card">
            <div class="card-header text-center">
              <strong>KELOLA DATA</strong>
            </div>
            <div class="card-body d-inline">
                <div class="card d-inline-block ms-5 mt-0" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title text-center">Semua Penduduk</h5>
                      <hr>
                      <p class="card-text text-center">Semua penduduk tanpa tekecuali akan terlibat dalam aksi di bawah ini</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                      {{-- comment start here --}}
                      {{-- <li class="list-group-item"><!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                            <path
                              d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z" />
                            <path
                              d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                          </svg> Upload Excel
                        </button>
                
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Upload data penduduk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="data_penduduk/import" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                  <p class="text-center"><strong style="color: red">PERHATIAN !</strong> </p>
                                  <p>- Pastikan file sudah mengikuti aturan <a href="https://google.com">disini</a></p>
                                  <p>- Proses ini akan <strong>mengganti</strong> seluruh data yang ada sebelumnya!</p>
                                  <br>
                                  <div class="form-group">
                                    <input type="file" name="data_penduduk" id="" required>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                  <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div></li>  --}}
                        {{-- comment end here --}}
                      <li class="list-group-item">
                        <a href="/download_all"><button class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                          </svg> Download Excel</button></a>
                      </li>
                      {{-- <li class="list-group-item">A third item</li> --}}
                    </ul>
                </div>

                {{-- card kedua --}}
                <div class="card d-inline-block ms-5" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title text-center">Penduduk Aktif</h5>
                      <hr>
                      <p class="card-text text-center">Penduduk yang masih berada di desa Sumberejo dan masih hidup (tanggal kematian kosong)</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                      
                      <li class="list-group-item">
                        <a href="/download_active"><button class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                          </svg> Download Excel</button></a>
                      </li>
                      {{-- <li class="list-group-item">A third item</li> --}}
                    </ul>
                </div>
                {{-- card kedua end --}}

                 {{-- card ketiga --}}
                 <div class="card d-inline-block ms-5" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title text-center">Penduduk Pindah Masuk</h5>
                      <hr>
                      <p class="card-text text-center">Penduduk daerah lain yang masuk desa sumberejo</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                      
                      <li class="list-group-item">
                        <a href="/download_pindah"><button class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                          </svg> Download Excel</button></a>
                      </li>
                      {{-- <li class="list-group-item">A third item</li> --}}
                    </ul>
                </div>
                {{-- card ketiga end --}}

                 {{-- card keempat --}}
                 <div class="card d-inline-block mt-3 ms-5" style="width: 18rem;">
                    <div class="card-body ">
                      <h5 class="card-title text-center">Penduduk Keluar</h5>
                      <hr>
                      <p class="card-text text-center">Penduduk yang tidak berada di desa Sumberejo karena keluar ke daerah lain</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                      
                      <li class="list-group-item">
                        <a href="/download_keluar"><button class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                          </svg> Download Excel</button></a>
                      </li>
                      {{-- <li class="list-group-item">A third item</li> --}}
                    </ul>
                </div>
                {{-- card keempat --}}

                 {{-- card kedua --}}
                 <div class="card d-inline-block ms-5" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title text-center">Penduduk Meninggal</h5>
                      <hr>
                      <p class="card-text text-center">Penduduk yang sudah meninggal (ditandai dengan diisinya tanggal meninggal yang telah diisi)</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                      
                      <li class="list-group-item">
                        <a href="/download_meninggal"><button class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                          </svg> Download Excel</button></a>
                      </li>
                      {{-- <li class="list-group-item">A third item</li> --}}
                    </ul>
                </div>
                {{-- card kedua end --}}

                  
                  

            </div>
          </div>
    </main>
@endsection