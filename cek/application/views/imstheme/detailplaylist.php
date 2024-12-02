<section id="services" class="services">
   <div class="container" style="margin-top: 120px;">

     <div class="section-title">
       <h2>Semua Video "<?php echo "$rows[jdl_playlist]"; ?>"</h2>
         
        </div>

    <div class="row">
      <?php 
                           foreach ($detailplaylist->result_array() as $r) {	
												  $lihat = $r['dilihat']+1;
												  $judull = substr($r['jdl_video'],0,33); 
												  $isi_berita =(strip_tags($r['keterangan'])); 
												  $isi = substr($isi_berita,0,280); 
												  $isi = substr($isi_berita,0,strrpos($isi," "));
												  $total_komentar = $this->model_utama->view_where('komentarvid',array('id_video' => $r['id_video']))->num_rows();

      ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box"> 
          	 <a href='<?php echo base_url()."albums/detail/". $r['album_seo']; ?>'>
        <?php echo "<img style='width:100%' class='img-fluid' src='".base_url()."asset/img_playlist/$r[gbr_playlist]' alt='$h[gbr_playlist]' />"; ?>
            <h5 style="text-align:left;"><a href="<?php echo base_url()."albums/detail/". $r['album_seo']; ?>" style="color:#004488;font-weight:bold"><?php echo $h['jdl_album'];?></a></h5>
            <p style="text-align: left;"><?php echo "<a href='".base_url()."playlist/watch/$r[video_seo]' class='more'>Mainkan Video<span class='icon-text'>&#9656;</span></a>"; ?></p>
          </div>
        </div>

      <?php } ?>
<div class="section-title">
      <div class="pagination">
        <?php echo $this->pagination->create_links(); ?>
      </div>
  </div>
    </div>

  </div>
</section>