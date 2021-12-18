<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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
  $headpage = "Home";
  include("header.php");
  ?>

  <!--Carousel---------------------------------------------->
  <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2500">
                    <a href="#">
                        <img src="images/Banner 1.png" class="d-block w-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <a href="#">
                        <img src="images/Banner 2.png" class="d-block w-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <a href="#">
                        <img src="images/Banner 3.png" class="d-block w-100" alt="...">
                    </a>
                </div>
            </div>
        </div>
    </div>
  <div class="container">
    <section class="midium-banner" style="padding: 100px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <a href="#">
                <h2>Upcoming Events</h2>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Single Banner  -->
          <div class="col-lg-6 col-md-6 col-12">
            <div class="single-banner">
              <img src="images/GODB.png" alt="#">
              <div class="content">
                <p>Upcoming Event</p>
                <h3>Grand Opening<br>Desa Binaan</h3>
                <a href="#">Pelajari Lebih Lanjut</a>
              </div>
            </div>
          </div>
          <!-- /End Single Banner  -->
          <!-- Single Banner  -->
          <div class="col-lg-6 col-md-6 col-12">
            <div class="single-banner">
              <img src="images/ANJANGSANA.png" alt="#">
              <div class="content">
                <p>Upcoming Event</p>
                <h3>Anjangsana<br>Desa Binaan</h3>
                <a href="#">Pelajari Lebih Lanjut</a>
              </div>
            </div>
          </div>
          <!-- /End Single Banner  -->
        </div>
      </div>
    </section>
  </div>
  <!-- End Midium Banner -->

  <!-- Start Video Series -->
  <div class="product-area most-popular section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>Cek Video Series Kami</h2>
          </div>
        </div>
      </div>
      <div class="row" style="text-align: center;">
        <div class="col-12">
          <div class="owl-carousel popular-slider">
            <!-- Start Series -->
            <div class="single-product">
              <div class="product-img">
                <a href="https://www.instagram.com/p/CWPV2tRoXPA/">
                  <img class="default-img" src="images/PODB.png" alt="#">
                  <img class="hover-img" src="images/PODB.png" alt="#">
                </a>
                <div class="button-head">
                  <div class="product-action-2">
                    <a title="Kunjungi Laman" href="https://www.instagram.com/p/CWPV2tRoXPA/">Kunjungi Laman</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="https://www.instagram.com/p/CWPV2tRoXPA/">Pekan Olahraga Desa Binaan</a></h3>
              </div>
            </div>
            <!-- End Series -->

            <!-- Start Series -->
            <div class="single-product">
              <div class="product-img">
                <a href="https://www.instagram.com/tv/CTEnESPh19g/">
                  <img class="default-img" src="images/Movie Time.png" alt="#">
                  <img class="hover-img" src="images/Movie Time.png" alt="#">
                </a>
                <div class="button-head">
                  <div class="product-action-2">
                    <a title="Kunjungi Laman" href="https://www.instagram.com/tv/CTEnESPh19g/">Kunjungi Laman</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="https://www.instagram.com/tv/CTEnESPh19g/">Movie Time</a></h3>
              </div>
            </div>
            <!-- End Series -->

            <!-- Start Series -->
            <div class="single-product">
              <div class="product-img">
                <a href="https://www.instagram.com/tv/CSlIX1fBMVW/">
                  <img class="default-img" src="images/Harta Karun.png" alt="#">
                  <img class="hover-img" src="images/Harta Karun.png" alt="#">
                </a>
                <div class="button-head">
                  <div class="product-action-2">
                    <a title="Kunjungi Laman" href="https://www.instagram.com/tv/CSlIX1fBMVW/">Kunjungi Laman</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="https://www.instagram.com/tv/CSlIX1fBMVW/">Harta Karun</a></h3>
              </div>
            </div>
            <!-- End Series -->

            <!-- Start Series -->
            <div class="single-product">
              <div class="product-img">
                <a href="https://www.instagram.com/tv/CV7YKHzqRGW/">
                  <img class="default-img" src="images/Fun with Art.png" alt="#">
                  <img class="hover-img" src="images/Fun with Art.png" alt="#">
                </a>
                <div class="button-head">
                  <div class="product-action-2">
                    <a title="Kunjungi Laman" href="https://www.instagram.com/tv/CV7YKHzqRGW/">Kunjungi Laman</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="https://www.instagram.com/tv/CV7YKHzqRGW/">Fun with Art</a></h3>
              </div>
            </div>
            <!-- End Series -->

            <!-- Start Series -->
            <div class="single-product">
              <div class="product-img">
                <a href="https://www.instagram.com/tv/CV982esKiIc/">
                  <img class="default-img" src="images/Fun with Cooking.png" alt="#">
                  <img class="hover-img" src="images/Fun with Cooking.png" alt="#">
                </a>
                <div class="button-head">
                  <div class="product-action-2">
                    <a title="Kunjungi Laman" href="https://www.instagram.com/tv/CV982esKiIc/">Kunjungi Laman</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="https://www.instagram.com/tv/CV982esKiIc/">Fun with Cooking</a></h3>
              </div>
            </div>
            <!-- End Series -->

            <!-- Start Series -->
            <div class="single-product">
              <div class="product-img">
                <a href="https://www.instagram.com/tv/CUbxtUOoIoh/">
                  <img class="default-img" src="images/Fun with Science.png" alt="#">
                  <img class="hover-img" src="images/Fun with Science.png" alt="#">
                </a>
                <div class="button-head">
                  <div class="product-action-2">
                    <a title="Kunjungi Laman" href="https://www.instagram.com/tv/CUbxtUOoIoh/">Kunjungi Laman</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="https://www.instagram.com/tv/CUbxtUOoIoh/">Fun with Science</a></h3>
              </div>
            </div>
            <!-- End Series -->

            <!-- Start Series -->
            <div class="single-product">
              <div class="product-img">
                <a href="https://www.instagram.com/tv/CUUtcf-BhEa/">
                  <img class="default-img" src="images/Language Day.png" alt="#">
                  <img class="hover-img" src="images/Language Day.png" alt="#">
                </a>
                <div class="button-head">
                  <div class="product-action-2">
                    <a title="Kunjungi Laman" href="https://www.instagram.com/tv/CUUtcf-BhEa/">Kunjungi Laman</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="https://www.instagram.com/tv/CUUtcf-BhEa/">Language Day</a></h3>
              </div>
            </div>
            <!-- End Series -->

            <!-- Start Series -->
            <div class="single-product">
              <div class="product-img">
                <a href="https://www.instagram.com/tv/CUXX-zFhV5W/">
                  <img class="default-img" src="images/Macarita.png" alt="#">
                  <img class="hover-img" src="images/Macarita.png" alt="#">
                </a>
                <div class="button-head">
                  <div class="product-action-2">
                    <a title="Kunjungi Laman" href="https://www.instagram.com/tv/CUXX-zFhV5W/">Kunjungi Laman</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="https://www.instagram.com/tv/CUXX-zFhV5W/">MaCaRiTa</a></h3>
              </div>
            </div>
            <!-- End Series -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Video Series -->

  <!-- Start Divisi Section  -->
  <section class="shop-blog section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <a href="#">
              <h2>Kepengurusan Desa Binaan</h2>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Kades dan Wakades  -->
          <div class="shop-single-blog">
            <a href="#"><img src="images/Kawades.png" alt="#"></a>
            <div class="content">
              <a href="#" class="title">Kepala dan Wakil Kepala Desa</a>
              <a href="#" class="more-btn">Pelajari Lebih Lanjut</a>
            </div>
          </div>
          <!-- End Kades dan Wakades  -->
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Sekretaris  -->
          <div class="shop-single-blog">
            <a href="#"><img src="images/Sekre.png" alt="#"></a>
            <div class="content">
              <a href="#" class="title">Sekretaris</a>
              <a href="#" class="more-btn">Pelajari Lebih Lanjut</a>
            </div>
          </div>
          <!-- End Sekretaris  -->
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Bendahara  -->
          <div class="shop-single-blog">
            <a href="#"><img src="images/Bendahara.png" alt="#"></a>
            <div class="content">
              <a href="#" class="title">Bendahara</a>
              <a href="#" class="more-btn">Pelajari Lebih Lanjut</a>
            </div>
          </div>
          <!-- End Bendahara  -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Divisi Infokom  -->
          <div class="shop-single-blog">
            <a href="#"><img src="images/INFOKOM.png" alt="#"></a>
            <div class="content">
              <a href="#" class="title">Divisi Infokom</a>
              <a href="#" class="more-btn">Pelajari Lebih Lanjut</a>
            </div>
          </div>
          <!-- End Divisi Infokom  -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Divisi PSDM  -->
          <div class="shop-single-blog">
            <a href="#"><img src="images/PSDM.png" alt="#"></a>
            <div class="content">
              <a href="#" class="title">Divisi PSDM</a>
              <a href="#" class="more-btn">Pelajari Lebih Lanjut</a>
            </div>
          </div>
          <!-- End Divisi PSDM  -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Divisi MP  -->
          <div class="shop-single-blog">
            <a href="#"><img src="images/MP.png" alt="#"></a>
            <div class="content">
              <a href="#" class="title">Divisi MP</a>
              <a href="#" class="more-btn">Pelajari Lebih Lanjut</a>
            </div>
          </div>
          <!-- End Divisi MP  -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Divisi Section-->

  <?php 
  include("footer.php");
  ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

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