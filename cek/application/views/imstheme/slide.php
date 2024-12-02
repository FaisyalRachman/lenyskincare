  <section id="demo">
    <div class="row">
      <div class="columns container d-flex">
        <div class="custom1 owl-carousel owl-theme">
       
         <?php
          $slide1 = $this->model_utama->view_join_two('berita', 'users', 'kategori', 'username', 'id_kategori', array('headline' => 'Y','berita.aktif' => 'Y','utama' => 'Y'), 'id_berita', 'DESC', 0, 4);
          $no = 1;
          foreach ($slide1->result_array() as $row) {
            if ($row['gambar'] == '') {
              $foto_slide = 'no-image.jpg';
            } else {
              $foto_slide = $row['gambar'];
            }
            // if (strlen($row['judul']) > 40){ $judul = substr($row['judul'],0,40).',..';  }else{ $judul = $row['judul']; }
            //  if (strlen($row['sub_judul']) > 40){ $subjudul = substr($row['sub_judul'],0,40).',..';  }else{ $subjudul = $row['sub_judul']; }

            echo "<div class='item'><div class='textoverlay' style='text-align:right;'><h4><b>".$row['judul']."</b></h4><div class='introslide' style='word-wrap: break-word !important;'>".$row['sub_judul']."</div></h4><br><a class='btn btn-outline-secondary portal' href='" . base_url() . "news/".$row['judul_seo']."'>Selengkapnya <i class='bx bx-chevron-right panahkiri'></i></a>
            </div>
                   <p> <a href='#'><img src='" . base_url() . "asset/foto_berita/$foto_slide'> </a></p>
                   </div>";
            $no++;
          }
          ?>
        </div>
    
      </div>
    </div>
  </section>