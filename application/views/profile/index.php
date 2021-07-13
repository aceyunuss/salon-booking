<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $judul;?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="<?= base_url();?>dist/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>dist/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url();?>dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>dist/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url();?>dist/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url();?>dist/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url();?>dist/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url();?>dist/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url();?>dist/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Imperial - v3.2.1
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
      <?php echo $this->session->flashdata('message');?>
        <h1>Welcome to Diaz Salon and Babershop</h1>
        <br>
        <h2>We served <span class="typed" data-typed-items="daily make up, many hair style, hair coloring, hair spa"></span></h2>
        <div class="actions">
          <a href="<?= base_url('booking');?>" class="btn-get-started">BOOK A SERVICE</a>
          <a href="#about" class="btn-services">GET STARTED</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">

      <a href="<?= base_url('auth');?>" class="logo mr-auto"><img src="<?= base_url();?>dist/img/diaz.png" alt=""></a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Services</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">About Us</h3>
            <div class="section-title-divider"></div>
          </div>
        </div>
      </div>
      <div class="container about-container wow fadeInUp">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="<?=base_url();?>dist/img/salon.png" alt="">
          </div>

          <div class="col-md-6 about-content">
            <h2 class="about-title">We provide great services</h2>
            <p class="about-text">
              Aktifitas yang padat dan tuntutan peran yang tinggi, menyebabkan beberapa orang perlu meluangkan waktu sejenak untuk rileks dan menyegarkan pikiran kembali. Dengan tubuh dan pikiran yang lebih fresh, aktifitas sehari - hari menjadi lebih ringan dan menyenangkan. Itulah mengapa "nyalon" menjadi kebutuhan dasar bagi setiap orang.
            </p>
            <p class="about-text">
              Maka dari ini lah, pada tahun 2018 berdiri Salon Diaz. Salon dengan pelayanan yang lengkap dan berkualitas tinggi. Dengan demikian, seseorang bisa melakukan perawatan kecantikan.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Service Section ======= -->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Service</h3>
            <div class="section-title-divider"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-reguler">Reguler</li>
              <li data-filter=".filter-makeup">Make Up</li>
              <li data-filter=".filter-coloring">Coloring</li>
              <li data-filter=".filter-spa">Spa</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-coloring">
            <img src="<?= base_url();?>dist/img/portfolio/ombre.jpg" class="img-fluid" height="30px" weight="30px" alt="">
            <div class="portfolio-info">
              <h4>Coloring</h4>
              <p>Cat Ombre</p>
              <a href="<?= base_url();?>dist/img/portfolio/ombre.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Ombre"><i class="fa fa-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-spa">
            <img src="<?= base_url();?>dist/img/portfolio/totokwajah.jpg" height="30" weight="30" class="img-fluid" salt="">
            <div class="portfolio-info">
              <h4>Spa</h4>
              <p>Totok Wajah</p>
              <a href="<?= base_url();?>dist/img/portfolio/totokwajah.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Totok Wajah"><i class="fa fa-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makeup">
            <img src="<?= base_url();?>dist/img/portfolio/makeupwisuda.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Make Up</h4>
              <p>Make Up Wisuda / Kelulusan</p>
              <a href="<?= base_url();?>dist/img/portfolio/makeupwisuda.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Make Up Wisuda"><i class="fa fa-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makeup">
            <img src="<?= base_url();?>dist/img/portfolio/makeupdaily.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Make Up</h4>
              <p>Daily Make Up</p>
              <a href="<?= base_url();?>dist/img/portfolio/makeupdaily.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Daily Make Up"><i class="fa fa-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-reguler">
            <img src="<?= base_url();?>dist/img/portfolio/potong.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Reguler</h4>
              <p>Potong Rambut</p>
              <a href="<?= base_url();?>dist/img/portfolio/potong.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Potong Rambut"><i class="fa fa-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-spa">
            <img src="<?= base_url();?>dist/img/portfolio/creambath.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Spa</h4>
              <p>creambath +  Hair Tonic</p>
              <a href="<?= base_url();?>dist/img/portfolio/creambath.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Creambath"><i class="fa fa-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Spa">
            <img src="<?= base_url();?>dist/img/portfolio/hairspa.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Spa</h4>
              <p>Hair Spa</p>
              <a href="<?= base_url();?>dist/img/portfolio/hairspa.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Hair Spa"><i class="fa fa-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makeup">
            <img src="<?= base_url();?>dist/img/portfolio/makeupnikah.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Make Up</h4>
              <p>Make Up Pengantin Modern</p>
              <a href="<?= base_url();?>dist/img/portfolio/makeupnikah.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Make Up Pengantin"><i class="fa fa-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-reguler">
            <img src="<?= base_url();?>dist/img/portfolio/potong.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="<?= base_url();?>dist/img/portfolio/potong.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Service Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Testimonials</h3>
            <div class="section-title-divider"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="<?= base_url();?>dist/img/testi1.jpg" alt=""></div>
              <h4>Rantia K.</h4>
            </div>
          </div>
          <div class="col-md-9">
            <div class="quote">
              <b><img src="<?= base_url();?>dist/img/quote_sign_left.png" alt=""></b> Pertama kali datang ke Salon Diaz dan  hasilnya pun memuaskan! Hasil rebonding rambut saya jadi terlihat alami, lebih hitam dan tidak kusut. <small><img src="<?= base_url();?>dist/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <div class="quote">
              <b><img src="<?= base_url();?>dist/img/quote_sign_left.png" alt=""></b> Mencoba untuk coloring uban karena uban sudah mulai full dan hasilnya pun memuaskan. Terlihat hitam alami . <small><img src="<?= base_url();?>dist/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="<?= base_url();?>dist/img/testi2.jpg" alt=""></div>
              <h4>Tika Lestari</h4>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Contact Us</h3>
            <div class="section-title-divider"></div>
          </div>
        </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Location : </h4>
              <p>21 Raya Beringin Street<br>Ngaliyan, Semarang</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours : </h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call / WhatsApp :</h4>
              <p>+62 813 5414 9660 </p>
            </div>
          </div>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="<?= base_url();?>dist/img/map.png" " frameborder="0" allowfullscreen></iframe>
      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright  All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url();?>dist/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url();?>dist/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url();?>dist/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url();?>dist/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?= base_url();?>dist/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url();?>dist/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url();?>dist/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url();?>dist/vendor/typed.js/typed.min.js"></script>
  <script src="<?= base_url();?>dist/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url();?>dist/js/main.js"></script>  

</body>

</html>