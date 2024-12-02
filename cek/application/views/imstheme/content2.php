<?php
						$cekslide = $this->model_utama->view_single('berita',array('headline' => 'Y','status' => 'Y'),'id_berita','DESC');
						if ($cekslide->num_rows() > 0){
						  include "slide.php";
						}
					?>	
				<section id="appointment" class="appointment section-bg" style="padding-bottom:10px; ">
      <div class="container">

        <div class="section-title">
          <h3>Selamat Datang di Perguruan Tinggi Farmasi Terbaik di Kaltara!</h3>
         <p>Kampus Bebas Asap Rokok, Ramah Lingkungan dan Tertib lalu lintas. <br>
                Poltek Kaltara memiliki Misi untuk Menyelenggarakan Sistem Pendidikan Vokasi yang berkualitas dengan menghasilkan lulusan yang profesional. Terbaik sejak tahun 2000 berdasarkan SK Pemeringkatan Perguruan Tinggi Kementerian Riset Teknologi dan Pendidikan Tinggi.</p>
        </div>
 </div>
  </section>
 
   	<section id="appointment" class="penerimaan section-bg" style="padding-bottom:10px; ">
      <div class="container">

        <div class="steps-block steps-block-red margin-bottom-40 text-center text-md-right pt-3 pt-md-0">
            <div class="container">
                <h2 class="text-center">Penerimaan Mahasiswa Baru</h2>
                <div class="row">
                    <div class="col-md-2 steps-block-col">
                        <div class="img-brosur text-center">
                                                            <a href="#" title="Download Brosur" download=""><img src="https://pcr.ac.id/assets/brosur/small_gambarbrosur20201005102344.jpg" alt="Brosur PMB POLTEK KALTARA" itemprop="image"></a>
                                                    </div>
                        <span>&nbsp;</span>
                    </div>
          <div class="col-lg-2 mt-2 mt-lg-0 steps-block-col">
                  <div class="col-lg-2 d-flex align-items-start text-center">
            <div class="member d-flex align-items-start social-links3">
                   <div class="pic"><a href="#">
             <i class="bx bxs-group margin-right-10"></i></a></div>
                   </div> <div>
                <h3>Gabung Poltek Kaltara</h3>
              
          </div> </div> <span>&nbsp;</span>
</div>
      <div class="col-lg-2 mt-2 mt-lg-0 steps-block-col">
                  <div class="col-lg-2 d-flex align-items-start text-center">
            <div class="member d-flex align-items-start social-links3">
                   <div class="pic"><a href="#"><i class="bx bxs-map margin-right-10"></i> </a></div>
                   </div> <div class="member-info">
                <h3>Lokasi Kampus</h3> 
               </div>
  </div><span>&nbsp;</span>
          </div>

          <div class="col-lg-2 mt-2 mt-lg-0 steps-block-col">
                  <div class="col-lg-2 d-flex">
            <div class="member d-flex align-items-start social-links3">
               <div class="pic"><a href="#"><i class="bx bx-message-rounded-dots margin-right-10"></i> </a></div>
                   </div> <div class="member-info">
                <h3>Konsultasi Online</h3>
               </div>
      </div><span>&nbsp;</span>
          </div>

    <div class="col-lg-2 mt-2 mt-lg-0 steps-block-col">
                  <div class="col-lg-2 d-flex align-items-start">
            <div class="member d-flex align-items-start social-links3">
               <div class="pic"><a href="#"><i class="bx bx-phone margin-right-10"></i> </a></div>
                   </div> <div class="member-info">
                <h3>Layanan PMB</h3>
               </div>
</div><span>&nbsp;</span>
          </div>

   <div class="col-lg-2 mt-2 mt-lg-0 steps-block-col">
                  <div class="col-lg-2 d-flex align-items-start">
            <div class="member d-flex align-items-start social-links3">
               <div class="pic"><a href="#"><i class="bx bx-envelope margin-right-10"></i></a></div>
                   </div> <div class="member-info">
                <h3>Kirim Pesan</h3>
               </div>
          </div>
                </div>



            </div>
        </div>
 </div>
  </section>
  
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Artikel <small>informasi Politeknik Kaltara</small></h2>
        
        </div>

        <div class="row">
        				<?php 
							$no = 1;
							$hot = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.aktif' => 'N'),'tanggal','DESC',0,6);
                			foreach ($hot->result_array() as $row) {	
							$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $row['id_berita']))->num_rows();
							$tgl = tgl_indo($row['tanggal']);
							$isi_berita =(strip_tags($row['isi_berita'])); 
							  $isi = substr($isi_berita,0,170); 
							  $isi = substr($isi_berita,0,strrpos($isi," ")); 
							  $judul = $row['judul']; 
							
							  ?>
         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="<?php echo base_url(); ?>asset/foto_berita/<?php echo $row['gambar']; ?>" alt="" class="img-fluid">
              <h3 style="text-align:left;"><a href="<?php echo base_url().$row[judul_seo]; ?>" style="color:#004488;font-weight:bold"><?= $judul ?>.</a></h3>
              <p style="text-align: left;"><?= $isi ?></p>
            </div>
          </div>

