@extends('layouts.main')

@section('body')
    <div class="container ">
        <div class="content bg-white p-1">
            <form action="/data_penduduk/edit/{{ $penduduk->id }}" method="POST">

                @csrf
                <div class="row">
                    <div class="col-12 background text-black text-center p-1" style="">Edit data penduduk </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label class="form-label" for="nik">NIK</label></div>
                    <div class="col-8"><input class="form-control @error('nik') is-invalid @enderror" id="nik"
                            style="width: 50%" type="text" placeholder="NIK" name="nik" value="{{ $penduduk->nik }}">
                    </div>
                    @error('nik')
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label " for="kk">No KK</label></div>
                    <div class="col-8 "><input class="form-control @error('kk') is-invalid @enderror" id="kk"
                            style="width: 50%" type="text" placeholder="Nomer KK" name="kk"
                            value="{{ $penduduk->kk }}"></div>
                    @error('kk')
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label " for="validasi">Validasi</label></div>
                    <div class="col-8 "><input class="form-control @error('validasi') is-invalid @enderror" id="validasi"
                            style="width: 50%" type="text" placeholder="Validasi KK" name="validasi"
                            value="{{ $penduduk->validasi }}"></div>
                    @error('validasi')
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label " for="nama">Nama</label></div>
                    <div class="col-8 "><input class="form-control @error('nama') is-invalid @enderror" id="nama"
                            style="width: 50%" type="text" placeholder="Nama" name="nama"
                            value="{{ $penduduk->nama }}"></div>
                    @error('nama')
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 form-label">TTL</div>
                    <div class="col-8">
                        <input style="width: 25%" type="text"
                            class="form-control @error('ttl-tempat') is-invalid @enderror" placeholder="Tempat lahir"
                            name="ttl-tempat" value="{{ $penduduk->tempat_lahir }}">
                        <input style="width: 25%" type="date"
                            class="form-control @error('ttl-waktu') is-invalid @enderror" placeholder="Tanggal lahir"
                            name="ttl-waktu" value="{{ $penduduk->tanggal_lahir }}">
                        @error('ttl-tempat')
                            <div class="text-danger">
                                <span class="text-danger">Tempat belum diisi! </span>
                            </div>
                        @enderror
                        @error('ttl-waktu')
                            <div class="text-danger">
                                <span class="text-danger">Tanggal belum diisi! </span>
                            </div>
                        @enderror

                    </div>

                </div>


                <div class="row my-3">
                    <div class="col-4 ">Jenis Kelamin</div>
                    <div class="col-8 ">
                        <select style="width: 25%" id="inputGroupSelect01" required name="kelamin"
                            class="form-select @error('kelamin') is-invalid @enderror">
                            <option selected disabled value="">PILIH KELAMIN</option>

                            <option value="L" {{ $penduduk->kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="P" {{ $penduduk->kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label" for="nama_ayah">Nama Ayah</label></div>
                    <div class="col-8"><input class="form-control @error('nama_ayah') is-invalid @enderror"
                            id="nama_ayah" style="width: 50%" type="text" placeholder="Nama Ayah" name="nama_ayah"
                            value="{{ $penduduk->nama_ayah }}"></div>
                    @error('nama_ayah')
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 "><label class="form-label" for="nama_ibu">Nama Ibu</label></div>
                    <div class="col-8"><input class="form-control @error('nama_ibu') is-invalid @enderror"
                            id="nama_ibu" style="width: 50%" type="text" placeholder="Nama Ibu" name="nama_ibu"
                            value="{{ $penduduk->nama_ibu }}"></div>
                    @error('nama_ibu')
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="row my-3">
                    <div class="col-4 ">RT</div>
                    <div class="col-8 ">

                        <select style="width: 25%" id="inputGroupSelect01" name="rt"
                            class="form-select @error('rt') is-invalid @enderror" required>
                            <option selected disabled value="">PILIH RT</option>
                            @foreach ($rt as $item)
                                <option value="{{ $item->id }}"
                                    {{ $penduduk->rt->id == $item->id ? 'selected' : '' }}>{{ $item->id }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 ">Agama</div>
                    <div class="col-8 ">

                        <select style="width: 25%" id="inputGroupSelect01" name="agama" required
                            class="form-select @error('agama') is-invalid @enderror">
                            <option selected disabled value="">PILIH AGAMA</option>
                            @foreach ($agama as $item)
                                <option value="{{ $item->deskripsi }}"
                                    {{ $penduduk->agama == $item->deskripsi ? 'selected' : '' }}>{{ $item->deskripsi }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-4 ">Pendidikan</div>
                    <div class="col-8 ">

                        <select style="width: 25%" id="inputGroupSelect01" name="pendidikan" required
                            class="form-select">
                            <option selected disabled value="">PILIH PENDIDIKAN</option>
                            @foreach ($pendidikan as $item)
                                <option value="{{ $item->deskripsi }}"
                                    {{ $penduduk->pendidikan == $item->deskripsi ? 'selected' : '' }}>
                                    {{ $item->deskripsi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-4 ">Pekerjaan</div>
                    <div class="col-8 ">

                        <select style="width: 25%" id="inputGroupSelect01" name="pekerjaan" required
                            class="form-select">
                            <option selected disabled value="">PILIH PEKERJAAN</option>
                            @foreach ($pekerjaan as $item)
                                <option value="{{ $item->deskripsi }}"
                                    {{ $penduduk->pekerjaan == $item->deskripsi ? 'selected' : '' }}>
                                    {{ $item->deskripsi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row my-3">
                    <div class="col-4 ">Hubungan Keluarga</div>
                    <div class="col-8 ">
                        <select style="width: 25%" id="inputGroupSelect01" name="hubungan_keluarga" required
                            class="form-select">
                            <option selected disabled value="">PILIH HUB-KELUARGA</option>
                            @foreach ($hubungan_keluarga as $item)
                                <option value="{{ $item->deskripsi }}"
                                    {{ $penduduk->hubungan_keluarga == $item->deskripsi ? 'selected' : '' }}>
                                    {{ $item->deskripsi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row my-3">
                    <div class="col-4 "><label for="status-perkawinan">Status Perkawinan</label></div>
                    <div class="col-8 ">
                        <select style="width: 25%" id="inputGroupSelect01" name="status_perkawinan"
                            id="status-perkawinan" required class="form-select">
                            <option selected disabled value="">PILIH STATUS</option>
                            @foreach ($status as $item)
                                <option value="{{ $item->deskripsi }}"
                                    {{ $penduduk->status_perkawinan == $item->deskripsi ? 'selected' : '' }}>
                                    {{ $item->deskripsi }}</option>
                            @endforeach>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="exampleRadios1">Status Penduduk Baru</label></div>
                    <div class="col-8 ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_penduduk_baru"
                                id="exampleRadios1" value="Baru" required
                                {{ $penduduk->status_penduduk_baru == 'Baru' ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleRadios1">
                                Baru
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_penduduk_baru"
                                id="exampleRadios2" value="Pindah"
                                {{ $penduduk->status_penduduk_baru == 'Pindah' ? 'checked' : '' }}>
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
                    <div class="col-8 "><input class="form-control" style="width: 50%" type="text"
                            placeholder="Akte Kelahiran"name="akte_kelahiran" id="akte_kelahiran"
                            value="{{ $penduduk->akte_kelahiran }}"></div>
                </div>
                <div class="row">
                    <div class="col-12 background text-black text-center " style="">Pernikahan</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="tanggal_nikah" class="form-label">Tanggal nikah</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="date" name="tanggal_nikah" class="form-control"
                            id="tanggal_nikah" value="{{ $penduduk->tanggal_nikah }}">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="no_buku_nikah" class="form-label">No buku nikah</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="text" name="no_buku_nikah" class="form-control"
                            value="{{ $penduduk->nomor_buku_nikah }}">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="kua" class="form-label">KUA</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="text" name="kua" class="form-control"
                            value="{{ $penduduk->kua }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 background text-black text-center " style="">Kematian</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="tanggal_kematian" class="form-label">Tanggal Kematian</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="date" id="tanggal_kematian" name="tanggal_kematian"
                            value="{{ $penduduk->tanggal_kematian }}" class="form-control">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label for="waktu_kematian" class="form-label">Waktu Kematian</label></div>
                    <div class="col-8 ">
                        <input style="width: 50%" type="time" id="waktu_kematian" name="waktu_kematian"
                            value="{{ $penduduk->waktu_kematian }}" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 background text-black text-center " style="">Kemiskinan</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 "><label class="form-label " for="kemiskinan">Keterangan</label></div>
                    <div class="col-8 "><input class="form-control" id="kemiskinan" style="width: 50%" type="text"
                            placeholder="Keterangan kemiskinan" name="kemiskinan" value="{{ $penduduk->kemiskinan }}">
                    </div>
                </div>

        </div>
        <br>
        <button  class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#ModalSubmit"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-sd-card-fill" viewBox="0 0 16 16">
                <path
                    d="M12.5 0H5.914a1.5 1.5 0 0 0-1.06.44L2.439 2.853A1.5 1.5 0 0 0 2 3.914V14.5A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 12.5 0Zm-7 2.75a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 .75-.75Zm2 0a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 .75-.75Zm2.75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 1.5 0Zm1.25-.75a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 .75-.75Z" />
            </svg> Simpan</button>

        <!-- Modal Keluar -->
        <div class="modal fade" id="ModalSubmit" tabindex="-1" aria-labelledby="ModalSubmit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalSubmit">Penduduk Keluar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        apa anda yakin ingin memindahkan data
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit"class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        </form>
        <a href="/data_penduduk"><button class="mx-3 btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
                </svg> Batal</button></a>

    </div>
@endsection
