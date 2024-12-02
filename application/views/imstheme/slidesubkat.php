<section id="demo">
    <div class="row">
      <div class="columns container d-flex">
        <div class="custom1 owl-carousel owl-theme">

         <?php
          $slide1 = $this->model_utama->view_join_two('subkategori', 'produk', 'kategori', 'id_subkategori', 'id_kategori', array('subkategori.subkategori_seo' => $this->uri->segment('3'),'subkategori.sidebar' => '2'), 'tanggal', 'ASC', 0, 1);
          $no = 1;
          foreach ($slide1->result_array() as $row) {
            if ($row['gambar'] == '') {
                $foto_slide = 'no-image.jpg';
              } else {
                $foto_slide = $row['subgambar_utama'];
              }
            // if (strlen($row['judul']) > 40){ $judul = substr($row['judul'],0,40).',..';  }else{ $judul = $row['judul']; }
            //  if (strlen($row['sub_judul']) > 40){ $subjudul = substr($row['sub_judul'],0,40).',..';  }else{ $subjudul = $row['sub_judul']; }

            echo "<div class='item'><div class='textoverlay' style='margin-left:60px !important;color:#0C152A;'><h5>".$row['subdeskripsi']."</h5><br>
            </div>
                   <p> <a href='#'><img src='" . base_url() . "asset/foto_produk/$foto_slide' class='img-fluid'> </a></p>
                   </div>";
            $no++;
          }
          ?>
        </div>
    
      </div>
    </div>
  </section>