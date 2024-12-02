<section id="services" class="services" style="margin-top:0px;">
  <div class="container">
<div class="contentbg">       <br>
<?php

  $sosmed = $this->model_utama->view('identitas')->row_array();

  $cekslide = $this->model_utama->view_single('berita', array('headline' => 'Y', 'status' => 'Y'), 'id_berita', 'DESC');
if ($cekslide->num_rows() > 0) {
  include "slidekat.php";
}
?>


        <div class="section-title">
          <h2><?php echo "$rows[nama_kategori]"; ?></h2>
         <p style="padding:40px;margin-top:-33px;">
       <?php echo "$rows[detail]"; ?></p>
        </div>

      <div class="row">
              <?php

      $no = 1;
     // $hot= $this->model_utama->view_join_two('produk','subkategori','kategori','id_kategori','id_kategori',array('kategori.kategori_seo' => $this->uri->segment('3')), 'tanggal', 'ASC', 0, 20);
			//$hot = $this->model_utama->view_join_two('produk', 'users', 'kategori', 'username', 'id_kategori', array('kategori.kategori_seo' => $this->uri->segment('3')), 'tanggal', 'ASC', 0, 20);
      foreach ($beritakategori->result_array() as $r) {	
        $baca = $r['dibaca']+1; 
                          $isi_berita =(strip_tags($r['deskripsi'])); 
                          $isi = substr($isi_berita,0,220); 
                          $isi = substr($isi_berita,0,strrpos($isi," ")); 
                          $judul = $r['nama_subkategori']; 
                        
                         // $total_komentar = $this->model_utama->view_where('komentar',array('id_produk' => $r['id_produk']))->num_rows();
                          

      ?>
        <div class="col-lg-4 col-md-5">
          <div class="icon-box" style="border:1px solid #e9f0f1;margin:3px;border-radius:8px;box-shadow:1px 3px 2px 1px #cccdcd;">
          <a href="<?php echo base_url() ."kategori/detailsub/". $r['subkategori_seo']; ?>" style="color:#004488;font-weight:bold"> <img src="<?php echo base_url(); ?>asset/foto_produk/<?php echo $r['subgambar_utama']; ?>" alt="" style="width:100%;">
            <p style="text-align:center;font-size:13px;line-height: 1.6;"><?= $judul ?></a></p>

         
          </div>
        </div>

      <?php } ?>
        </div>  <br>
        <div class="row">
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