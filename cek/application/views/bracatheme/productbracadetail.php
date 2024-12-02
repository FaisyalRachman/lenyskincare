<section id="tripdetail" class="tripdetail">
      <div class="container">

      <div class="section-title text-center">
          <h1><?php echo $namaproduk;?></h1>
           </div>
        <div class="section-title text-center">
       
      
       <div class="row mt-0">
       <div class="col-lg-1" style="padding:0px !important;">
          </div>
        <div class="col-lg-1" style="padding:0px !important;">
        <?php 
           foreach ($productbracatour->result_array() as $r) {	
                             // $total_komentar = $this->model_utama->view_where('komentar',array('id_produk' => $r['id_produk']))->num_rows();      
      ?>
             <span class="a"><?php  echo $r['judul']; ?></span>
        <div>
         <img src="<?php echo base_url('assets/img/flowtrip.png'); ?>" class="img-fluid" style="margin-left:32px;margin-top:0px;width:40%;">
             </div>

 <?php } ?>
</div>
     <div class="col-lg-6" style="padding:0px !important;text-align:left;margin-top:60px">  <?php 
           foreach ($productbracatour->result_array() as $r) {	
                             // $total_komentar = $this->model_utama->view_where('komentar',array('id_produk' => $r['id_produk']))->num_rows();      
      ?>
    <div><h4 style="font-weight:600"><?php  echo $r['sub_judul']; ?></h4></div>
    <div style="height:60px;"> <?php  echo $r['isi_berita']; ?></div>
<br><br><br>
    <?php } ?>
   </div>
   <div class="col-lg-1" style="padding:0px !important;"></div>
     <div class="col-lg-1" style="padding:0px !important;">
     <div class="countday"> <button class="btn cst"><?php  echo $count; ?></button></div>
     </div>
     <div class="col-lg-1" style="padding:0px !important;"><div class="countdays">Days</div>
          </div>
     </div>
        </div>

      </div>

    </section><!-- End Services Section -->
 