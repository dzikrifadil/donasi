<?php
  include ("koneksi.php");

  $result = mysqli_query($conn, "SELECT `id`, `nama`, `tanggal`, `nominal` FROM kegiatan ORDER BY id asc");
  $total = 0;
  $a_data = array();
  while($row = mysqli_fetch_array($result)) {
      $a_data[] = $row;
      $total += $row['nominal'];
  }   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OnePage Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Kepemudaan RW III</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-9 text-center">
          <h1>TOTAL DONASI TERKUMPUL</h1>
          <h1>Rp. <span data-purecounter-start="0" data-purecounter-end="<?= $total ?>" data-purecounter-duration="4" class="purecounter"></span></h1>
        </div>
      </div>

      <div class="row icon-boxes">
        <div class="col-12 col-sm-4 col-lg-6 text-center mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <h4 class="title" align="center"><a href="">BANK BCA </a></h4>
            <p class="description"><h3> 6750580791 A.N DIKA FITRAH</h3></p>
          </div>
        </div>

        <div class="col-12 col-sm-4 col-lg-6 text-center mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <h4 class="title" align="center"><a href="">VIRTUAL DANA </a></h4>
            <p class="description"><h3> 085215497275 A.N DIKA FITRAH</h3></p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p><h3>[KEPEMUDAAN RW III present Semeru Solidarity Response Fund]<br>
            Telah terjadi bencana erupsi Gunung Semeru pada Sabtu 4 Desember 2021. Lebih dari 1300 orang yang harus mengungsi.
            Mari salurkan donasi terbaikmu untuk membantu meringankan beban masyarakat yang mengungsi akibat erupsinya Gunung Semeru.<br> 
            Selalu ada harapan dalam setiap kebaikan. Bantuan dari kalian akan sangat berharga bagi mereka yang membutuhkan.<br><br>
            Untuk konfirmasi donasi bisa menghubungi CP :<br>
            0852 15497275 (Dika Fitrah)
            0881 026557757 (Ryan) </h3></p>
        </div>

      </div>
    </section><!-- End About Section -->

    <section>
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Nominal</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($a_data as $nilai){
                echo "<tr>
                  <th scope='row'>$nilai[0]</th>
                  <td>$nilai[1]</td>
                  <td>$nilai[2]</td>
                  <td>$nilai[3]</td>
                </tr>";
              }
            ?>
            
          </tbody>
        </table>
      </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" width="90">
              <p><h4>KARANG TARUNA RW III</h4></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" width="90">
              <p><h4>CASPER PALA</h4></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" width="90">
              <p><h4>REMAS AL-ICHSAN</h4></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" width="90">
              <p><h4>REOG SINGO JOYO TARUNO SAKTI</h4></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" width="90">
              <p><h4>PATROL ARGANTU</h4></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>