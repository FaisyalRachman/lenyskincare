 <?php
	$tgl_posting   = tgl_indo($rows['tgl_posting']);
	$tgl_mulai   = tgl_indo($rows['tgl_mulai']);
	$jam   = $rows['jam'];
    $tempat   = $rows['tempat'];
	$tgl_selesai = tgl_indo($rows['tgl_selesai']);
	$isi_agenda=nl2br($rows['isi_agenda']);
	$baca = $rows['dibaca']+1;
?>
 <section id="about" class="about">
      <div class="container" style="margin-top:110px;">

        <div class="row">
          <div class="col-xl-6 d-flex justify-content-center align-items-stretch">
           <img style="width:100%" src="<?php echo base_url().'asset/foto_agenda/'.$rows['gambar'];?>" alt="<?php echo $rows[tema];?>" />
          </div>

          <div class="col-xl-6 icon-boxes flex-column align-items-stretch justify-content-center">
            <h2><?php echo $rows[judul];?></h2>
            <p><?php echo $rows[info];?></p>

                 </div>
        </div>

      </div>
       <div class="row">
          <div class="col-xl-6 d-flex justify-content-center align-items-stretch">
			<span class="font-italic"> Pengumuman <?php echo tgl_indo($rows['tgl_posting']); ?>
					<span class="tag" style="background-color: #2a8ece;"><a href="<?php echo base_url()."kategori/detail/$rows[kategori_seo]"; ?>"></a></span>
				</span>
			</div>
			
						</div>
    </section>