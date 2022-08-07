<?php
function FunctionName($jumlah = 0, $judul = null, $gambar = null )
{
    echo '
    <div class="col 12">
      <div class="card  text-light purp-bg">
        <div class="row g-0">
        <div class="col-md-8 ">
            <div class="card-body ">
              <h5 class="card-title">',$jumlah,'</h5>
              <p class="card-text">',$judul,'</p>

            </div>
          </div>
      <div class="col-md-4 position-relative">
        <i class="',$gambar,' img-fluid position-absolute top-100 start-50 translate-middle icon-size"></i>
      </div>
    </div>
      </div>
    </div>';
}
?>
@extends('layouts.main')
@guest()

@else
@section('body')
<div class="container row">
  <div class="col-12">
    <form action="/" method="GET" class="col-12 " >
      <div class="row pt-5 pb-5 radius align-items-end">
  
        <div class="col d-inline">
            <div class="btn-group">
              <select class="form-select" aria-label="Default select example" name="rt">
                <option selected value="">PILIH RT</option>
                @foreach ($rts as $rt)
                  <option value="{{$rt->id}}" {{request("rt")==$rt->id ? "selected" : ""}}>{{$rt->id}}</option>
                @endforeach
              </select>
            </div>

          <div class="col d-inline">
            <div class="btn-group">
              <select class="form-select" aria-label="Default select example" name="rw">
                <option selected value="">PILIH RW</option>
                @foreach ($rws as $rw)
                  <option value="{{$rw->id}}" {{request("rw")==$rw->id ? "selected" : ""}}>{{$rw->id}}</option>
                @endforeach
              </select>
          </div>
          <div class="col d-inline">
            <div class="btn-group">
              <select class="form-select" aria-label="Default select example" name="dusun">
                <option selected value="">PILIH DUSUN</option>
                @foreach ($dusuns as $dusun)
                  <option value="{{$dusun->id}}" {{request("dusun")==$dusun->id ? "selected" : ""}}>{{$dusun->deskripsi}}</option>
                @endforeach
              </select>
          </div>
          <div class="col d-inline">
              <button type="submit" class="btn btn-primary">
                Tampilkan
              </button>
          </div>
        </div>
      </form>
  </div>
  </div>
</div>
  <div class="row row-cols-1 row-cols-md-3 g-4 mx-xxl-3 bg-white py-3 radius">
    <?php FunctionName($penduduk,  "Penduduk" ,"fa-solid fa-user-group" ); ?>
    <?php FunctionName($kepala_keluarga, 'Kepala Keluarga',"fa-solid fa-id-card"); ?>
    <?php FunctionName($laki, 'Laki-laki',"fa-solid fa-mars"); ?>
    <?php FunctionName($perempuan, 'Perempuan',"fa-solid fa-venus"); ?>
    <?php FunctionName($lahir, 'Lahir',"fa-solid fa-face-smile"); ?>
    <?php FunctionName($meninggal, 'Meninggal',"fa-solid fa-face-frown"); ?>
    <div class="col-xl-12">
      <div class="card mb-4 ">
        <div class="card-header">
          <i class="fas fa-chart-area me-1"></i>
          PENDIDIKAN
        </div>
        <div class="card-body"><canvas id="myChart" width="100%" height="40"></canvas></div>
      </div>
    </div>
  </div>
  <br>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const labels = [
      'Tamat SD',
      'SLTP',
      'SLTA',
      'DIPLOMA I/II',
      'AKADEMI/D III',
      'DIPLOMA IV/STRATA I/STRATA II',
      'STRATA III',
      'LAINNYA'
    ];

    const data = {
      labels: labels,
      datasets: [{
        label: 'Jumlah warga Pendidikan',
        backgroundColor: 'rgb(120,97,148)',
        borderColor: 'rgb(120,97,148)',
        color: 'rgb(240, 242, 250)',
        data: [{{$tamatsd}}, {{$sltp}}, {{$slta}}, {{$d12}}, {{$d3}}, {{$s1}}, {{$s2}}, {{$s3}}],
      }]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {}
    };
  </script>
  <script>
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>
    <script>
          const config = {
            type: 'bar',
            data: data,
            options: {}
          };
        </script>
        <script>
          const myChart = new Chart(
            document.getElementById('myChart'),
            config
          );
        </script>
    @endsection
    @endguest