<?php } ?>

        </div>

      </div>
    </section>
	
      
     <section id="services" class="services">
      <div class="container">
 <div class="section-title">
          <h2>Pengumuman & Agenda</h2>
        
        </div>
        <div class="row">
          <div class="col-xl-6 justify-content-center align-items-stretch">
          		<?php 
														
					   $content = "<h4>Pengumuman <i class='icofont-megaphone icofont-1x'></i> <hr></h4><ul>";
												$pisah_kata  = explode(",",$rows['tag']);
												$jml_katakan = (integer)count($pisah_kata);
												$jml_kata = $jml_katakan-1; 
												$ambil_id = substr(657,0,4);
												$sekilas = $this->model_utama->view_ordering_limit('sekilasinfo','id_sekilas','DESC',0,2);
			foreach ($sekilas->result_array() as $row) {	
											
													$content .= "<li style='padding:3px'><i class='bx bx-detail'></i> <a style='color:#2c4964' href='".base_url()."pengumuman/detail/$row[judul_seo]''>$row[judul]</a><a href='#' class='h-comment'></a></li>";
												}      
												$content .= "</ul>";

										
									
		
									echo "$content
											<div class='fb-like'  data-href='".base_url()."$rows[judul_seo]' 
												data-send='false'  data-width='600' data-show-faces='false'>
											</div> <br><br>"; 

									
								?>
          </div>

         <div class="col-xl-6 justify-content-center align-items-stretch">
          <?php 
												
										$content = "<h4>Agenda <i class='icofont-calendar icofont-1x'></i><hr> </h4><ul>";
										$agenda= $this->model_utama->view_join('agenda','users','username','id_agenda','DESC',$dari,$config['per_page']);
												 foreach ($agenda->result_array() as $r) {	
												  $tgl_posting = tgl_indo($r['tgl_posting']);
												  $tgl_mulai   = tgl_indo($r['tgl_mulai']);
												  $tgl_selesai = tgl_indo($r['tgl_selesai']);
												  $baca = $r['dibaca']+1;
												  $judull = substr($r['tema'],0,33); 
												  $isi_agenda =(strip_tags($r['isi_agenda'])); 
												  $isi = substr($isi_agenda,0,280); 
												  $isi = substr($isi_agenda,0,strrpos($isi," "));
												  
													$content .= "<li style='padding:3px'><i class='bx bx-calendar'></i> <a style='color:#2c4964' href='".base_url()."agenda/detail/$r[tema_seo]'><small>$r[tgl_mulai] s/d $r[tgl_selesai]</small> : $r[tema]</a><a href='#' class='h-comment'></a></li>";
												}      
												$content .= "</ul>";

										
									
		
									echo "$content
											<div class='fb-like'  data-href='".base_url()."$rows[judul_seo]' 
												data-send='false'  data-width='600' data-show-faces='false'>
											</div> <br><br>"; 

								?>

                 </div>
        </div>

      </div>

    </section>
     <section id="testimonials3" class="testimonials3">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 justify-content-center align-items-stretch">
          		<h4>Video Profil </h4>
          		<iframe width='100%' height='250px' id='ytplayer' type='text/html'
                                                src='https://www.youtube.com/embed/".$match[1]."?rel=0&showinfo=1&color=white&iv_load_policy=3'
                                                frameborder='0' allowfullscreen></iframe>
          </div>

         <div class="col-xl-8 justify-content-center align-items-stretch">
         	<h4>Kata Alumni <small>#mapoltekar</small></h4>
        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="asset/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <small>Ceo &amp; Founder</small>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, .
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="asset/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <small>Designer</small>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>

                 </div>
        </div>

      </div>

    </section>
  
    <section id="testimonials2" class="testimonials2">
      <div class="container">
 <div class="section-title">
          <h2>Mitra Kerjasama</h2>
        
        </div>
            <div class="custom2 owl-carousel owl-theme">
            <div class="item">
              <img src="asset/img/gallery/small_pcr_media20170302074015.jpg" class="testimonial-img" alt="" class="testimonial-img">
            </div>
            <div class="item">
             <img src="asset/img/gallery/small_pcr_media20170302074125.jpg" class="testimonial-img" alt="" class="testimonial-img">
            </div>
            <div class="item">
             <img src="asset/img/gallery/small_pcr_media20170302074137.jpg" class="testimonial-img" alt="" class="testimonial-img">
            </div>
            <div class="item">
             <img src="asset/img/gallery/small_pcr_media20170302074152.jpg" class="testimonial-img" alt="" class="testimonial-img">
            </div>
            <div class="item">
             <img src="asset/img/gallery/small_pcr_media20170302074305.jpg" class="testimonial-img" alt="" class="testimonial-img">
            </div>
            <div class="item">
             <img src="asset/img/gallery/small_pcr_media20170302074343.jpg" class="testimonial-img" alt="" class="testimonial-img">
            </div>
<div class="item">
             <img src="asset/img/gallery/small_pcr_media20170505022836.jpg" class="testimonial-img" alt="" class="testimonial-img">
            </div>
<div class="item">
             <img src="asset/img/gallery/small_pcr_media20190704115044.png" class="testimonial-img" alt="" class="testimonial-img">
            </div>
      </div>
    </section>