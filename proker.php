<?php include 'admin/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- google font -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="images/Logo DB.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <title>Desa Binaan</title>
</head>

<body>
    <?php
    $headpage = "Proker";
    include("header.php");
    ?>


    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <a href="#">
                    <h3>PROGRAM KERJA DESA BINAAN </h3>
                </a>
            </div>
        </div>
    </div>
    <!-- example content -->
    <div class="container-fluid" id="SARPRAS">
        <div class="product-area most-popular section">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>SARPRAS</h2>
                        </div>
                    </div>
                </div>

                <div class="row" style="text-align: center;">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            <!-- Start Series -->
                            <?php
                            $sql = $koneksi->query("select * from tabel_dsarpras");
                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="https://www.instagram.com/p/CWPV2tRoXPA/">
                                            <img class="default-img" src="admin/pages/gambar/<?php echo $data['foto'] ?>" alt="gmabar">

                                        </a>
                                        <div class="button-head">
                                            <div class="product-action-2">
                                                <a title="Kunjungi Laman" href=""><?php echo $data['nama'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- End Series -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- example content -->
    <div class="container-fluid" id="KURIKULUM">
        <div class="product-area most-popular section">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>KURIKULUM</h2>
                        </div>
                    </div>
                </div>

                <div class="row" style="text-align: center;">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            <!-- Start Series -->
                            <?php
                            $sql = $koneksi->query("select * from tabel_dkurikulum");
                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="">
                                            <img class="default-img" src="admin/pages/gambar/<?php echo $data['foto'] ?>" alt="gmabar">

                                        </a>
                                        <div class="button-head">
                                            <div class="product-action-2">
                                                <a title="Kunjungi Laman" href=""><?php echo $data['nama'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- End Series -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- example content -->
    <div class="container-fluid" id="INFOKOM">
        <div class="product-area most-popular section">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>INFOKOM</h2>
                        </div>
                    </div>
                </div>

                <div class="row" style="text-align: center;">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            <!-- Start Series -->
                            <?php
                            $sql = $koneksi->query("select * from tabel_dinfokom");
                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="">
                                            <img class="default-img" src="admin/pages/gambar/<?php echo $data['foto'] ?>" alt="gmabar">

                                        </a>
                                        <div class="button-head">
                                            <div class="product-action-2">
                                                <a title="Kunjungi Laman" href=""><?php echo $data['nama'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- End Series -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- example content -->
    <div class="container-fluid" id="KADESWAKADES">
        <div class="product-area most-popular section">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>KADESWAKADES</h2>
                        </div>
                    </div>
                </div>

                <div class="row" style="text-align: center;">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            <!-- Start Series -->
                            <?php
                            $sql = $koneksi->query("select * from tabel_dkadeswakades");
                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="">
                                            <img class="default-img" src="admin/pages/gambar/<?php echo $data['foto'] ?>" alt="gmabar">

                                        </a>
                                        <div class="button-head">
                                            <div class="product-action-2">
                                                <a title="Kunjungi Laman" href=""><?php echo $data['nama'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- End Series -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- example content -->
    <div class="container-fluid" id="PSDM">
        <div class="product-area most-popular section">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>PSDM</h2>
                        </div>
                    </div>
                </div>

                <div class="row" style="text-align: center;">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            <!-- Start Series -->
                            <?php
                            $sql = $koneksi->query("select * from tabel_dpsdm");
                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="">
                                            <img class="default-img" src="admin/pages/gambar/<?php echo $data['foto'] ?>" alt="gmabar">

                                        </a>
                                        <div class="button-head">
                                            <div class="product-action-2">
                                                <a title="Kunjungi Laman" href=""><?php echo $data['nama'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- End Series -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="../../js/bootstrap.bundle.min.js"></script>

    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/magnific-popup.js"></script>
    <!-- Waypoints JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- Countdown JS -->
    <script src="js/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="js/nicesellect.js"></script>
    <!-- Flex Slider JS -->
    <script src="js/flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="js/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>



</body>

</html>