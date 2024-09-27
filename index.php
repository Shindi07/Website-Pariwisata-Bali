<?php
// PAGE FUNCTION UNTUK MENAMPUNG NILAI SEMENTARA
// FUNCTION UNTUK MENERIMA PENGIRIMAN DATA MELALUI LINK
$page = $_GET['page'] ?? "";
require "koneksi.php";
function rupiah($angka)
{
    $hasil = 'Rp.' . number_format($angka, 2, ",", ".");
    return $hasil;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Pariwisata</title>
    <!--Link Bootstrap -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="asset/css/style.css" />
    <!-- Link Fontawesome -->
    <link rel="stylesheet" href="asset/fontawesome/css/all.css" />
    <!-- Link DataTable -->
    <link rel="stylesheet" href="asset/DataTables/datatables.min.css">
</head>

<body>
    <!-- Start contrainer fluid -->
    <div class="container-fluid">
        <!-- start header -->
        <header>
            <!-- start header carousel -->
            <div id="carouselId" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- start slide 1 -->
                    <div class="carousel-item active">
                        <img src="asset/img/header1.jpg" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Selamat Datang Di Pariwisata Bali</h3>
                            <p>#JelajahiWisataBali</p>
                        </div>
                    </div>
                    <!-- end slide 1 -->
                    <!-- start slide 2 -->
                    <div class="carousel-item">
                        <img src="asset/img/header2.jpg" alt="Second slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Selamat Datang Di Pariwisata Bali</h3>
                            <p>#JelajahiWisataBali</p>
                        </div>
                    </div>
                    <!-- end slide 2 -->
                    <!-- start slide 3 -->
                    <div class="carousel-item">
                        <img src="asset/img/header3.jpg" alt="Third slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Selamat Datang Di Pariwisata Bali</h3>
                            <p>#JelajahiWisataBali</p>
                        </div>
                    </div>
                    <!-- end slide 3 -->
                </div>
                <!-- Start button previous -->
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <!-- End button previous -->
                <!-- Start button Next -->
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- End button next -->
            </div>
            <!-- end header carousel -->
        </header>
        <!-- end header -->


        <!-- star navbar -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <a class="navbar-brand">Bali Journey</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?page=beranda">Beranda</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="?page=tentangKami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=pesanPaket">Pesan Paket</a>
                    </li>
                    <li class="nav-item <?= $page == 'tabelPesanPaket' ? 'active' : '' ?>">
                        <a class="nav-link" href="?page=tabelPesanPaket">Cek Pesanan Paket</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end navbar -->


        <!-- start main content -->
        <main class="content">
            <div class="row">
                <div class="col-8">
                    <?php
                    // kondisi ketika menu navbar di klik mengarah ke menu yang dituju
                    // mengarah ke menu teng kami
                    if ($page == "tentangKami") {
                        require "formTentangKami.php";
                        //mengarah ke menu form pesan paket 
                    } else if ($page == "pesanPaket") {
                        require "formPesanPaket.php";
                        // mengarah ke menu cek pesanan paket
                    } else if ($page == "tabelPesanPaket") {
                        require "notaPemesanan.php";
                        // selain hal diatas, jika di klik mengarah ke halaman awal/beranda
                    } else {

                    ?>
                        <!-- start card -->
                        <h3>Ayo Jelajahi Destinasi Unggulan Pariwisata Bali</h3>
                        <!-- start container card -->
                        <div class="container-card">
                            <!-- start card 1 -->
                            <div class="card">
                                <img class="card-img-top" src="asset/img/Lawn Canggu.jpg" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title">Lawn Canggu</h5>
                                    <a href="?page=pesanPaket"><button class="card-button">Pesan Sekarang</button></a>
                                </div>
                            </div>
                            <!-- end card 1 -->
                            <!-- start card 2  -->
                            <div class="card">
                                <img class="card-img-top" src="asset/img/nusa penida.jpg" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title">Nusa Penida</h5>
                                    <a href="?page=pesanPaket"><button class="card-button">Pesan Sekarang</button></a>
                                </div>
                            </div>
                            <!-- end card 2 -->
                            <!-- start card 3 -->
                            <div class="card">
                                <img class="card-img-top" src="asset/img/pantai kuta.jpg" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title">Pantai Kuta</h5>
                                    <a href="?page=pesanPaket"><button class="card-button">Pesan Sekarang</button></a>
                                </div>
                            </div>
                            <!-- end card 3 -->
                            <!-- start card 4 -->
                            <div class="card">
                                <img class="card-img-top" src="asset/img/Pura Ulun Danu Beratan.jpg" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title">Pura Ulun Danu Beratan</h5>
                                    <a href="?page=pesanPaket"><button class="card-button">Pesan Sekarang</button></a>
                                </div>
                            </div>
                            <!-- end card 4 -->
                            <!-- start card 5 -->
                            <div class="card">
                                <img class="card-img-top" src="asset/img/bedugul.jpg" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title">Bedugul Bali</h5>
                                    <a href="?page=pesanPaket"><button class="card-button">Pesan Sekarang</button></a>
                                </div>
                            </div>
                            <!-- end card 5 -->
                            <!-- start card 6 -->
                            <div class="card">
                                <img class="card-img-top" src="asset/img/gerbang candi.jpg" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title">Gerbang Candi</h5>
                                    <a href="?page=pesanPaket"><button class="card-button">Pesan Sekarang</button></a>
                                </div>
                            </div>
                            <!-- end card 6 -->
                            <!-- start card 7 -->
                            <div class="card">
                                <img class="card-img-top" src="asset/img/nung nung waterfall.jpg" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title">Nung-Nung Waterfall</h5>
                                    <a href="?page=pesanPaket"><button class="card-button">Pesan Sekarang</button></a>
                                </div>
                            </div>
                            <!-- end card 7 -->
                            <!-- start card 8 -->
                            <div class="card">
                                <img class="card-img-top" src="asset/img/tebing karang boma.jpg" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title">Tebing Karang Boma</h5>
                                    <a href="?page=pesanPaket"><button class="card-button">Pesan Sekarang</button></a>
                                </div>
                            </div>
                            <!-- end card 8 -->
                        </div>
                        <!-- end container card -->

                        <!-- start gallery -->
                        <h3>Gallery Kami</h3>
                        <!-- start container gallery -->
                        <div class="container-gallery">
                            <!-- start gambar 1 -->
                            <div class="gallery">
                                <div class="caption">
                                    <p>Ayana Resort</p>
                                </div>
                                <img src="asset/img/Ayana Resort.jpg" />
                            </div>
                            <!-- end gambar 1 -->
                            <!-- start gallery 2 -->
                            <div class="gallery">
                                <div class="caption">
                                    <p>Lempuyang Temple</p>
                                </div>
                                <img src="asset/img/Lempuyang Temple.jpg" />
                            </div>
                            <!-- end gallery 2 -->
                            <!-- start gambar 3 -->
                            <div class="gallery">
                                <div class="caption">
                                    <p>Nusa Dua Beach</p>
                                </div>
                                <img src="asset/img/Nusa Dua Beach.jpg" />
                            </div>
                            <!-- end gambar 3 -->
                            <!-- start gambar 4 -->
                            <div class="gallery">
                                <div class="caption">
                                    <p>Penglipuran Village</p>
                                </div>
                                <img src="asset/img/Penglipuran Village.jpg" />
                            </div>
                            <!-- end gambar 4 -->
                            <!-- start gambar 5 -->
                            <div class="gallery">
                                <div class="caption">
                                    <p>Pura Besakih</p>
                                </div>
                                <img src="asset/img/Pura Besakih.jpg" />
                            </div>
                            <!-- end gambar 5 -->
                            <!-- start gambar 6 -->
                            <div class="gallery">
                                <div class="caption">
                                    <p>Tegallalang</p>
                                </div>
                                <img src="asset/img/Tegallalang.jpg" />
                            </div>
                            <!-- start gambar 6 -->
                        </div>
                        <!-- end container gallery -->
                    <?php
                    } ?>

                    <!-- end gallery -->
                </div>
                <!-- start sidebar -->
                <div class="col-4  sidebar">
                    <h6 style="color:blue">Video Terkait</h6>
                    <video width="80%" controls>
                        <source src="asset/video/video2.mp4" type="video/mp4" />
                    </video>
                    <video width="80%" controls>
                        <source src="asset/video/video3.mp4" type="video/mp4" />
                    </video>

                </div>
                <!-- end sidebar -->
            </div>
        </main>
        <!-- end main content -->

        <!-- start footer -->
        <footer>
            <!-- start footer kelas medsos -->
            <div class="medsos">
                <p>
                    Dapatkan informasi terbaru dan konten eksklusif, serta penawaran
                    spesial di situs kami!
                </p>
                <a href="" class="circle-bg">
                    <i class="fa-brands fa-instagram"></i></a>
                <a href="" class="circle-bg"><i class="fa-brands fa-facebook"></i></a>
                <a href="" class="circle-bg"><i class="fa-brands fa-youtube"></i></a>
                <a href="" class="circle-bg"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <!-- end footer kelas medsos -->
            <!-- start footer kelas copyright -->
            <div class="copyright">
                <p>1939085860-8-SHINDI CAHYANDARI</p>
            </div>
            <!-- end footer kelas copyright -->
        </footer>
        <!-- end footer -->
    </div>
    <!-- end container fluid -->


</body>

<!-- Link untuk JQUERY -->

<script src="asset/js/jquery-3.7.1.min.js"></script>
<!-- Link JS untuk Bootstrap -->
<script src="asset/js/bootstrap.min.js"></script>

<!-- Link JS External -->
<script src="asset/js/script.js"></script>
<!--ini coding untuk integrasi library datatable js  -->
<script src="asset/DataTables/datatables.min.js"></script>

<!-- modifikasi table id tabelPesanan -->
<script>
    new DataTable('#tabelPesanan', {
        layout: {
            topStart: {
                buttons: [
                    'copy', 'excel',
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape'
                    }
                ]
            }
        }
    });
</script>


</html>