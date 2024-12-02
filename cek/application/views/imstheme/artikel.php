<section id="services" class="services" style="margin-top:66px;">
<div class="container">
<div class="contentbg"> 
    <div class="section-title" style="color:#ffffff !important;">
      <h2>Artikel </h2>
    </div>
<div class="row">
<div class="col-lg-4" style="padding:20px;">
    
  <h2><i class="bx bxs-duplicate"></i> Category</h2>   
<?php
 $testimoni = $this->model_utama->view_where_ordering_limit('kategori', array('sidebar' => '1'), 'rand()', 'ACS', 0, 12);
foreach ($testimoni->result_array() as $t) {
 
  $judul = substr($t['nama_kategori'], 0, 35);
  $sub_judul = substr($t['deskripsi'], 0, 35);
  $gbr = $t['gambar_utama'];
  echo "<a href='". base_url() . "kategorinews/detail/".$t['kategori_seo']."'><img src='" . base_url() . "asset/foto_berita/$gbr' class='img-fluid' style='padding:5px;border:1px solid #cccccc;'>
           <div class='centerkat'><h6 style='color:#ffffff;font-weight:bold;'>$judul</h6></div></a>";
}
?>
    
  </div>
<div class="col-lg-4" style="padding:20px;">
<h2><i class="bx bx-news"></i> Recent News</h2>   

<?php
        $j=1;
        $hot = $this->model_utama->view_join_two('berita', 'users', 'kategori', 'username', 'id_kategori', array('berita.aktif' => 'Y'), 'tanggal', 'ASC', 0, 3);
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
        echo "<h4><a href='".base_url()."news/".$urlberita."'>" . $judul . "</a></h4>
        <p><img src='asset/foto_berita/$gbr' class='img-fluid' style='width:50%;float:left;padding:8px;' alt=''><small style='text-align:left;'>" . $isi . "</small></p>";
        echo "</div><br>";
    }
        ?>
    
  </div>
  <div class="col-lg-4" style="padding:20px;">
    
  <h2><i class="bx bxs-news"></i> Popular News</h2>   

<?php
        $j=1;
        $hot = $this->model_utama->view_join_two('berita', 'users', 'kategori', 'username', 'id_kategori', array('berita.dibaca >' => '3'), 'rand()', 'DESC', 0, 3);
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
        echo "<h4><a href='".base_url()."news/".$urlberita."'>" . $judul . "</a></h4>
        <p><img src='asset/foto_berita/$gbr' class='img-fluid' style='width:50%;float:left;padding:8px;' alt=''><small style='text-align:left;'>" . $isi . "</small></p>";
        echo "</div><br>";
    }
        ?>
    
  </div>
</div>
</div>
</div>
</section>