<section id="services" class="services" style="margin-top:66px;">
  <div class="container">
    <div class="contentbg" style="padding-bottom:68px;">
    <div class="section-title">
      <h2 class="project">Client</h2>
    </div>
       <div class="row">
       <div class="col-lg-1"></div>
       <div class="col-lg-10" style="text-align:center !important;"> <i class='bx bxs-quote-alt-left quote-icon-left'></i><?= $record['client'] ?> <i class='bx bxs-quote-alt-right quote-icon-right'></i></div>
       <div class="col-lg-1"></div>
     </div>
     <br><br>
 <div class="row justify-content-center text-center">

  <div class="col-lg-2"></div>
 <div class="col-lg-6">
    <div class="row">
    <div class="columns container d-flex">
      <div class="customclient owl-carousel owl-theme">
     
      <?php
$result ='';
$result .= '<div class="item active">';
$result .= '<div class="row">';
 $client = $this->model_utama->view_ordering_limit2('mitra','id_mitra', 'DESC', 0, 200);

         foreach ($client as $key => $row) {
      
        if ($key !=0 && ($key % 16 == 0)) { //to avoid first empty "active"
          $result .= "</div>";
          $result .= "</div>";
          $result .= "<div class='item'>";
           $result .= "<div class='row'>";
       
         
        }
        
 $result .= '<div class="col-lg-3 client"><div class="icon-box">';
        $result .= '<img src="'.base_url().'asset/foto_mitra/'.$row->gambar.'" class="img-fluid client" style="padding:10px !important;"></div></div>';
        
    }
    $result .= '</div>';
    $result .= '</div>';

    echo $result;
?> 
</div>
</div>
    </div>
</div>
 <div class="col-lg-2"></div>
 <div class="col-lg-10">
       <div class="section-title" style="margin-top:0px !important;">
      <h2>Testimoni</h2>
    </div>
           <div class="testimonials3 owl-carousel owl-theme" style="height:323px !important;">
          <?php
          $testimoni = $this->model_utama->view_ordering_limit('testimoni', 'id_testimoni', 'DESC', 0, 100);
          foreach ($testimoni->result_array() as $t) {
            $baca = $t['dilihat'] + 1;
            $tgl = tgl_indo($t['tgl_posting']);
            $judul = substr($t['judul'], 0, 35);
            $pekerja = $t['url'];
            $gbr = $t['gambar'];
            $isi = $t['source'];
            echo "<div class='testimonial-item'>";

            echo "<img src='asset/foto_testimoni/$gbr' class='testimonial-img' alt=''><h3>" . $judul . "</h3>
              <small style='align-text:left;'>" . $pekerja . "</small>
              <p>
                <i class='bx bxs-quote-alt-left quote-icon-left'></i>
                $isi
                <i class='bx bxs-quote-alt-right quote-icon-right'></i>
              </p>";

            echo "</div>";
          }
          ?>


        </div>

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
            $('.customclient').owlCarousel({
             // animateOut: 'slideOutDown',
            //  animateIn: 'flipInX',
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
                nav: true,
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
