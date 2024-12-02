<section id="departments" class="departments" style="margin-top:110px !important;">
      <div class="container">

       <h3><?php echo "<b>$rows[judul]</b>"; ?></h3>
         
       

        <div class="row">
          <div class="col-lg-4">
          		<?php 
							
										echo "<img style='width:100%' src='".base_url()."asset/foto_statis/$rows[gambar]'>";
								
								?>
          </div>
          <div class="col-lg-8" style="text-align:justify !important;">
         
       
             
              
                       <?php echo $rows[isi_halaman]; ?>
                
          
          
          </div>
        </div>

      </div>
    </section>