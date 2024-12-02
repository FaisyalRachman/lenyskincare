<section id="services" class="services" style="margin-top:66px;">
  <div class="container">
    <div class="contentbg" style="padding-bottom:68px;">
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
 <div class="col-lg-3"> <i class='bx bx-help-circle' style='font-size:170px;color:#0C152A;'></i></div>
 <div class="col-lg-7" style="text-align: left;"><h4><b>Kenapa IMS?</b></h4> <p>Sumber Daya Manusia (SDM) adalah aset yang sangat berharga bagi sebuah perusahaan, oleh karena itu sebagai bagian dari perusahaan umumnya tentunya IMS sangat mengutamakan kesejahteraan karyawan.</p></div>
</div>
    <div class="row">
 <div class="col-lg-3"> <i class='bx bx-group' style='font-size:170px;color:#0C152A;'></i></div>
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
   
     
    </div>
    </div>
    <div class="col-lg-1"></div>
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
