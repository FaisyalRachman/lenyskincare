
  <section id="services" class="services" style="padding-top:70px; !important;border-bottom:none;">
  <div class="row"><div class="col-lg-4"><img src="<?php echo base_url(); ?>assets/img/bgdetail/Klinik-Kecantikan-Tangerang-All-Treatment.jpg" alt="" class="img-responsive" style="width:100%;padding:0px;"></div>
      <div class="col-lg-8"><p class="detailitem" style="margin-top:1px;"><h4 style="margin-left:18px;font-size:2.4em;font-family:verdana;color: #663390;">Treatment Kategori <?php echo "$rows[nama_kategori]"; ?></h4></p>
       <br>
      <div class="row">
      <div class="col-lg-5"> <p style="margin-left:18px;font-size:2rem !important;font-family:century gothic;color:#663390;font-weight:bold;"><?php echo "$rows[nama_subkategori]"; ?></p></div>
      <div class="col-lg-2"></div>
      <div class="col-lg-5"><!-- AddToAny BEGIN --><p>
<!-- AddToAny END --><button class="btn btn-primary btn-lg a2a_dd" style="color:#000;padding:1px 13px 1px 13px !important;font-family:century gothic;border-radius:17px;background:none;border:#000 1px solid;font-size:1.2vw;" onclick="location.href=https://www.addtoany.com/share">share <i class="fa fa-share-alt" style="font-size:1.0em"></i></button> <button class="btn btn-primary btn-lg" style="font-size:1.2vw;padding:1px 13px 1px 13px !important;font-family:century gothic;border-radius:17px;background:#25D366;border:none;" onclick="location.href='<?= base_url('hubungi') ?>'">booking</button>
</p></div>
<div class="col-lg-8"><div class="isiproduk"><?php echo "$rows[subdetail]"; ?></div> </div>
    </div>


    <div class="col-lg-10" style="margin-top:50px">
    <h4 style="font-size:2.0em;font-family:century gothic;color:#663390;font-weight:bold;">Rekomendasi treatment serupa</h4>
          <div class="row portfolio" style="height:123px !important;">
            <?php 

            $gambar =  $this->model_utama->view_where_ordering_limit('subkategori',array('subkategori.id_kategori' => $rows['id_kategori'],'subkategori.id_subkategori !=' => $this->uri->segment('3')),'nama_subkategori','DESC','0','4');
            foreach ($gambar->result_array() as $gbr){
            ?>
          <div class="col-lg-3 col-md-6 portfolio-item <?php echo $gbr['id_kategori'];?>">
          <a href="<?php echo base_url('kategori/detailsub/'.$gbr['id_subkategori'])?>">  <img src="<?php echo base_url('asset/foto_produk/');?><?php echo $gbr['subgambar_utama'];?>" class="img-responsive" alt=""></a>
            <div class="portfolio-info detailinfo">
              <h4><?php echo $gbr['nama_subkategori'];?></h4>
              <p>Rp. <?php echo number_format($gbr['subdeskripsi'],0,",",".");?></p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $gbr['nama_subkategori'];?>"><i class="bx bx-zoom-in"></i></a>
              <a href="<?php echo base_url('hubungi')?>" class="details-link" title="JOIN US"><i class="bx bx-phone-call" style="text-shadow:1px 6px 3px #ccc"></i></a>
            </div>
          </div>
<?php } ?>
    


   
          </div>
          <br><br>    <br><br>
        </div>

    </div>
  </div>
     

    </section>