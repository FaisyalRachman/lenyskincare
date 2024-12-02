<section id="portfolio" class="portfolio" style="padding-top:120px;">
      <div class="container">

      <div class="text-center title">
      <h2 style="font-family:Century Gothic !important;font-size:2.3em;color:#8B6FB9;"><b>Rekomendasi Treatment</b></h2>
      </div>
      <div class="row">
          <div class="col-xl-2">
          <label style="font-size:2em;">Kategori</label>
            <ul id="portfolio-flters">
               <?php 
            $gambar =  $this->model_utama->view('kategori');
            foreach ($gambar->result_array() as $gbr){
            ?>
            
              <li data-filter=".<?php echo $gbr['id_kategori'];?>" class="menu"><?php echo $gbr['nama_kategori'];?></li>
             <?php }?>
            </ul>
         </div>
          <div class="col-lg-10" style="margin-top:43px">
          <div class="row">
            <?php 
            $gambar =  $this->model_utama->view_where_ordering_limit('subkategori',array('aktif' => 'Y','recomended' => 'Y'),'nama_subkategori','DESC','0','4');
            foreach ($gambar->result_array() as $gbr){
            ?>
          <div class="col-lg-3 col-md-6 portfolio-item">
           <a href="<?php echo base_url('kategori/detailsub/'.$gbr['id_subkategori'])?>"> <img src="asset/foto_produk/<?php echo $gbr['subgambar_utama'];?>" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><?php echo $gbr['nama_subkategori'];?></h4>
              <p><?php echo "Rp. " .number_format($gbr['subdeskripsi'],0,',','.');?></p>
              <a href="asset/foto_produk/<?php echo $gbr['subgambar_utama'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $gbr['nama_subkategori'];?>"><i class="bx bx-zoom-in"></i></a>
              <a href="<?php echo base_url('hubungi');?>" class="details-link" title="JOIN US"><i class="bx bx-phone-call" style="text-shadow:1px 6px 3px #ccc"></i></a>
            </div>
          </div>
<?php } ?>
      
          </div>
        </div>
        </div>

        <div class="row">
</div>
        </div>


    </section><!-- End Portfolio Section -->
    <section id="portfolio" class="portfolio" style="padding:1px 0 !important;background-image:url(<?php echo base_url('assets/img/lokasi_lenyskincare.png'); ?>);border-bottom:none;">
      <div class="container">

      <div class="text-center title">
          <h2 style="font-family:Century Gothic !important;font-size:2.9em;color:#663390;"><div id="labelmenu"></div></h2>
      </div>
    

        <div class="row">
          <div class="col-lg-2" style="margin-top:46px;">
          <a href="<?php echo base_url('hubungi');?>"><label style="font-weight:100 !important;font-family:Century Gothic;font-size:1.0em;background:#fff;border:1px #c9c9c9 solid;text-shadow:none !important;box-shadow:1px 0px 3px #ccc;padding:4px 23px 4px 23px;border-radius:32px;color:#676;" class="text-center">Gratis Konsultasi</label></a>
            
            
          </div>
          <div class="col-lg-10" style="margin-top:43px">
          <div class="row portfolio-container">
            <?php 
            $gambar =  $this->model_utama->view('subkategori');
            foreach ($gambar->result_array() as $gbr){
            ?>
          <div class="col-lg-3 col-md-6 portfolio-item <?php echo $gbr['id_kategori'];?>">
           <a href="<?php echo base_url('kategori/detailsub/'.$gbr['id_subkategori'])?>"> <img src="<?php echo base_url();?>/asset/foto_produk/<?php echo $gbr['subgambar_utama'];?>" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><?php echo $gbr['nama_subkategori'];?></h4>
              <p><?php echo "Rp. " .number_format((int)$gbr['subdeskripsi'],0,',','.');?></p>
              <a href="asset/foto_produk/<?php echo $gbr['subgambar_utama'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $gbr['nama_subkategori'];?>"><i class="bx bx-zoom-in"></i></a>
              <a href="<?php echo base_url('hubungi');?>" class="details-link" title="JOIN US"><i class="bx bx-phone-call" style="text-shadow:1px 6px 3px #ccc"></i></a>
            </div>
          </div>
<?php } ?>
      
          </div>
        </div>
      </div>
        </div>


    </section><!-- End Portfolio Section -->
    