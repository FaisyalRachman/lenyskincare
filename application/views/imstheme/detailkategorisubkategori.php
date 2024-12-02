<section id="services" class="services">
  <div class="container">
  <div class="contentbg"><br>
  <?php

$sosmed = $this->model_utama->view('identitas')->row_array();

$cekslide = $this->model_utama->view_single('berita', array('headline' => 'Y', 'status' => 'Y'), 'id_berita', 'DESC');
if ($cekslide->num_rows() > 0) {
include "slidesubkat.php";
}
?>
      </div>
    </div>
  </section>
  <section id="services" class="services">
      <div class="container" style="margin-top: 0px;">
<div class="contentbg">
        <div class="section-title">
          <h2><?php echo "$rows[nama_subkategori]"; ?></h2>
         <p style="padding:40px;margin-top:-33px;">
       <?php echo "$rows[subdetail]"; ?></p>
        </div>

      <div class="row">
              <?php

      $no = 1;
   
     // $hot= $this->model_utama->view_join_two('produk','subkategori','kategori','id_kategori','id_kategori',array('kategori.kategori_seo' => $this->uri->segment('3')), 'tanggal', 'ASC', 0, 20);
			//$hot = $this->model_utama->view_join_two('produk', 'users', 'kategori', 'username', 'id_kategori', array('kategori.kategori_seo' => $this->uri->segment('3')), 'tanggal', 'ASC', 0, 20);
      foreach ($beritakategori->result_array() as $r) {	
        $baca = $r['dibaca']+1; 
                          $isi_berita =(strip_tags($r['sub_judul'])); 
                          $isi = substr($isi_berita,0,220); 
                          $isi = substr($isi_berita,0,strrpos($isi," ")); 
                         // $judul = $r['nama_subkategori']; 
                          $judul = $r['judul'];
                         // $total_komentar = $this->model_utama->view_where('komentar',array('id_produk' => $r['id_produk']))->num_rows();
                          

      ?>
        <div class="col-lg-2 col-md-3 d-flex align-items-stretch mt-5">
          <div class="icon-box" style="border:1px solid #e9f0f1;margin:3px;border-radius:8px;box-shadow:1px 2px 2px 2px #dedede;">
          <a href="<?php echo base_url() . $r['judul_seo']; ?>" style="color:#004488;font-weight:bold"><img src="<?php echo base_url(); ?>asset/foto_produk/<?php echo $r['gambar']; ?>" alt="" class="img-fluid" style="width:160%;padding:18px;">
            <p style="text-align:center;font-size:13px;line-height: 1.6;"><?= $judul ?></a></p>
<p style="font-size:10px;line-height: 1.6;margin:3px;"> <?= $isi ?></p>
         
          </div>
        </div>

      <?php } ?>
        </div>  <br><div class="row">
        <div class="col-lg-12">
        <div class="section-title">
      <div class="pagination">
        <?php echo $this->pagination->create_links(); ?>
      </div>
      </div>
      </div>
  </div>
              <br><br><br>
   </div>
      </div>
    </section>