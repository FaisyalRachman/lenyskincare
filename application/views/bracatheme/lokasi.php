<section style="margin-top:0px;border-bottom:none;background-image:url(<?php echo base_url('assets/img/lokasi_lenyskincare.png'); ?>);background-position: center;background-size: cover;">
<h2 class="project text-center" style="padding:0 !important;margin:0 !important;font-family:Century Gothic;font-weight:none !important;font-size:1.8em;color:#555">Kunjungi Klinik Kami</h2>
<br><div class="container">
<div class="row nopadding">
  <?php   $slider = $this->model_utama->view('mitra');
      foreach ($slider->result_array() as $slider)
      //$b = $slider;
      { ?>
   
      
        <div class="col-lg-6 col-lg-3 col-xs-6 g-3 text-center">
        <img src='<?php echo base_url('asset/foto_mitra/'); ?><?php echo $slider['gambar'];?>' style="border-radius: 10px;padding:0px;" class='img-responsive' alt=''>
          <h4 style="font-size:1.3rem !important;color:#545454;font-family:Century Gothic;"><?php echo $slider['judul'];?></h4> <p style="font-size:1.3rem !important;color:#8B70B7;margin:0px !important;"><a style="color:#8B70B7 !important;" href="<?php echo $slider['gmap'];?>" target="_blank"><?php echo $slider['url'];?></a></p><p style="margin:0px !important;color:#545454">
   <div style="font-family:Century Gothic;margin-left:0px;"><span><a href="https://api.whatsapp.com/send?phone='<?php echo $slider['number'];?>'&text=HOLA%21%20please..subscribe our website, get the best services to you." target="_blank"><i class="bx bxl-whatsapp" style="font-size:13px;"></i><span style="font-size:13px;">&nbsp;<?php echo $slider['number'];?></span></a>
</span></div></p>
    </div>
   
    <?php } ?>
     </div>
</div>
<link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome/css/fontawesome.min.css')?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome/css/all.css') ?>" />
  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KnightOne - v4.7.0
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="<?= base_url() ?>asset/js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url() ?>asset/js/jquery-ui.js"></script>
    <script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<style>
  @font-face /*perintah untuk memanggil font eksternal*/
  {
    font-family: 'Hilde Sharpie'; /*memberikan nama bebas untuk font*/
    src: url('<?= base_url() ?>assets/css/fonts/Hilde.ttf');/*memanggil file font eksternalnya di folder nexa*/
    font-family: 'Another'; /*memberikan nama bebas untuk font*/
    src: url('<?= base_url() ?>assets/css/fonts/A0048832.ttf');/*memanggil file font eksternalnya di folder nexa*/
    font-family: 'Roboto'; /*memberikan nama bebas untuk font*/
    src: url('<?= base_url() ?>assets/css/fonts/Roboto-Regular.ttf');/*memanggil file font eksternalnya di folder nexa*/
   
    
  }
 
</style>
 </section>

<script>
          jQuery(document).ready(function($) {
            $('.fadeOut').owlCarousel({
              items: 1,
              animateOut: 'fadeOut',
              dots:false,
              loop: true        
            });
            $('.custom1').owlCarousel({
              //animateOut: 'slideOutLeft',
            // animateIn: 'fadeOut',
              dots: false,
              loop:true,
              autoWidth: false,
              autoplay:true,
              autoplayTimeout:4000,
              autoplayHoverPause:true,
              nav: true,
              items: 1,
            smartSpeed: 450,
              navText: ['<i class="bx bx-chevron-left" style="margin-left:-130px !important;"></i> ', '<i class="bx bx-chevron-right" style="margin-right:-130px !important;""></i>']
            });
             $(".testimonials3").owlCarousel({
             autoplay: true,
               loop: true,
               pagination:false,
                nav: false,
                lazyLoad: false,
                dots:false,
                items: 1,
                margin: 10,
                stagePadding: 10,
                smartSpeed: 450,
                navText: ['<i class="bx bx-chevron-left" style="margin-left:10px !important;"></i> ', '<i class="bx bx-chevron-right" style="margin-right:10px !important;"></i>']
  });
          });
        </script>
