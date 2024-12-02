 
  <section id="demos">
      <div class="row">
        <div class="large-14 columns container d-flex">
          
       
     
          <div class="custom1 owl-carousel owl-theme">
         <div class="item" style="width:1145px"><h4>1</h4></div>
            <div class="item">
              <h4>2</h4>
            </div>
            <div class="item">
              <h4>3</h4>
            </div>
            <div class="item">
              <h4>4</h4>
            </div>
            <div class="item">
              <h4>5</h4>
            </div>
            <div class="item">
              <h4>6</h4>
            </div>
            <div class="item">
              <h4>7</h4>
            </div>
            <div class="item">
              <h4>8</h4>
            </div>
            <div class="item">
              <h4>9</h4>
            </div>
            <div class="item">
              <h4>10</h4>
            </div>
            <div class="item">
              <h4>11</h4>
            </div>
            <div class="item">
              <h4>12</h4>
            </div>
          </div>
         
             <script>
            jQuery(document).ready(function($) {
              $('.fadeOut').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                loop: true,
                margin: 10,
              });
              $('.custom1').owlCarousel({
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                items: 1,
                margin: 30,
                stagePadding: 30,
                smartSpeed: 450
              });
            });
          </script>
        </div>
      </div>
    </section>
 <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="text-align:left;">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

   <?php
                $slide1 = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('headline' => 'Y','status' => 'Y'),'id_berita','DESC',0,4);
                $no=1;
                foreach ($slide1->result_array() as $row) {
                    if ($row['gambar'] ==''){ $foto_slide = 'no-image.jpg'; }else{ $foto_slide = $row['gambar']; }
                    if (strlen($row['judul']) > 40){ $judul = substr($row['judul'],0,40).',..';  }else{ $judul = $row['judul']; }
                     if (strlen($row['sub_judul']) > 40){ $subjudul = substr($row['sub_judul'],0,40).',..';  }else{ $subjudul = $row['sub_judul']; }
                    if ($no==1){ $active = 'active'; }else{ $active = '';}  
                    echo "<div class='carousel-item ".$active."'>
                             <div class='container' style='background-image:url(".base_url()."asset/foto_berita/$foto_slide)'>
                          
                           <h1>'' $judul ''</h1>
                             <h2>$subjudul</h2><a href='".base_url().$row['judul_seo']."' style='margin-bottom:23px;' class='btn-get-started scrollto'>Lihat Detail</a>
           
          
                        </div></div>"; 
                    $no++;
                }
            ?>



      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section>