
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $title }}</title>
        <link rel="icon" type="image/png" href="assets/logo_Malang.png" sizes = "20x5" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link href="/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="background">

        <div id="layoutSidenav">

            @auth()



            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion purp" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- Navbar Brand-->
                    <a class="navbar-brand text-dark bg-white radius" href="index.html">
                        <table>
                        <tr>
                            <td rowspan="3">
                                <div class="sb-nav-link-icon"><img src="/assets/logo1.png" alt="" width="70px" ></div>
                            </td>
                            <td class="">dataSumberejo</td>
                        </tr>
                        <tr>
                            <td class="fs-6 text border-top text-center">Dashboard</td>
                        </tr>
                        <tr>
                            <td class=""></td>
                        </tr>
                    </table>
                </a>


                    <div class="sb-sidenav-menu-heading"></div>

                    <a class="nav-link" href="#">
                        <table>
                            <tr>
                                <td rowspan="2">
                                    <div class="sb-nav-link-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                          </svg>
                                    </div>
                                </td>
                                <td>admin</td>
                            </tr>
                        </table>


                    </a>
                    <!---------- Tombol Dashboard ---------->
                            <a class="nav-link {{ ($title==="Dashboard") ? 'active' : '' }} side-nav-color" href="/">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house "></i></div>
                                Dashboard
                            </a>
                    <!---------- /Tombol Dashboard ---------->

                    <!---------- Kelola Data ---------->
                            <a class="nav-link collapsed side-nav-color" href="#1" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Kelola Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link side-nav-color{{ $title=="data_kk"? "active" : " "}}" href="/data_kk">Data Kartu Keluarga</a>
                                    <a class="nav-link side-nav-color" href="/data_penduduk">Data Penduduk</a>
                                </nav>
                            </div>
                    <!---------- /Kelola Data ---------->

                    <!---------- Sirkulasi Penduduk ---------->

                            <a class="nav-link collapsed side-nav-color" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-folder-closed"></i></div>
                                Sirkulasi Penduduk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" >
                                    <a class="nav-link side-nav-color" href="/pindah">Pindah</a>
                                    <a class="nav-link side-nav-color" href="/penduduk_keluar">Keluar</a>
                                    <a class="nav-link side-nav-color" href="/kematian">Kematian</a>

                                </nav>
                            </div>

                    <!------------ /Sirkulasi Penduduk ---------->
                            <div class="sb-sidenav-menu-heading"><hr></div>
                            <a class="nav-link side-nav-color" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pengguna Sistem
                            </a>
                            <a class="nav-link side-nav-color" href="{{ route('signout') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                                Log out
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>

            @endauth


            <div id="layoutSidenav_content">
                <nav class="sb-topnav navbar navbar-expand bg-white sticky-sm-top mx-5 radius">
                    <!-- Sidebar Toggle-->
                    @auth()


                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                    <!-- Navbar Search-->
                    @endauth
                   <!-- <form class="d-none d-md-inline-block form-inline  ">
                        <div class="input-group ">
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                            <input class="form-controls" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                        </div>
                    </form>-->

                    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 ">
                        SISTEM MANAJEMEN DATA PENDUDUK DESA SUMBEREJO
                    </form>
                    <!-- Navbar-->
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        </li>
                    @endguest
                    </ul>
                </nav>

                <main>
                    <div class="container-fluid px-4">
                        <br>
                        @auth


                        <div class="container-body">
                            @yield('body')
                        </div>
                        @endauth

                        <div class="container-body">
                            @yield('body2')
                        </div>

                        <div style="height: 100vh"></div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">2022 © dataSumberejo Dashboard - dataSumberejo -dashboard.com</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

    </body>
</html>
