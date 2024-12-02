<section id="services" class="services" style="margin-top:66px;">
  <div class="container">
    <div class="contentbg" style="padding-bottom:68px;">
    
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
 <div class="section-title-project" style="text-align: left !important;margin:3px !important;">
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
    <option value="laki-laki">Laki - laki</option>
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
  <div class="col-lg-10">
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
