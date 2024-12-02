<section id="services" class="services" style="margin-top:25px;border-bottom:none;">
<img src='<?php echo base_url(); ?>assets/img/karir_di_lenyskincare.png' class='img-responsive' width="100%" alt=''>
  <div class="container">
  <div class="text-center section-title" style="padding-top:60px;">
       <p style="font-size:1.3em !important;font-family:century gothic;">Leny Skin Care membuka peluang untuk kamu yang ingin mengmbangkan bakat dan karir serta keinginan untuk tumbuh dan berkembang bersama mencapai Visi dan Misi perusahaan yang menjunjung tinggi kreatifitas dan profesionalisme.</p>
   <hr>
      </div>
   
 <div class="row justify-content-center text-center">
 <div class="col-lg-12">
    <div class="row justify-content-center text-center">
    <div class="col-lg-1"> 
</div>
 <div class="col-lg-1"> <img src='<?php echo base_url(); ?>assets/img/berkarir_lenyskincare.png' width="100%" class='img-responsive center-block' style="margin-top:10px;" alt=''></div>
 <div class="col-lg-10" style="text-align: left;"><h4 style="font-size:1.6vw;color:#8B6FB9;"><b>Kenapa di Leny Skin Care ?</b></h4> <p style="font-family:century gothic;font-size:1.2vw;">Leny Skincare merupakan salah satu perusahaan yang bertumbuhdengan pesat di industri kecantikan. Berkarir bersama Leny Skincare mungkin bisa menjadi jenjang pengalaman yang selama ini kamu cari.</p></div>
</div>
<p></p><p></p>

</div>
 <div class="col-lg-2"></div>
 </section>
 <section id="cta" class="cta" style="margin-top:0px !important;padding:0px !important;border-bottom:none;background-image:url(<?php echo base_url('assets/img/lokasi_lenyskincare.png'); ?>);background-position: center;background-size: cover;">
 
  <div class="row">
  <div class="col-lg-2 d-flex justify-content-center">
</div>
<div class="col-lg-6 d-flex">
 <div class="section-title-project" style="text-align: left !important;margin-left:0px !important;">
 <br>
      <h1 class="project" style="font-family:century Gothic;text-align: left !important;margin-left:14px !important;font-size:2vw;color:#333"><b>Bergabung bersama Leny Skin Care !</b> </h1>
     
    </div>
    </div>
     </div><br>
    <div class="row">
    <div class="col-lg-2 d-flex justify-content-center">
</div>
       <div class="col-lg-4">
 <div class="section-title-project" style="text-align: left !important;margin-left:0px !important;">
   <?php echo form_open_multipart($this->uri->segment(1).'/tambah_listlamaran',$attributes);  ?>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Nama *</label>
      <input type="text" name="a" class="form-control" placeholder="Isi nama lengkap Anda">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Hanphone *</label>
      <input type="text" name="b" class="form-control" placeholder="081x xxxx xxxx">
    </div>
  <div class="form-group col-md-12">
    <label for="inputAddress2">Email *</label>
    <input type="text" name="d" class="form-control" placeholder="alamatemail@gmail.com">
  </div>
   </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Pesan *</label>
      <textarea name="e" rows="10" class="form-control" placeholder="Berikan alaasan kenapa Anda layak bergabung 
dengan Leny Skin Care"></textarea>
    </div>
</div>
</div></div>
<div class="col-lg-4 d-flex">
  <div class="form-group col-md-12">
      <label for="inputZip">Upload KTP *</label>
      <input type="file" name="k" class="form-control" required>
      <br>
      <label for="inputZip">Upload CV *</label>
      <input type="file" name="l" class="form-control" required><br>
      <label for="inputZip">Upload Ijazah Terakhir *</label>
      <input type="file" name="m" class="form-control" required><br>
      <label for="inputZip">Upload Sertifikat <small>(opsional)</small></label>
      <input type="file" name="n" class="form-control">
    </div>
</div>
<div class="col-lg-2 d-flex justify-content-center">
</div>
  </div>
</div>

<div class="row">
  <div class="form-row">
  <div class="col-lg-6">

</div>
  <div class="col-lg-6 d-flex justify-content-center">
  <div class=""> <button type="submit" name="submit" class="btn btn-primary gold" style="font-size:1.3em;padding:3px 22px 3px 22px !important;font-weight:bold;border-radius:17px;background:#8B6FB9;border:none;color:#fff;">Kirim</button></div>
</div>
</div>
</div>
</form>
 <?php if ($this->session->flashdata('message')){?>
       <div class="d-flex justify-content-center"><b> <?= $this->session->flashdata('message');?></b></div>
     <?php } ?>
    </div>
    </div>
   
</div>
      </div>   
 </div>
 <br><br>
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
