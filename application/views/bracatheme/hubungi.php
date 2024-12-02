					<style>
            .contactus{
              display:none !important; 
            }
            </style>
          <section id="contact" class="contact" style="margin-top:90px;">
         <div class="row">
         <div class="col-lg-12">
          <div class="text-center title">
          <h2 style="font-family:verdana !important;font-size:2.0em;color:#8B6FB9;"><b>Hubungi Kami</b></h2>
          <p style="text-align:center !important;" ><img src="<?php echo base_url('assets/img/karir_lenyskincare_garis.png'); ?>"></p>
      </div>
      </div>
      </div>
      <div class="container">
      <div class="contentbg">
 <?php
      $sosmed = $this->model_utama->view('identitas')->row_array();
      $pecahd = explode(",", $sosmed['facebook']);
    ?>
     
     
      <div class="container">
 
        <div class="row mt-5">

          <div class="col-lg-6" style="padding:0px !important;">
          <img  src="<?php echo base_url(); ?>assets/img/bgdetail/Klinik-Kecantikan-Tangerang-Hubungi-Kami.jpg" class="img-responsive gbrhub">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0">
            <br>  <br> 
<h4>Hubungi Admin</h4>
<div class="col-sm-auto footer-contact">
<div class="social-links">
<form action="<?php echo base_url(); ?>hubungi/kirim" method="POST">
  <div class="row">
   <div class="col-lg-5">
   <a href="https://api.whatsapp.com/send?phone=<?php echo no_telp(); ?>&text=Hi%21%20saya tertarik untik treatment di Leny Skincare. Mohon informasi lebih lanjutnya ya. Terima Kasih :)." target="_blank"><img src="<?php echo base_url(); ?>assets/img/hubungiadmin_lenyskincare.png" class="img-responsive admhub" width="240px"></a>
 </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-lg-12">
                    <div class="box">
  <select name="d" id="replyNumber">
    <option value="" selected>Pilih Admin Cabang</option>
  <?php 
            $gambar =  $this->model_utama->view('mitra');
            foreach ($gambar->result_array() as $gbr){
            ?>
            <option value="<?php echo $gbr['number'];?>"><?php echo $gbr['source'];?> : <?php echo $gbr['judul'];?></option>
             <?php }?>
   
     </select>

</div>
                  </div>
          </div>
                  
            <div class="row">
                  <div class="col-lg-1"><a href="<?php echo $pecahd[1]; ?>" class="twitter"></a> 
                        
          </div>
         
            </div>
            <div class="row">
                  <div class="col-lg-1"><a href="<?php echo $pecahd[1]; ?>" class="twitter"></a> 
                        
          </div>
         
            </div>
      
       
    </div>
    <br>
       <p style="font-weight:bold;font-size:1.5em;color:#8B6FB9;">
           Hubungi Manajemen Leny Skin Care</span></strong><br>
       
        
              </p>
                  <p>
      
         <?php echo $this->session->flashdata('message'); ?>
    </p>
     </div>
           
              <div class="form-row">
                <div class="form-group">
                  <label>Nama *</label>
                  <input type="text" name="a" class="form-control" id="c_name" placeholder="Isi nama lengkap Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                <label>Handphone *</label>
                  <input type="text" class="form-control" name="b" id="c_email" placeholder="081x xxxx xxxx" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
              <label>Email *</label>
                <input type="email" class="form-control" name="c" id="c_message" placeholder="alamatemail@gmail.com *" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
              <label>Pesan *</label>
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Tuliskan pesan Anda!"></textarea>
                <div class="validate"></div>
              </div>
              	<p class="contact-form-message">
														<label for="c_message">
														<?php echo $image; ?><br></label>
														<input name='security_code' maxlength=5 type="text" class="required form-control" placeholder="Masukkkan Kode">
													</p>
             
              <div class="float-left"><input type="submit" name="submit" class="btn btn-primary gold" style="font-weight:100 !important;font-family:Century Gothic;font-size:1.0em;background:#8B6FB9;border:1px #8B6FB9 solid;text-shadow:none !important;box-shadow:1px 0px 3px #ccc;padding:4px 23px 4px 23px;border-radius:32px;color:#fff;" value="Kirim Pesan" onclick="return confirm('Pesan anda ini akan kami balas melalui email ?')"/></div>
            </form>

          </div>
          <div class="col-lg-1">
           
          </div>
          </div>
        </div>
       
        </div>
      </div>
    </section>
  