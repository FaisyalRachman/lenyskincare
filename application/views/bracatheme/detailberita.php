 <section id="abut" class="about" style="padding:0px !important;">
<div id="cta" class="cta" style="background-image:url(<?php echo base_url('assets/img/lokasi_lenyskincare.png'); ?>);background-position: center;background-size: cover;">
 	
			 <div class="row">
			 <img class="responsive" src="<?= base_url('asset/foto_berita/').$rows['gambar']?>">
 			<div class="col-lg-12 icon-boxes flex-column justify-content-center" style="padding:1px 90px;">
				
 				<h2 style="font-size:1.8vw;font-family: Roboto, sans-serif !important;font-weight:bold"><b><?php echo $rows['judul']; ?></b></h2>
 				<p style="font-size:2vw;font-family: Roboto, sans-serif !important;"><?php echo $rows['isi_berita']; ?></p>

    <div class="social float-right"> <script language="javascript">
										document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + " ' target='_blank' class='custom-soc icon-text'><i class='ri-facebook-fill' style='font-size:20px'></i></a> <a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank' class='custom-soc icon-text'><i class='ri-twitter-fill' style='font-size:20px'></i></a> <a href='mailto:<?php echo email();?>' class='custom-soc icon-text'><i class='ri-mail-fill' style='font-size:20px'></i></a><a href='https://www.instagram.com/?url=" + document.URL + " ' target='_blank' class='custom-soc icon-text'><i class='ri-instagram-fill' style='font-size:20px'></i></a>");
										</script>
 		 
                 
                </div>
 			</div>
			
 		</div>
<br>
 		<div class="row">

 			<div class="col-xl-6 icon-boxes flex-column align-items-stretch justify-content-center" style="padding-left:50px;">
 				<?php

					$content = "<h3>&nbsp;&nbsp;Artikel Lainnya : </h3><ul>";
					$pisah_kata  = explode(",", $rows['tag']);
					$jml_katakan = (int)count($pisah_kata);
					$jml_kata = $jml_katakan - 1;
					$ambil_id = substr($rows['id_berita'], 0, 9);
					$cari = "SELECT * FROM berita WHERE (id_berita!='$ambil_id') and (";
					for ($i = 0; $i <= $jml_kata; $i++) {
						$cari .= "tag LIKE '%$pisah_kata[$i]%'";
						if ($i < $jml_kata) {
							$cari .= " OR ";
						}
					}
					$cari .= ") ORDER BY id_berita DESC LIMIT 5";
					$hasil  = $this->db->query($cari);
					foreach ($hasil->result_array() as $row) {

						$content .= "<li style='padding:3px'><a style='color:#2c4964' href='" . base_url() . "news/$row[judul_seo]''>$row[judul]</a><a href='#' class='h-comment'></a></li>";
					}
					$content .= "</ul>";

					if ($rows['youtube'] != '') {
						echo "<h4>Video Terkait:</h4>";
						if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $rows['youtube'], $match)) {
							echo "<iframe width='100%' height='350px' id='ytplayer' type='text/html'
                                                src='https://www.youtube.com/embed/" . $match[1] . "?rel=0&showinfo=1&color=white&iv_load_policy=3'
                                                frameborder='0' allowfullscreen></iframe><div class='garis'></div><br/>";
						}
					}


					echo "$content<hr>
											<div class='fb-like'  data-href='" . base_url() . "$rows[judul_seo]' 
												data-send='false'  data-width='600' data-show-faces='false'>
											</div> <br><br>";

				
					?>
 			</div>
 		</div>
	 </section>