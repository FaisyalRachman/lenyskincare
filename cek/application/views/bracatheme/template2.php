<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="Politeknik Kaltara, Ngodingpintar">
  <meta name="robots" content="all,index,follow">
  <meta http-equiv="Content-Language" content="id-ID">
  <meta NAME="Distribution" CONTENT="Global">
  <meta NAME="Rating" CONTENT="General">
  <!-- Favicons -->
  <link href="<?= base_url('template/imstheme/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('template/imstheme/img/favicon.png') ?>" rel="apple-touch-icon">

  <link rel="canonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
  <link itemprop="thumbnailUrl" href="<?php echo base_url() . 'asset/foto_berita/' . $rows['gambar']; ?>">
  <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
    <link itemprop="url" href="url_gambar">
  </span>
  <?php $berita = $this->model_utama->view_where('berita', array('judul_seo' => $this->uri->segment(1)));
  if ($berita->num_rows() >= 1) {
    $rows = $berita->row_array();
    echo '<meta property="og:title" content="' . $rows['judul'] . '" />
				<meta property="og:type" content="article" />
				<meta property="og:url" content="' . base_url() . '' . $this->uri->segment(3) . '" />
				<meta property="og:site_name" content="" />
				<meta property="og:image" content="' . base_url() . 'asset/foto_berita/' . $rows['gambar'] . '" />
				<meta content="' . base_url() . 'asset/foto_berita/' . $rows['gambar'] . '" itemprop="url"/>
				<div itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
					<meta content="' . base_url() . 'asset/foto_berita/' . $rows['gambar'] . '" itemprop="url"/>
				</div>
				<meta property="og:description" content="' . $description . '"/>';
  }
  ?>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') ?>" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('template/imstheme/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/imstheme/vendor/icofont/icofont.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/imstheme/vendor/fontawesome/font-awesome.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/imstheme/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/imstheme/vendor/venobox/venobox.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/imstheme/vendor/animate.css/animate.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/imstheme/vendor/remixicon/remixicon.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/imstheme/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/imstheme/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('template/imstheme/vendor/aos/aos.css') ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url('template/imstheme/css/style.css') ?>" rel="stylesheet" />

  <!-- Favicons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="shortcut icon" href="../assets/ico/favicon.png">
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Yeah i know js should not be in header. Its required for demos.-->

  <!-- javascript -->
  <script src="<?= base_url('template/imstheme/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/js/owl.carousel.js') ?>"></script>

</head>

<body>
  <?php
  $sosmed = $this->model_utama->view('identitas')->row_array();
  $pecahd = explode(",", $sosmed['facebook']);
  ?>
  <!-- ======= Top Bar ======= -->


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
<div class="d-flex container align-items-center headbg">
      <?php include "header.php"; ?>
</div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->


  <main id="main">

    <?php echo $contents; ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <?php
      include "footer.php";
      $this->model_utama->kunjungan();
      ?>
    </div>

  
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="https://wa.me/+682155573572?text=tes" class="back-to-top2"><i class="icofont-whatsapp"></i></a>
  <a href="<?php echo base_url(); ?>hubungi" class="back-to-top">Meet Us!</a>
  <link rel="stylesheet" href="<?= base_url('template/imstheme/css/animate.css') ?>">
 
  <script>
      function openSearch() {
document.getElementById("myOverlay").style.display = "block";
}
function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
function tes()
{
 
  $(".icon").toggleClass("active");
  $("input[type='text']").toggleClass("active");
}

    jQuery(document).ready(function($) {
    
      $('.fadeOut').owlCarousel({
        items: 1,
        animateOut: 'fadeOut',
        loop: true,
        margin: 10,
      });
      $('.custom1').owlCarousel({
            //animateOut: 'slideOutDown',
            //  animateIn: 'flipInX',
              dots: true,
              loop:true,
              autoWidth: false,
              autoplay:true,
              autoplayTimeout:4000,
              autoplayHoverPause:true,
              nav: true,
              items: 1,
            smartSpeed: 450,
              navText: ['<i class=" bx bx-chevron-left"></i>', '<i class="bx bx-chevron-right"></i>']
            });
        $('.custom2').owlCarousel({
            //animateOut: 'slideOutDown',
            //  animateIn: 'flipInX',
              dots: true,
              loop:true,
              autoWidth: false,
              autoplay:true,
              autoplayTimeout:4000,
              autoplayHoverPause:true,
              nav: true,
              items: 1,
            smartSpeed: 450,
              navText: ['<i class=" bx bx-chevron-left"></i>', '<i class="bx bx-chevron-right"></i>']
            });
    });
  </script>
  <!-- Vendor JS Files -->
  <script src="<?= base_url('template/imstheme/js/highlight.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/js/app.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/vendor/counterup/counterup.min.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('template/imstheme/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('template/imstheme/js/main.js') ?>"></script>

</body>

</html>