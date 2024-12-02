<section id="services" class="services">
 	<div class="container" style="margin-top: 120px;">

 		<div class="row">
 		
 				<?php
						if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $rows['youtube'], $match)) {
                            echo "<iframe width='100%' height='500px' src='https://www.youtube.com/embed/".$match[1]."' frameborder='0' allowfullscreen></iframe>";
                        } 	
					?>
					
					 
 				<small><span class="font-italic">By <b> <?php echo "$rows[nama_lengkap]"; ?> </b> </span>
 					<span class="meta">&nbsp;<?php echo tgl_indo($rows['tanggal']) . ", $rows[jam] WIB"; ?>
 						<span class="tag" style="background-color: #2a8ece;"><a href="<?php echo base_url() . "kategori/detail/$rows[kategori_seo]"; ?>"></a></span>
 					</span></small>
 		
     </div><div class="social float-right"><a href="#appointment" class="appointment-btn scrollto">Kembali</a>
     <script language="javascript">
										document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + " ' target='_blank' class='custom-soc icon-text'><i class='ri-facebook-fill' style='font-size:20px'></i></a> <a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank' class='custom-soc icon-text'><i class='ri-twitter-fill' style='font-size:20px'></i></a> <a href='mailto:name@email.com' class='custom-soc icon-text'><i class='ri-mail-fill' style='font-size:20px'></i></a><a href='https://www.instagram.com/?url=" + document.URL + " ' target='_blank' class='custom-soc icon-text'><i class='ri-instagram-fill' style='font-size:20px'></i></a>");
										</script>
 		 
                 
                </div>
    
  
 		

 	</div>
	
 </section>