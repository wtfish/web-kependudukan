
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
                                    <div class="sb-nav-link-icon"><img src="/assets/icon.png" alt=""></div>
                                </td>
                                <td>EKO</td>
                            </tr>
                            <tr>
                                <td>Online</td>
                            </tr>
                        </table>


                    </a>
                    <!---------- Tombol Dashboard ---------->
                            <a class="nav-link side-nav-color {{ ($title==="Dashboard") ? 'active' : '' }} " href="/">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house "></i></div>
                                Dashboard
                            </a>
                    <!---------- /Tombol Dashboard ---------->

                    <!---------- Kelola Data ---------->
                            <a class="nav-link collapsed side-nav-color" href="#1" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Kelola Penduduk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link side-nav-color{{ $title=="data_kk"? "active" : " "}}" href="/data_kk">Data Kepala Keluarga</a>
                                    <a class="nav-link side-nav-color" href="/data_penduduk">Data Penduduk</a>
                                </nav>
                            </div>
                    <!---------- /Kelola Data ---------->

                    <!---------- Sirkulasi Penduduk ---------->

                            <a class="nav-link collapsed side-nav-color" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                                  </svg></div>
                                Sirkulasi Penduduk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" >
                                    <a class="nav-link side-nav-color" href="/pindah">Pendatang</a>
                                    <a class="nav-link side-nav-color" href="/penduduk_keluar">Keluar</a>
                                    <a class="nav-link side-nav-color" href="/kematian">Kematian</a>

                                </nav>
                            </div>
                            <div>
                                <a class="nav-link side-nav-color {{ ($title==="Dashboard") ? 'active' : '' }} " href="/kelola_data">
                                    <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                                        <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
                                      </svg></div>
                                    Kelola data
                                </a>
                            </div>

                    <!------------ /Sirkulasi Penduduk ---------->
                            <div class="sb-sidenav-menu-heading"><hr></div>
                            <a class="nav-link side-nav-color" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pengguna Sistem
                            </a>
                            <a class="nav-link side-nav-color" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                                Log out
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <nav class="sb-topnav navbar navbar-expand bg-white sticky-sm-top mx-5 radius">
                    <!-- Sidebar Toggle-->
                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                    <!-- Navbar Search-->
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
                    </ul>
                </nav>

                <main>
                    <div class="container-fluid px-4">
                        <br>
                        <div class="container-body">
                            @yield('body')
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
