<section id="demo" style="margin-top:20px;">
    <div class="row">
      <div class="columns container d-flex">
        <div class="custom1 owl-carousel owl-theme">
       

          <?php
          $slide1 = $this->model_utama->view_single('kategori', array('kategori.kategori_seo' => $this->uri->segment('3'),'sidebar' => '1','aktif' => 'Y'), 'RAND()', 'ASC', 0, 1);
          $no = 1;
          foreach ($slide1->result_array() as $row) {
            if ($row['gambar_utama'] == '') {
              $foto_slide = 'no-image.jpg';
            } else {
              $foto_slide = $row['gambar_utama'];
            }
            // if (strlen($row['judul']) > 40){ $judul = substr($row['judul'],0,40).',..';  }else{ $judul = $row['judul']; }
            //  if (strlen($row['sub_judul']) > 40){ $subjudul = substr($row['sub_judul'],0,40).',..';  }else{ $subjudul = $row['sub_judul']; }

            echo "<div class='item'><div class='textoverlay' style='margin-left:60px !important;color:#0C152A;'><h5>".$row['deskripsi']."</h5>".$row['sub_judul']."<br>
            </div>
                   <p> <a href='#'><img src='" . base_url() . "asset/foto_berita/$foto_slide'> </a></p>
                   </div>";
            $no++;
          }
          ?>
        </div>
        <script>
          jQuery(document).ready(function($) {
            $('.fadeOut').owlCarousel({
              items: 1,
              animateOut: 'fadeOut',
              loop: true        
            });
            $('.custom1').owlCarousel({
                animateOut: 'slideOutDown',
              animateIn: 'flipInX',
              dots: false,
              loop:true,
              autoWidth: false,
              autoplay:true,
              autoplayTimeout:4000,
              autoplayHoverPause:true,
              nav: false,
              items: 1,
            
              smartSpeed: 450,
              navText: ['<i class=" bx bx-chevron-left"></i>', '<i class="bx bx-chevron-right"></i>']
            });
          });
        </script>
      </div>
    </div>
  </section>
  <section id="services" class="services">
      <div class="container">
<div class="contentbg">
        <div class="section-title">
          <h2><?php echo "$rows[nama_kategori]"; ?></h2>
         <p style="padding:40px;margin-top:-33px;">
      <?php echo "$rows[detail]"; ?></p>
        </div>

      <div class="row">
              <?php

      $no = 1;
      $hot = $this->model_utama->view_join_two('berita', 'users', 'kategori', 'username', 'id_kategori', array('kategori.kategori_seo' => $this->uri->segment('3')), 'tanggal', 'ASC', 0, 20);
      foreach ($hot->result_array() as $r){
        $baca = $r['dibaca']+1; 
                          $isi_berita =(strip_tags($r['isi_berita'])); 
                          $isi = substr($isi_berita,0,220); 
                          $isi = substr($isi_berita,0,strrpos($isi," ")); 
                          $judul = $r['judul']; 
                         // $total_komentar = $this->model_utama->view_where('komentar',array('id_produk' => $r['id_produk']))->num_rows();
                          

      ?>
        <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4">
          <div class="icon-box" style="border:1px solid #cccccc;margin:23px;">
            <img src="<?php echo base_url(); ?>asset/foto_berita/<?php echo $r['gambar']; ?>" alt="" class="img-fluid">
            <h5 style="text-align:center;"><a href="<?php echo base_url() .'news/'.$r['judul_seo']; ?>" style="color:#004488;font-weight:bold"><?= $judul ?></a></h5>
         
          </div>
        </div>

      <?php } ?>
        </div>
        <br><br><br><br><br>
 </div>
      </div>
    </section>