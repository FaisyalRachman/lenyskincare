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
      
      <h3 class="login-box-msg">Change Password IMS Account.</h3>
      <p class="logsmall">Please enter you new password.</p>
        <?php 
              echo form_open('userlogin/reset_password/token/' . $token); 
        ?>
      
        <br>
       
        <div class="field mb-3">
         <label class="field__label" for="form-name"> New Password</label>
  <input class="field__input" type="text" name='password' value="<?php echo set_value('password'); ?>" required id="form-name">
        </div>
        <div class="field mb-3">
         <label class="field__label" for="form-name">Confirm Password</label>
  <input class="field__input" type="text" name='passconf' value="<?php echo set_value('passconf'); ?>" required id="form-name">
        </div>
            <div class="row">
          <div class="col-11 text-center">
           
            <button type="submit" name='submit' class="btn btn-info btn-block btn-lg" style="border:none;background-color:#D1B06B;color:#fff;">Reset Password!</button>
       
          </div>
        
          <!-- /.col -->
        </div>
  
      
      </form>
      <br>
      <div class="col-11 text-center"><?php echo $this->session->flashdata('sukses'); ?></div>
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
  