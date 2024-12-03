<?php
$sosmed = $this->model_utama->view('identitas')->row_array();
?>
<section class="d-flex flex-column justify-content-center" style="border-bottom:none;padding-bottom:0px !important;padding-top:70px !important">

<video style="display: inline-block;width: 100%; height: 100vh;"  ref="video" playsinline="" class="col full" controlslist="download"  loop="true" autoplay="autoplay" controls muted>
      <source type="video/mp4" src="<?php echo base_url('asset/images/').$sosmed['favicon'] ?>">
        </video>

  </section><!-- End Hero -->
  <section id="about" class="about" style="padding:0px !important;border-bottom:none;">
   <?php include("slide.php"); ?>

   </section><!-- End About Us Section -->

    <!-- ======= Faq Section ======= -->
    <section id="faq" class="faq" style="height:440px !important;">
     

            
            <iframe src="<?php echo base_url();?>karir/visitlokasi" width="100%;" height="100%"></iframe>
            
          
           

 
    </section><!-- End Faq Section -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h2 style="font-family:Century Gothic;font-weight:500 !important;font-size:1.8em;color:#555">ARTIKEL</h2>
          <p style="font-family:Century Gothic;font-size:1.3em;">Temukan Tips & Informasi Menarik Seputar Kecantikan</p>
          <div class="row">
          <div class="col-lg-2">
</div>
          <div class="col-lg-8">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
             
            </div>
          </div>
        </div>
        <div class="text-center title">
        
          <div class="row">
          <?php 
            $gambar =  $this->model_utama->view_where_ordering_limit('berita',array('status' => 'Y'),'judul','DESC','0','4');
            foreach ($gambar->result_array() as $gbr){
              $isi_berita =(strip_tags($gbr['isi_berita'])); 
              $isi = substr($isi_berita,0,148); 
              $judul =(strip_tags($gbr['judul'])); 
              $jdl = substr($judul,0,80); 
            ?>
          <div class="col-lg-3">
        
          <p style="text-align:left!important;font-family:century gothic;color:#8B6FB9 !important;font-weight:bold;font-size:1.2em !important;"> <?php echo $jdl;?> <small style="font-size:0.6em !important;"><i>(<?php echo $gbr['tanggal'];?><?php echo $gbr['jam'];?>)</i></small></p>
              <p style="text-align:left;font-family:century gothic;font-size:1.0em;color:#888;"><img src="<?php echo base_url('asset/foto_berita/'); ?><?php echo $gbr['gambar'];?>" style="width:100%"><?php echo $isi;?>... <a href="<?php echo base_url('news/');?><?php echo $gbr['judul_seo'];?>"><span style="color:#776FB9" font-weight="bold">selengkapnya <i class="fa fa-newspaper"></i></span></a></p>
           
</div>
<?php } ?>

      </div>
    </section><!-- End Counts Section -->
    <!-- ======= Contact Section ======= -->
     <!-- ======= Services Section ======= -->
     <section id="portfolio" class="portfolio" style="padding-top:10px !important;background:#F1F2F2;">
      <div class="container">

        <div class="text-center section-title" style="padding-bottom:10px !important;">
          <h2 style="font-family:Century Gothic;font-size:1.8em;color:#555;font-weight:500 !important;">Rekomendasi Bulan Ini</h2>
         </div>

         <div class="col-lg-12" style="margin-top:3px">
          <div class="row portfolio-container">
            <?php 
            $gambar =  $this->model_utama->view_where_ordering_limit('subkategori',array('recomended'=>'Y'),'nama_subkategori','ASC',0,4);
            foreach ($gambar->result_array() as $gbr){
            ?>
          <div class="col-lg-6 col-lg-3 col-xs-6 g-0 portfolio-item <?php echo $gbr['id_kategori'];?>">
           <a href="<?php echo base_url('kategori/detailsub/'.$gbr['id_subkategori'])?>"> <img src="<?php echo base_url();?>asset/foto_produk/<?php echo $gbr['subgambar_utama'];?>" class="img-responsive" alt=""></a>
            <div class="portfolio-info">
              <h4><?php echo $gbr['nama_subkategori'];?></h4>
              <p><?php echo "Rp. " .number_format($gbr['subdeskripsi'],0,',','.');?></p>
              <a href="asset/foto_produk/<?php echo $gbr['subgambar_utama'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-zoom-in"></i></a>
              <a href="<?php echo base_url('hubungi');?>" class="details-link" title="JOIN US"><i class="bx bx-phone-call" style="text-shadow:1px 6px 3px #ccc"></i></a>
            </div>
          </div>
<?php } ?>
<?php 
            $gambar =  $this->model_utama->view_where_ordering_limit('subkategoriproduct',array('recomended'=>'Y'),'nama_subkategori','ASC',0,4);
            foreach ($gambar->result_array() as $gbr){
            ?>
          <div class="col-lg-3 col-md-6 portfolio-item <?php echo $gbr['id_kategori'];?>">
           <a href="<?php echo base_url('kategori/detailsubproduct/'.$gbr['id_subkategori'])?>"> <img src="<?php echo base_url();?>asset/foto_produk/<?php echo $gbr['subgambar_utama'];?>" class="img-responsive" alt=""></a>
            <div class="portfolio-info">
              <h4><?php echo $gbr['nama_subkategori'];?></h4>
              <p><?php echo "Rp. " .number_format($gbr['subdeskripsi'],0,',','.');?></p>
              <a href="asset/foto_produk/<?php echo $gbr['subgambar_utama'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-zoom-in"></i></a>
              <a href="<?php echo base_url('hubungi');?>" class="details-link" title="JOIN US"><i class="bx bx-phone-call" style="text-shadow:1px 6px 3px #ccc"></i></a>
            </div>
          </div>
<?php } ?>
          </div>
        </div>
