 <!-- ======= Header tesss ======= -->
    <div class="container-fluid" style="border-bottom: 1px solid #fcfcfc;box-shadow: 30px 10px 30px rgba(0, 0, 0, 0.1);">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="<?php echo base_url('klinik_kecantikan_tangerang');?>"><img src="<?php echo base_url('assets/img/logolenys.png');?>"></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
<?php 

$this->uri->segment(1)=='main' ?  $a == 'active' : "no";
$this->uri->segment(1)=='treatment' ?  $b == 'active' : "no";
$this->uri->segment(1)=='productlenyskincare' ?  $c = 'active' : "no";
$this->uri->segment(1)=='location' ?  $d = 'active' : "no";
$this->uri->segment(1)=='karir' ?  $e = 'active' : "no";
$this->uri->segment(2)=='promolenyskincare' ?  $f = 'active' : "no";
$this->uri->segment(1)=='hubungi' ?  $g = 'active' : "no";
 ?>
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto <?php echo $a; ?>" href="<?php echo base_url('main');?>">Beranda</a></li>
              <li><a class="nav-link scrollto <?php echo $b; ?>" href="<?php echo base_url('treatment');?>">Treatment</a></li>
              <li><a class="nav-link scrollto <?php echo $c; ?>" href="<?php echo base_url('productlenyskincare');?>">Produk</a></li>
              <li><a class="nav-link scrollto <?php echo $d; ?>" href="<?php echo base_url('location');?>">Lokasi</a></li>
                 
               <li><a class="nav-link scrollto get-started-btn <?php echo $f; ?>" href="<?php echo base_url('product/promolenyskincare');?>">PROMO</a></li>
               <li><a class="nav-link scrollto get-started-btn2 <?php echo $g ?>" href="<?php echo base_url('hubungi');?>">Hubungi Kami</a></li>
               <li></li>
               <li></li>
               <li> <a class="nav-link scrollto" href="<?php echo base_url('userlogin');?>">
             <svg style="width:24px;height:24px;color:#888;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#c9c9c9" d="M352 96h64c17.7 0 32 14.3 32 32V384c0 17.7-14.3 32-32 32H352c-17.7 0-32 14.3-32 32s14.3 32 32 32h64c53 0 96-43 96-96V128c0-53-43-96-96-96H352c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-7.5 177.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H160v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
</a></li>
            </ul>
           
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
                </div>
      </div>

    </div>
<!-- End Header -->