<section id="services" class="services" style="margin-top:66px;">
  <div class="container">
    <div class="contentbg" style="padding-bottom:68px;">

  

          <img src='<?php echo base_url(); ?>asset/foto_berita/karir.png' class='img-fluid' alt=''>
         
        
    <div class="section-title">
      <h2 class="project">Karir</h2>
    </div>
       <div class="row">
       <div class="col-lg-1"></div>
      <div class="col-lg-10" style="text-align:center !important;"> <i class='bx bxs-quote-alt-left quote-icon-left'></i><?= $record['karir'] ?> <i class='bx bxs-quote-alt-right quote-icon-right'></i></div>
       <div class="col-lg-1"></div>
     </div>
     <br><br>
 <div class="row justify-content-center text-center">

  <div class="col-lg-1"></div>
 <div class="col-lg-10">
    <div class="row">
 <div class="col-lg-3">  <img src='<?php echo base_url(); ?>asset/foto_berita/karirkenapa.png' class='img-fluid' width="60%;" alt=''></div>
 <div class="col-lg-7" style="text-align: left;"><h4><b>Kenapa IMS?</b></h4> <p>Sumber Daya Manusia (SDM) adalah aset yang sangat berharga bagi sebuah perusahaan, oleh karena itu sebagai bagian dari perusahaan umumnya tentunya IMS sangat mengutamakan kesejahteraan karyawan.</p></div>
</div>
    <div class="row">
 <div class="col-lg-3"> <img src='<?php echo base_url(); ?>asset/foto_berita/karirkerja.png' class='img-fluid' width="60%;" alt=''></div>
 <div class="col-lg-7" style="text-align: left;"><h4><b>Kerja di IMS</b></h4><p>Bergabung dalam IMS, karyawan didukung untuk menjadi pribadi yang lebih baik dalam mencapai impian dengan kreativitas dan inovasi dalam era VUCA (Volatility, uncertainty, complexity and ambiguity).</p></div>
</div>
    </div>
</div>
 <div class="col-lg-2"></div>
 <br>
  <div class="row">
      <div class="col-lg-2"></div>
 <div class="col-lg-10">
 <div class="section-title-project" style="text-align: left !important;margin-left:0px !important;">
      <h3 class="project">Jadilah bagian dari IMS! </h3>
     
    </div>
    </div>
    <div class="col-lg-1"></div>
  </div>
    <div class="row">
      <div class="col-lg-2"></div>
     <div class="col-lg-10">
 <div class="section-title-project" style="text-align: left !important;margin-left:0px !important;">
   <?php echo form_open_multipart($this->uri->segment(1).'/tambah_listlamaran',$attributes);  ?>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputEmail4">Nama <font style="color:#ff0000">*</font></label>
      <input type="text" name="a" class="form-control">
    </div>
    <div class="form-group col-md-5">
      <label for="inputPassword4">No. Telepon <font style="color:#ff0000">*</font></label>
      <input type="text" name="b" class="form-control">
    </div>
 
  <div class="form-group col-md-5">
    <label for="inputAddress">Jenis Kelamin <font style="color:#ff0000">*</font></label>
   <select name="c" class="custom-select">
     <option value="-">Pilih</option>
    <option value="laki-laki">Laki - laki </option>
    <option value="perempuan">Perempuan</option></select>
  </div>

  <div class="form-group col-md-5">
    <label for="inputAddress2">Email <font style="color:#ff0000">*</font></label>
    <input type="text" name="d" class="form-control">
  </div>
   </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputCity">Domisili <font style="color:#ff0000">*</font></label>
      <input type="text" name="e" class="form-control">
    </div>
   <div class="form-group col-md-5">
      <label for="inputZip">Upload CV <font style="color:#ff0000">*</font></label>
      <input type="file" name="k" class="form-control">
    </div>
  </div>
  <div class="form-row">
  <div class="col-lg-6">
  <div class="float-lg-left"><font style="color:#ff0000">*</font> - required fields 
</div>
</div>
  <div class="col-lg-4">
  <div class="float-lg-right"> <button type="submit" name="submit" class="btn btn-primary gold btn-lg" style="border:none;">Upload CV</button></div>
</div>
</div>
</form>
 <?php if ($this->session->flashdata('message')){?>
       <div> <?= $this->session->flashdata('message');?></div>
     <?php } ?>
    </div>
    </div>
     <div class="col-lg-1"></div>
   </div>
</div>
      </div>   
 </div>
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
