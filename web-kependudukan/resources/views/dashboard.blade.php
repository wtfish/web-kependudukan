<?php
function FunctionName($jumlah = 0, $judul = null, $gambar = null )
{
    echo '
    <div class="col 12">
      <div class="card  nav-link purp-bg">
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
@section('body')
<div class="container row bg-warning">
  <div class="col-12 bg-primary">
    <form action="/test" method="GET" class="col-12 " style="background-color: red">
      <div class="row p-5 radius align-items-end">
  
        <div class="col d-inline">
            <div class="btn-group">
              <select class="form-select" aria-label="Default select example" name="rt">
                <option selected value="" disabled>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

          <div class="col d-inline">
            <div class="btn-group">
              <select class="form-select" aria-label="Default select example" name="rw">
                <option selected value="" disabled>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>
          <div class="col d-inline">
            <div class="btn-group">
              <select class="form-select" aria-label="Default select example" name="dusun">
                <option selected value="" disabled>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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
    <?php FunctionName($jumlah,  $bagian1 ,"fa-solid fa-user-group" ); ?>
    <?php FunctionName(100, 'Kepala Keluarga',"fa-solid fa-id-card"); ?>
    <?php FunctionName(400, 'Laki-laki',"fa-solid` fa-mars"); ?>
    <?php FunctionName(325, 'Perempuan',"fa-solid fa-venus"); ?>
    <?php FunctionName(29, 'Lahir',"fa-solid fa-face-smile"); ?>
    <?php FunctionName(20, 'Meninggal',"fa-solid fa-face-frown"); ?>
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
      'DIPLOMA IV/STRATA I',
      'STRATA II',
      'STRATA III'
    ];

    const data = {
      labels: labels,
      datasets: [{
        label: 'Jumlah warga Pendidikan',
        backgroundColor: 'rgb(120,97,148)',
        borderColor: 'rgb(120,97,148)',
        color: 'rgb(240, 242, 250)',
        data: [0, 10, 5, 2, 20, 30, 70, 20],
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

  @endsection