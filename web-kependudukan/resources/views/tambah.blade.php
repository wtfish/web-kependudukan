@extends('layouts.main')
<?php
 function tanggal(Type $var = null)
{
    # code...
}
?>
@section('body')
    <div class="container ">
        <div class="content bg-white p-1">
            <form action="/tambah" method="POST">

                @csrf
                <div class="row">
                    <div class="col-12 background text-black text-center p-1" style="">Data Penduduk (wajib diisi)</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label class="form-label" for="nik">NIK</label></div>
                    <div class="col-8"><input class="form-control @error("nik") is-invalid @enderror" id="nik" style="width: 50%" type="text" placeholder="NIK" name="nik" value="{{old("nik")}}"></div>
                    @error("nik")
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label " for="kk">No KK</label></div>
                    <div class="col-8 "><input class="form-control @error("kk") is-invalid @enderror" id="kk" style="width: 50%" type="text" placeholder="Nomer KK" name="kk"  value="{{old("kk")}}"></div>
                    @error("kk")
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label " for="validasi">Validasi</label></div>
                    <div class="col-8 "><input class="form-control @error("validasi") is-invalid @enderror" id="validasi" style="width: 50%" type="text" placeholder="Validasi KK" name="validasi"  value="{{old("validasi")}}"></div>
                    @error("validasi")
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label " for="nama">Nama</label></div>
                    <div class="col-8 "><input class="form-control @error("nama") is-invalid @enderror" id="nama" style="width: 50%" type="text" placeholder="Nama" name="nama"  value="{{old("nik")}}"></div>
                    @error("nama")
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        </div>
                    @enderror
                </div>
                
                <div class="row my-3">
                    <div class="col-4 form-label">TTL</div>
                    <div class="col-8">
                        <input style="width: 25%" type="text" class="form-control @error("ttl-tempat") is-invalid @enderror" placeholder="Tempat lahir" name="ttl-tempat" value="{{old("ttl-tempat")}}">
                        <input style="width: 25%" type="date" class="form-control @error("ttl-waktu") is-invalid @enderror" placeholder="Tanggal lahir" name="ttl-waktu" value="{{old("ttl-waktu")}}">
                        @error("ttl-tempat")
                            <div class="text-danger">
                                <span class="text-danger">Tempat belum diisi! </span>
                            </div>
                        @enderror
                        @error("ttl-waktu")
                            <div class="text-danger">
                                <span class="text-danger">Tanggal belum diisi! </span>
                            </div>
                        @enderror
                        
                    </div>

                </div>
                

                <div class="row my-3">
                    <div class="col-4 ">Jenis Kelamin</div>
                    <div class="col-8 ">
                        <select style="width: 25%" id="inputGroupSelect01" required name="kelamin" class="form-select">
                            <option selected disabled value="">Choose...</option>
                            <option value=1>Laki-Laki</option>
                            <option value=0>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label" for="nama_ayah">Nama Ayah</label></div>
                    <div class="col-8"><input class="form-control @error("nama_ayah") is-invalid @enderror" id="nama_ayah" style="width: 50%" type="text" placeholder="Nama Ayah" name="nama_ayah" value="{{old("nama_ayah")}}"></div>
                    @error("nama_ayah")
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label" for="nama_ibu">Nama Ibu</label></div>
                    <div class="col-8"><input class="form-control @error("nama_ibu") is-invalid @enderror" id="nama_ibu" style="width: 50%" type="text" placeholder="Nama Ibu" name="nama_ibu" value="{{old("nama_ibu")}}"></div>
                    @error("nama_ibu")
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 ">RT</div>
                    <div class="col-8 ">
                        
                        <select style="width: 25%" id="inputGroupSelect01" name="rt" class="form-select" required>
                            <option selected disabled value="">PILIH RT</option>
                            @foreach ($rt as $item)
                                <option value="{{$item->id}}">{{$item->id}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">Agama</div>
                    <div class="col-8 ">
                        
                        <select style="width: 25%" id="inputGroupSelect01" name="agama" required class="form-select">
                            <option selected disabled>PILIH AGAMA</option>
                            @foreach ($agama as $item)
                                <option value="{{$item->id}}">{{$item->deskripsi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-4 ">Pendidikan</div>
                    <div class="col-8 ">
                        
                        <select style="width: 25%" id="inputGroupSelect01" name="pendidikan" required class="form-select">
                            <option selected disabled>PILIH PENDIDIKAN</option>
                            @foreach ($pendidikan as $item)
                                <option value="{{$item->id}}">{{$item->deskripsi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-4 ">Pekerjaan</div>
                    <div class="col-8 ">
                        
                        <select style="width: 25%" id="inputGroupSelect01" name="pekerjaan" required class="form-select">
                            <option selected disabled>PILIH PEKERJAAN</option>
                            @foreach ($pekerjaan as $item)
                                <option value="{{$item->id}}">{{$item->deskripsi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                

                <div class="row my-3">
                    <div class="col-4 ">Hubungan Keluarga</div>
                    <div class="col-8 ">
                        
                        <select style="width: 25%" id="inputGroupSelect01" name="hubungan_keluarga" required class="form-select">
                            <option selected disabled value="">PILIH HUB-KELUARGA</option>
                            @foreach ($hubungan as $item)
                                <option value="{{$item->id}}">{{$item->deskripsi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                

                <div class="row my-3">
                    <div class="col-4 "><label for="status-perkawinan">Status Perkawinan</label></div>
                    <div class="col-8 ">
                        <select style="width: 25%" id="inputGroupSelect01" name="status_perkawinan" id="status-perkawinan" required class="form-select">
                            <option selected disabled>PILIH STATUS</option>
                            @foreach ($status as $item)
                                <option value="{{$item->id}}">{{$item->deskripsi}}</option>
                            @endforeach>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="exampleRadios1">Status Penduduk Baru</label></div>
                    <div class="col-8 ">
                         <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_penduduk_baru" id="exampleRadios1" value="Baru">
                            <label class="form-check-label" for="exampleRadios1">
                              Baru
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_penduduk_baru" id="exampleRadios2" value="Pindah">
                            <label class="form-check-label" for="exampleRadios2">
                              Pindah
                            </label>
                          </div>
                    </div>
                </div>

                

                <div class="row">
                    <div class="col-12 background text-black text-center " style="">Kelahiran</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label class="form-label" for="akte_kelahiran">Akte Kelahiran</label></div>
                    <div class="col-8 "><input class="form-control" style="width: 50%" type="text" placeholder="Akte Kelahiran"name="akte_kelahiran" id="akte_kelahiran"></div>
                </div>
                <div class="row">
                    <div class="col-12 background text-black text-center " style="">Pernikahan</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="tanggal_nikah" class="form-label">Tanggal nikah</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="date" name="tanggal_nikah" class="form-control" id="tanggal_nikah">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="no_buku_nikah" class="form-label">No buku nikah</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="text" name="no_buku_nikah" class="form-control">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="kua" class="form-label">KUA</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="text" name="kua" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 background text-black text-center " style="">Kematian</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="tanggal_kematian" class="form-label">Tanggal Kematian</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="datetime-local" name="tanggal_kematian" class="form-control">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="keterangan_kematian" class="form-label">Keterangan</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="text" name="keterangan_kematian" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 background text-black text-center " style="">Kemiskinan</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label class="form-label " for="kemiskinan">Keterangan</label></div>
                    <div class="col-8 "><input class="form-control" id="kemiskinan" style="width: 50%" type="text" placeholder="Keterangan kemiskinan" name="kemiskinan"  value="{{old("kemiskinan")}}"></div>
                </div>

        </div>
        <br>
        <button type="submit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sd-card-fill" viewBox="0 0 16 16">
            <path d="M12.5 0H5.914a1.5 1.5 0 0 0-1.06.44L2.439 2.853A1.5 1.5 0 0 0 2 3.914V14.5A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 12.5 0Zm-7 2.75a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 .75-.75Zm2 0a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 .75-.75Zm2.75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 1.5 0Zm1.25-.75a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 .75-.75Z"/>
          </svg> Simpan</button>
        </form>
        <a href="/"><button class="mx-3 btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
          </svg> Batal</button></a>

    </div>

@endsection
