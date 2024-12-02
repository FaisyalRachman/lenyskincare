<section id="services" class="services" style="margin-top:66px;border-bottom: none;box-shadow: 30px 30px rgba(0, 0, 0, 0.1)";
  padding: 10px;
  box-shadow: 5px 10px;">
<div class="container">
<div class="contentbg"> 
    <div class="section-title" style="color:#000 !important;padding-bottom:0 !important;margin-bottom:0 !important;">
      <h3 style="font-family:Century Gothic;font-size:1.9em;padding-bottom:0 !important;margin-bottom:0 !important;"><i class="bx bx-info-circle"></i> Leny Skin Care, Treatment Artikel & Tips </h3>
    </div>
<div class="row">
<div class="col-lg-6" style="padding:15px;">
<h2 style="font-family:Roboto;font-size:1.7vw;"><i class="bx bx-news"></i> Recent News</h2>   

<?php
        $j=1;
        $hot = $this->model_utama->view_join_two('berita', 'users', 'kategori', 'username', 'id_kategori', array('berita.status' => 'Y'), 'tanggal', 'ASC', 0, 100);
         foreach ($hot->result_array() as $t) {	
          $baca = $t['dibaca']+1;	
          $isi_berita =(strip_tags($t['isi_berita'])); 
          $isi = substr($isi_berita,0,220); 
          $isi = substr($isi_berita,0,strrpos($isi," ")); 
          $judul = $t['judul']; 
          $urlberita = $t['judul_seo']; 
          $gbr = $t['gambar']; 
          $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $t['id_berita']))->num_rows();
          if ($j==1){ $actives = 'active show'; }else{ $actives = '';
        }  

        echo "<div class='testimonial-item'>";
        echo "<h4 style='font-family:century gothic;font-size:1.4vw;'><a href='".base_url()."news/".$urlberita."'>" . $judul . "</a></h4>
        <p style='font-family:century gothic;text-align:left;' class='detailberita'><img src='asset/foto_berita/$gbr' class='img-fluid' style='width:50%;float:left;padding:8px;' alt=''>" . $isi . "</p>";
        echo "</div><br><br><p></p>";
    }
        ?>
    
  </div>
  <div class="col-lg-6" style="padding:20px;">
    
  <h2 style="font-family:Roboto;font-size:1.7vw;"><i class="bx bxs-news"></i> Popular </h2>   

<?php
        $j=1;
        $hot = $this->model_utama->view_join_two('berita', 'users', 'kategori', 'username', 'id_kategori', array('berita.dibaca >' => '3'), 'rand()', 'DESC', 0, 100);
         foreach ($hot->result_array() as $t) {	
          $baca = $t['dibaca']+1;	
          $isi_berita =(strip_tags($t['isi_berita'])); 
          $isi = substr($isi_berita,0,220); 
          $isi = substr($isi_berita,0,strrpos($isi," ")); 
          $judul = $t['judul']; 
          $urlberita = $t['judul_seo']; 
          $gbr = $t['gambar']; 
          $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $t['id_berita']))->num_rows();
          if ($j==1){ $actives = 'active show'; }else{ $actives = '';
        }  

        echo "<div class='testimonial-item'>";
        echo "<h4 style='font-family:century gothic;font-size:1.4vw;'><a href='".base_url()."news/".$urlberita."'>" . $judul . "</a></h4>
        <p style='text-align:left;font-family:century gothic;'><img src='asset/foto_berita/$gbr' class='img-fluid' style='width:50%;float:left;padding:8px;' alt=''>" . $isi . "</p>";
        echo "</div><br><br><p></p>";
    }
        ?>
    
  </div>
</div>
</div>
</div>
</section>