<?php 
  $number1 = $this->model_app->view('berita')->num_rows(); 
  $number2 = $this->model_app->view('halamanstatis')->num_rows(); 
  $number3 = $this->model_app->view('agenda')->num_rows(); 
  $number4 = $this->model_app->view('users')->num_rows();   
  echo $this->session->flashdata('message'); 
       $this->session->unset_userdata('message');
?>
 <!-- Info boxes -->
  <div class="row">
    
    <!-- /.col -->
  
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

  
    
  <!-- /.row -->

  <div class="row">
    <div class="col-lg-6">
      <?php 
        $jmlpesan = $this->model_app->view_where('hubungi', array('dibaca'=>'N'))->num_rows(); 
        $jmlberita = $this->model_app->view_where('komentar', array('aktif'=>'N'))->num_rows(); 
        $jmlvideo = $this->model_app->view_where('komentarvid', array('aktif'=>'N'))->num_rows(); 
      ?>
      <div class="card-header">
<h3 class="card-title">Top 10 News & Article</h3>
</div>
    <ul>
    <?php 
        $teratas = $this->db->query("SELECT * FROM berita order by dibaca DESC LIMIT 10");
        foreach ($teratas->result_array() as $row){
            echo "<li><a target='_BLANK' href='".base_url()."$row[judul_seo]'>$row[judul]</a> <small style='color:red'><i>($row[dibaca])</i></small></li>";
        }
    ?>
    </ul>
  </div><!-- /.Left col -->

  <div class="col-lg-6">
    <div class="card">
      <?php include "grafik.php"; ?>
    </div>
  </div><!-- right col -->
</div>
  <!-- /.row -->

