 <section id="about" class="about">
 <div class="container" style="margin-top: 66px;">
   <div class="contentbg">

       <div class="section-title">
          <h2>Galeri Foto</h2>
     
        </div>
     
 		
 				  <div class="container-fluid" style="margin-top: -100px;">
        <div class="row no-gutters">
 			<?php
										$no = 1;
										  foreach ($detailalbum->result_array() as $h) {	
										  	if (trim($h['gbr_gallery'])==''){ $gbr_gallery = 'no-image.jpg'; }else{ $gbr_gallery = $h['gbr_gallery']; }
												echo "  <div class='col-lg-4 col-md-8'><small>$h[keterangan]</small>
														 <div class='gallery-item'>
														  <a href='".base_url()."asset/img_galeri/$gbr_gallery' class='venobox' data-gall='gallery-item'>
															<img class='img-fluid' style='width:100%' title='$h[jdl_gallery]' src='".base_url()."asset/img_galeri/$gbr_gallery' alt='$h[jdl_gallery]' data-jslghtbx='".base_url()."asset/img_galeri/$h[gbr_gallery]' data-jslghtbx-group='group3' data-jslghtbx-caption='$h[keterangan]' /><br>
															
															</a>
														</div>
														</div>
													  ";
												$no++;
											}
										?>
 				
 			</div>
</div>
</div>
										</div>
 	 </section>