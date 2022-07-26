<?php
function FunctionName($jumlah = 0, $judul = null, $gambar = null )
{
    echo '
    <div class="col ">
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
    <div class="container ">
        <div class="row text-start mx-3 ">
            <div class="col bg-white">
                <div class="dropdown ">
                    <button class="btn btn-lg dropdown-toggle " type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        RT
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="col background "></div>
            <div class="col bg-white ">
                <div class="dropdown">
                    <button class="btn btn-lg dropdown-toggle " type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        RW
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="col background "></div>
            <div class="col bg-white ">
                <button class="btn ">Tampilkan</button>
            </div>
        </div>
        <br><br>
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-xxl-3 bg-white py-3 radius">
            <?php FunctionName($jumlah,  $bagian1 ,"fa-solid fa-user-group" ); ?>
            <?php FunctionName(100, 'Kepala Keluarga',"fa-solid fa-id-card"); ?>
            <?php FunctionName(400, 'Laki-laki',"fa-solid fa-mars"); ?>
            <?php FunctionName(325, 'Perempuan',"fa-solid fa-venus"); ?>
            <?php FunctionName(29, 'Lahir',"fa-solid fa-face-smile"); ?>
            <?php FunctionName(20, 'Meninggal',"fa-solid fa-face-frown"); ?>

        </div>
    @endsection
