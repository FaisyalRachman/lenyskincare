<section id="trip" class="trip" style="background:#C5BEDD">
      <div class="container">

   
        <div class="section-title text-center">
          <h1 style="color:#333333;font-weight:600;font-size:3vw;">OUR TRIP</h1>
           </div>
        <div class="row text-center">
          <div class="col-lg-2 text-center">
     
          </div>

          <div class="col-lg-8">
          <div class="container">
  <div class="row g-2">
  <?php
   foreach ($katbracatour as $key => $row) {
    if($key == 0 || $key == 1 || $key == 4 || $key == 5 || $key == 8 || $key == 9 || $key == 12 || $key == 13 || $key == 16 || $key == 17) {
        $warna = 'style="background-color:#F07C3F;border:none !important;color:white;font-size:2.5vw;font-weight:bold;a:"';
        }
        else {
            $warna = 'style="background-color:#FFFFFF;border:none !important;color:black;font-size:2.5vw;font-weight:bold;"';
    
        }  
    ?>
    <div class="col-6" <?php echo $ok++; ?>>
    <a href="<?php echo base_url('product/detail/').$row->id_kategori; ?>"><div class="p-3 border" <?php echo $warna; ?>><?php echo $row->nama_kategori; ?></div></a>
    </div>
   
    <?php } ?>
  </div>
</div>
        </div>
              <div class="col-lg-2 text-center">
         
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->