<p></p><p></p><p></p><p></p>
<div class="row">
<div class="col-lg-4 ">
</div>
          <div class="col-lg-4 d-flex justify-content-center align-items-center">
          <a href="<?php echo base_url('hubungi_klinik_kecantikan_tangerang');?>" class="details-link" title="JOIN US"><label style="font-weight:100 !important;font-family:Century Gothic;font-size:1.5em;background:#fff;border:1px #c9c9c9 solid;box-shadow:1px 0px 3px #999; margin-top:200px;padding:4px 23px 4px 23px;border-radius:32px;color:#676;" class="text-center">Gratis Konsultasi</label></a>
</div>    
<div class="col-lg-4">
</div>       
<p></p><p></p>
      

      </div>
    </section><!-- End Services Section -->
    <section id="contactus" class="contactus">
      <div class="container">

        <div class="section-title text-center">
          </div>
        <div class="row">
        <div class="col-lg-2">
            </div>
        <div class="col-lg-2">
        <img src="<?php echo base_url(); ?>/assets/img/klinikkecantikan_tangerang.png" class="hplenys img-responsive" alt="">
        </div>
          <div class="col-lg-8"> <h4 class="project" style="padding-top:23px !important;margin:0 !important;font-family:Century Gothic !important;font-weight:500 !important;font-size:1.8em !important;color:#555;text-align:left;">Semakin dekat dengan Leny!</h4>
        <br>
          <p style="font-family:century gothic !important;font-size:1.1em;text-align:left;">Kami siap melayani dan membantu dengan senang hati atas pertanyaan, permintaan serta</p>
          <p style="font-family:century gothic !important;font-size:1.1em; text-align:left;">reservasi untuk treatment anda di Leny Skincare.</p> 
        <div class="row">
          <div class="col-lg-1">
          <p style="font-family:century gothic !important;font-size:1.0em;"><img src="<?php echo base_url(); ?>/assets/img/wa_lenyskincare.png" class="img-responsive" alt=""></p>
          </div>
          <div class="col-lg-3" style="padding:0px !important;">
          <p style="font-family:century gothic !important;font-size:1.0em;text-align:left;"><?= $no_telp ?></p>
          </div>
          <div class="col-lg-1"><img src="<?php echo base_url(); ?>/assets/img/email_lenyskincare.png" class="img-responsive" alt=""></p> 
             </div>
             <div class="col-lg-3" style="padding:0px !important;">
          <p style="font-family:century gothic !important;font-size:1.0em;text-align:left;"><?= $email ?></p>
          </div>
           </div>
      </div>

        
              </div>
              <br> <br> <br>
              <div class="row">
    <div class="col text-center">
     
    </div>
  </div>
      </div>

    </section><!-- End Services Section -->


   