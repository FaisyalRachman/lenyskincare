 <section id="gallery" class="gallery">
   <div class="container" style="margin-top: 66px;">
   <div class="contentbg">

     <div class="section-title">
          <h2>Publikasi</h2>
         
        </div>

    <div class="row">
      <?php 
                         	$no = $this->uri->segment(3)+1;
													foreach ($album->result_array() as $h) {	
														$total_foto = $this->model_utama->view_where('gallery',array('id_album' => $h['id_album']))->num_rows();

      ?>
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="icon-box"> 
          	 <a href='<?php echo base_url()."albums/detail/". $h['album_seo']; ?>'>
           <img class="img-fluid" style="padding:8px" src='<?php echo base_url()."asset/img_album/".$h['gbr_album']; ?>' alt='<?php echo $h['gbr_album'];?>' /></a>
            <h5 style="text-align:center;font-size:1vw;"><a href="<?php echo base_url()."albums/detail/". $h['album_seo']; ?>" style="color:#004488;font-weight:bold"><?php echo $h['jdl_album'];?></a></h5>
           
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
  </div>
</section>