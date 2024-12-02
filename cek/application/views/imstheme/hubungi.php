						 <section id="contact" class="contact" style="margin-top:148px;">
           
      <div class="container">
      <div class="contentbg">
      <div class="text-center title">
          <h2 style="font-family:Impact !important;font-size:2.9em;color:#663390;">Treatment Promo</h2>
      </div>
 <?php
      $sosmed = $this->model_utama->view('identitas')->row_array();
      $pecahd = explode(",", $sosmed['facebook']);
    ?>
     
     
      <div class="container">
 
        <div class="row mt-5">

          <div class="col-lg-6" style="padding:0px !important;">
          <img  src="<?php echo base_url(); ?>asset/images/meet_us.png" class="img-fluid">
          </div>

          <div class="col-lg-5 mt-5 mt-lg-0">
            <br>  <br> 
<h1>Meet Us</h1>
<div class="col-sm-auto footer-contact">
<div class="social-links">
  <div class="row">
<div class="col-lg-1"><a href="<?php echo $pecahd[1]; ?>" class="twitter"><i class="icofont-email" style="font-size:45px;color:#0C152A;"></i></a>       
          </div>
          <div class="col-lg-3" style="margin-left:20px;"> <?php echo $sosmed['email']; ?>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-lg-1"><a href="<?php echo $pecahd[1]; ?>" class="twitter"><i class="icofont-headphone-alt-2" style="font-size:45px;color:#0C152A;"></i></a>       
          </div>
          <div class="col-lg-3" style="margin-left:20px;"> <?php echo $sosmed['no_telp']; ?>
                  </div>
            </div>
     
      
       
    </div>
       <p>
           Copyright &copy; 2021 <strong><span>PT.Integra Mitra Solusi</span></strong><br>
         <?php echo $sosmed['rekening']; ?>
        
              </p>
                  <p>
         <b>Commercial Request</b>
         <?php echo $this->session->flashdata('message'); ?>
    </p>
     </div>
           <form action="<?php echo base_url(); ?>hubungi/kirim" method="POST">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="a" class="form-control" id="c_name" placeholder="Nama *" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="b" id="c_email" placeholder="Kontak *" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="c" id="c_message" placeholder="Perusahaan *" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pertanyaan ditujukan untuk kami *"></textarea>
                <div class="validate"></div>
              </div>
              	<p class="contact-form-message">
														<label for="c_message">
														<?php echo $image; ?><br></label>
														<input name='security_code' maxlength=5 type="text" class="required" placeholder="Masukkkan Kode">
													</p>
             
              <div class="text-center"><input type="submit" name="submit" class="btn btn-primary gold" style="border:none;" value="Kirim" onclick="return confirm('Pesan anda ini akan kami balas melalui email ?')"/></div>
            </form>

          </div>
          <div class="col-lg-1">
           
          </div>
          </div>
        </div>
       
        </div>
      </div>
    </section>
  