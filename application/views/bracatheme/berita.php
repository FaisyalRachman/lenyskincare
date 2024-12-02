		<section id="services" class="services" style="margin-top:60px;">
  <div class="container">
<div class="contentbg">
    <div class="section-title">
      <h2>Hasil pencarian..<em>"<?= $_POST['kata']; ?>"</em>.. </h2>
    </div>

    <div class="row">
      <?php
      $no = 1;
   // $hot = $this->model_utama->view_join_two('berita', 'users', 'kategori', 'username', 'id_kategori', array('berita.aktif' => 'N'), 'tanggal', 'DESC', 0, 6);
      foreach ($berita->result_array() as $r){
        $baca = $r['dibaca']+1;	
												  $isi_berita =(strip_tags($r['isi_berita'])); 
												  $isi = substr($isi_berita,0,20); 
												  $isi = substr($isi_berita,0,strrpos($isi," ")); 
												  $judul = substr($r['judul'],0,30); 
                          $idfront = $r['idfront']; 
												  $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows();
												if($idfront==1) {
                          $pathgbr = "asset/foto_berita/";
                          $link = "news/$r[judul_seo]";
                          $ukuran = "height:50%";
                          $jenis = "di berita";
                        }elseif($idfront==2){
                          $pathgbr = "asset/foto_produk/";
                          $link = "$r[judul_seo]";
                          $ukuran = "width:47%";
                          $jenis = "di produk";
                        } elseif($idfront==3){
                          $pathgbr = "asset/foto_testimoni/";
                          $link = "testimoni";
                          $ukuran = "width:43%";
                          $jenis = "di testimoni";
                        }else{
                          $pathgbr = "asset/foto_produk/";
                          $link = "kategori/detail/$r[judul_seo]";
                          $ukuran = "width:100%";
                          $jenis = "di kategori";
                        }

      ?>
        <div class="col-lg-3">
          <div class="icon-box" style="margin:20px;">
            <img src="<?php echo base_url().$pathgbr; ?><?php echo $r['gambar']; ?>" alt="" class="img-fluid" style="<?= $ukuran; ?>">
                      <h5 style="text-align:center;"><a href="<?php echo base_url() .$link; ?>" target="_blank" style="color:#004488;font-weight:bold;font-size:14px;"><?= $judul; ?><small>.. <?= $jenis; ?></small>  <small> selengkapnya ..</small></a></h5>
            <p style="text-align: left;"><?= $isi ?></p>
          </div>
        </div>

      <?php } ?>

    </div>
    <br><br><br>
 </div>
  </div>
</section>