<section id="contact" class="contact" style="margin-top:18px;">
      <div class="container">
      <div class="contentbg">
 <?php
      $sosmed = $this->model_utama->view('identitas')->row_array();
      $pecahd = explode(",", $sosmed['facebook']);
    ?>
      <div class="container">
 
 <div class="row">

 
   <div class="col-lg-5 usr" style="padding-left:50px">
   <br><br><br><br>
 
<div class="card-body login-card-body">
<script type="text/javascript">
	function validasireg(form){
		if (form.a.value == ""){ alert("Anda belum mengisikan Username"); form.a.focus(); return (false); }							
		if (form.b.value == ""){ alert("Anda belum mengisikan Password"); form.b.focus(); return (false); }									
		if (form.c.value == ""){ alert("Anda belum menuliskan Nama Lengkap"); form.c.focus(); return (false); }
		if (form.d.value == ""){ alert("Anda belum menuliskan Email"); form.d.focus(); return (false); }
		if (form.e.value == ""){ alert("Anda belum menuliskan No Telpon"); form.e.focus(); return (false); }																		
	  return (true);
	}
</script>	
<h3 class="login-box-msg">Sign Up.</h3>
<p class="logsmall">Welcome New Parent!</p>
<?php echo $this->session->flashdata('message'); ?>
								<form action="<?php echo base_url(); ?>kontributor/pendaftaran" method="POST" enctype='multipart/form-data' onSubmit="return validasireg(this)">
 <br>
 <div class="field mb-3">
  <label class="field__label" for="form-name">Username</label>
<input class="field__input" type="text" name='a' required id="form-name">
 </div>
 <div class="field mb-3">
 <label class="field__label" for="form-name">Password</label>
   <input type="password" class="field__input" name='b' required id="form-name">
  </div>
  <div class="field mb-3">
  <label class="field__label" for="form-name">Email Address/Username</label>
<input class="field__input" type="text" name='d' required id="form-name">
 </div>
 <div class="field mb-3">
 <label class="field__label" for="form-name">Number Phone</label>
   <input type="text" class="field__input" name='e' required id="form-name">
  </div>
 
 <div class="row">
   <!-- /.col -->
   <div class="col-6">
   <button type="submit" name='submit' class="btn btn-info btn-block btn-lg" style="border:none;background-color:#D1B06B;color:#fff;">Sign Up</button>
  
   </div>
   <div class="col-12"><p style="font-size:0.6875rem;padding-top:10px;opacity:0.5;text-align:left;">By signing up, your agree to <b>Term and Conditions</b> </p> </div>
   <!-- /.col -->
 </div>
</form>
</div>
<!-- /.login-card-body -->
</form>
       </div>
   
   <div class="col-lg-7" style="text-align:center;"><br><br><br><br><br><br>
   <img  src="<?php echo base_url(); ?>asset/images/signup.png" class="img-fluid">
    
   </div>
   
   </div>
   </div>
     
    <br>
       
        </div>
      </div>
    </section>
  