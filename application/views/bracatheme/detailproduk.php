<section id="services" class="services" style="margin-top:16px;">
  <div class="container">
    <div class="contentbg">
 		<div class="row">

         <div class="col-lg-5"><br><br><br>
         <img class="img-fluid" src="<?php echo base_url() . 'asset/foto_produk/' . $rows['gambar']; ?>" alt="<?php echo $rows['judul']; ?>" />
         <div class="row">
         <div class="col-lg-6"><p style="text-align:center;line-height: 1.6 !important;"><small><b><?php echo $rows['judul']; ?></b></small></p>
</div>
<div class="col-lg-6" style="padding:0px;"><p style="text-align:center;line-height: 1.6 !important;"> <script language="javascript">
										document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + " ' target='_blank' class='custom-soc icon-text'><i class='ri-facebook-fill' style='font-size:20px'></i></a> <a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank' class='custom-soc icon-text'><i class='ri-twitter-fill' style='font-size:20px'></i></a> <a href='mailto:info@poltekkaltara.ac.id' class='custom-soc icon-text'><i class='ri-mail-fill' style='font-size:20px'></i></a><a href='https://www.instagram.com/?url=" + document.URL + " ' target='_blank' class='custom-soc icon-text'><i class='ri-instagram-fill' style='font-size:20px'></i></a>");
										</script></p>
 		     
</div>
<div class="col-lg-1 d-flex align-items-center justify-content-center" style="padding:2px;"></div>
         <div class="col-lg-4 d-flex align-items-center justify-content-center" style="padding:2px;"><p style="text-align:center;line-height: 1.6 !important;"><small>Download Product Datasheet :</small></p>
</div>
<div class="col-lg-6 d-flex align-items-center justify-content-center" style="padding:2px;"><p style="text-align:center;word-wrap:break-word !important;line-height: 1.6 !important;"><small><a href="<?php echo base_url() ."asset/foto_produk/".$rows['file']; ?>"><img src="<?=base_url()?>asset/images/dwnload.png"  style="width:40%"></a></small>
</p>       
</div>
</div>
         </div>
          <div class="col-lg-6" style="text-align:justify !important;margin:8px;">
        <br><br><br><h3>Product Summary :</h3>
          <p><?php echo $rows['isi_produk']; ?></p>
          
          </div>



         

 		</div>
     <br><br>
</div>
</div>
</section>