<section id="contact" class="contact" style="margin-top:18px;">
      <div class="container">
      <div class="contentbg">
 <?php
      $sosmed = $this->model_utama->view('identitas')->row_array();
      $pecahd = explode(",", $sosmed['facebook']);
    ?>
     
     
      <div class="container">
 
        <div class="row">
       
        
          <div class="col-lg-5 usr" style="padding-left:50px;">
          <br><br><br><br>
        
    <div class="card-body login-card-body">
      
      <h3 class="login-box-msg">Get in touch With us.</h3>
      <p class="logsmall">Welcome back. Please login to your account.</p>
        <?php 
            
            echo form_open('administrator/index'); 
        ?>
        <br>
        <div class="field mb-3">
         <label class="field__label" for="form-name">Email Address/Username</label>
  <input class="field__input" type="text" name='a' required id="form-name">
        </div>
        <div class="field mb-3">
        <label class="field__label" for="form-name">Password</label>
          <input type="password" class="field__input" name='b' required id="form-name">
         </div>
         <div class="row">
         <div class="col-6">
         <label class="setcookie" for="setcookie" style="font-size:0.625rem;vertical-align: middle;opacity:0.5;"><input type="checkbox" name="setcookie" value="true" id="setcookie" style="font-size:0.625rem;vertical-align: middle;"> Remember me</label>
         </div>
         <div class="col-5 float-right text-right">
         <label class="setcookie" for="setcookie" style="font-size:0.625rem;vertical-align: middle;opacity:0.5;"><a href="<?= base_url()."userlogin/forgotpassword";?>">Forgot Password</a></label>
         </div>
         </div>
  
        <div class="row">
          <div class="col-5">
           
            <button type="submit" name='submit' class="btn btn-info btn-block btn-lg" style="border:none;background-color:#D1B06B;color:#fff;">Login</button>
         
          </div>
          <!-- /.col -->
          <div class="col-5">
          <button type="button" name='submit' class="btn btn-outline-dark btn-block btn-lg" onclick="daftar()">Sign Up</button>
         
          </div>
          <div class="col-12"><p style="font-size:0.625rem;padding-top:10px;opacity:0.5;text-align:center;">By signing up, your agree to <b>Term and Conditions</b> </p> </div>
          <!-- /.col -->
        </div>
        <div><?php echo $this->session->flashdata('message'); ?></div>
      </form>
    </div>
    <!-- /.login-card-body -->

              </div>
          
          <div class="col-lg-7" style="text-align:center;">
          <img  src="<?php echo base_url(); ?>asset/images/userlogin.png" class="img-fluid">
           
          </div>
          
          </div>
          </div>
        </div>
       
        </div>
      </div>
    </section>
    <script src="<?php echo base_url(); ?>/asset/admin_mu/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/asset/admin_mu/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/asset/admin_mu/dist/js/adminlte.min.js"></script>
    <script>
    function daftar()
    {
        window.location='<?php echo base_url('kontributor');?>';
    }
    </script>
  