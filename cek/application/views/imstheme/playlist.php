<section id="services" class="services">
   <div class="container" style="margin-top: 120px;">

     <div class="section-title">
          <h2>Video Kegiatan</h2>
         
        </div>

    <div class="row">
      <?php 
                         $no=$this->uri->segment(3)+1;
													foreach ($playlist->result_array() as $h) {	
													$total_video = $this->model_utama->view_where('video',array('id_playlist' => $h['id_playlist']))->num_rows();

      ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box"> 
          	 <a href='<?php echo base_url()."playlist/detail/". $h['playlist_seo']; ?>'>
           <img class="img-fluid" style='width:100%' src='<?php echo base_url()."asset/img_playlist/".$h['gbr_playlist']; ?>' alt='<?php echo $h['gbr_album'];?>' /></a>
            <h5 style="text-align:left;"><a href="<?php echo base_url()."playlist/detail/".$h['playlist_seo']; ?>" style="color:#004488;font-weight:bold"><?php echo $h['jdl_playlist']; ?><?php echo $h['jdl_video'];?></a></h5>
            <p style="text-align: left;"><?php echo $row['jdl_album'];?></p>
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