<section id="cta" class="cta" style="height:100vh;margin-top:0px !important;padding:0px !important;border-bottom:none;background-image:url(<?php echo base_url('assets/img/lokasi_lenyskincare.png'); ?>);background-position: center;background-size: cover;">
      <div class="container">
      <div class="contentbg">
 <?php
      $sosmed = $this->model_utama->view('identitas')->row_array();
      $pecahd = explode(",", $sosmed['facebook']);
    ?>
     
     
      <div class="container">
 
        <div class="row">
        <div class="col-lg-4">
</div>
        
          <div class="col-lg-4">
          <br><br><br><br>
        
    <div class="card-body login-card-body">
    <div class="col-xs-12 d-flex justify-content-center">
  <img src="<?php echo base_url();?>/assets/img/logolenyslogin_page.png" width="14%" style="margin-bottom:23px;">
  </div>
              <?php 
            echo $this->session->flashdata('message');
            echo form_open('administrator/index'); 
        ?>
       
        <div class="form-group col-md-12">
         
  <input class="form-control" type="text" name='a' required id="form-name" placeholder="Email Address / Username">
        </div>
        <div class="form-group col-md-12">
     
          <input type="password" class="form-control" name='b' placeholder="x x x x" required id="form-password">
         </div>
         <div class="col-lg-12 d-flex justify-content-center">
         <button type="submit" name='submit' class="btn btn-md gold" style="border:none;background-color:#8B6FB9;color:#fff;">Login</button>
</div>
         <div class="row">
      
         </div>
  
        <div class="row">
          <div class="col-lg-6">
           
           
         
          </div>
          <!-- /.col -->
         
          <div class="col-lg-12"> </div>
          <!-- /.col -->
        </div>
        <div><?php echo $this->session->flashdata('message'); ?></div>
      </form>
    </div>
    <!-- /.login-card-body -->

              </div>
          
          <div class="col-lg-4" style="text-align:center;">
        
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
  