<!-- Brand Logo -->
<?php
    $usr = $this->model_app->view_where('users', array('username' => $this->session->username))->row_array();
    if (trim($usr['foto']) == '') {
      $foto = 'blank.png';
    } else {
      $foto = $usr['foto'];
    }

if($this->uri->segment(2) == "tambah_listproduk"||$this->uri->segment(2) == "edit_listproduk"){
  $act = 'active';
}elseif($this->uri->segment(2) == "tambah_listberita"||$this->uri->segment(2) == "edit_listberita"){
$act1 = 'active';
}elseif($this->uri->segment(2) == "tambah_kategoriberita"||$this->uri->segment(2) == "edit_kategoriberita"){
  $act2 = 'active';
}elseif($this->uri->segment(2) == "tambah_subkategori"||$this->uri->segment(2) == "edit_subkategori"){
  $act3 = 'active';
}elseif($this->uri->segment(2) == "tambah_album"||$this->uri->segment(2) == "edit_album"){
  $act4 = 'active';
}elseif($this->uri->segment(2) == "tambah_gallery"||$this->uri->segment(2) == "edit_gallery"){
  $act5 = 'active';
}elseif($this->uri->segment(2) == "tambah_testimoni"||$this->uri->segment(2) == "edit_testimoni"){
  $act6 = 'active';
}elseif($this->uri->segment(2) == "tambah_mitra"||$this->uri->segment(2) == "edit_mitra"){
  $act7 = 'active';
}elseif($this->uri->segment(2) == "tambah_manajemenuser"||$this->uri->segment(2) == "edit_manajemenuser"){
  $act8 = 'active';
}elseif($this->uri->segment(2) == "tambah_kategoritreatment"||$this->uri->segment(2) == "edit_kategoritreatment"){
  $act9 = 'active';
}elseif($this->uri->segment(2) == "tambah_albumslide"||$this->uri->segment(2) == "edit_albumslide"){
  $act10 = 'active';
}elseif($this->uri->segment(2) == "tambah_kategoriproduct"||$this->uri->segment(2) == "edit_kategoriproduct"){
  $act11 = 'active';
}else{
  $act1 = '';
}



    
    ?>
<a href="<?php echo base_url() . $this->uri->segment(1); ?>" class="brand-link navbar-light">
  
  <span class="brand-text font-weight-light" style='color:#000;text-transform: uppercase;'><?= $usr['level']; ?></span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
   <?php
    echo "<div class='image'>
                  <img src='" . base_url() . "asset/foto_user/$foto' class='img-circle elevation-2' alt='$usr[nama_lengkap]'>
                </div>
                <div class='info'>
                  <a href='#' class='d-block'>$usr[nama_lengkap]<br> <span class='badge badge-success'>Online</span></a>
                </div>";
    ?>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-flat menu-open nav-legacy nav-compact" data-widget="treeview" role="menu" data-accordion="false">
  
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url() . $this->uri->segment(1); ?>/home"><i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Menu <span class="right badge badge-danger">Welcome</span></p>
        </a></li>

        <?php  if ($cek == 1 or $this->session->level == 'admin') {?>
    
            
          <?php
          $cek = $this->model_app->umenu_akses("identitaswebsite", $this->session->id_session);
          if ($cek == 1 or $this->session->level == 'admin') {
            echo "<li class='nav-item'><a class='nav-link ".($this->uri->segment(2) == "identitaswebsite" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/identitaswebsite'><i class='fas fa-passport nav-icon text-success'></i> <p>Web Profile</p></a></li>";
          }


          ?>
       
     
      <?php  }   ?>
    
          <?php
         
          if ($cek == 1 or $this->session->level == 'admin' || $this->session->level == 'staf') {
            echo "<li class='nav-item'><a class='nav-link ".$act1."".($this->uri->segment(2) == "listberita" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/listberita'><i class='fas fa-newspaper nav-icon text-success'></i> <p>Artikel</p></a></li>";
          }
        
         
          /*
          if ($cek == 1 or $this->session->level == 'admin' || $this->session->level == 'staf') {
            echo "<li class='nav-item'><a class='nav-link ".$act."".($this->uri->segment(2) == "listproduk" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/aboutbracatour'><i class='fas fa-user nav-icon text-success'></i> <p>About Us</p></a></li>";
          }
      

          if ($cek == 1 or $this->session->level == 'admin' || $this->session->level == 'staf') {
            echo "<li class='nav-item'><a class='nav-link ".$act."".($this->uri->segment(2) == "listproduk" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/whybraca'><i class='fas fa-sign nav-icon text-success'></i> <p>Why Leny Skin Care</p></a></li>";
          }
              */
          if ($cek == 1 or $this->session->level == 'admin' || $this->session->level == 'staf') {
            echo "<li class='nav-item'><a class='nav-link ".$act10."".($this->uri->segment(2) == "albumslide" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/albumslide'><i class='fas fa-newspaper nav-icon text-success'></i> <p>Slide</p></a></li>";
          }
        
          //$cek = $this->model_app->umenu_akses("kategoriberita", $this->session->id_session);
         //// if ($cek == 1 or $this->session->level == 'admin' || $this->session->level == 'supervisor') {
            echo "<li class='nav-item'><a class='nav-link ".$act9."".($this->uri->segment(2) == "kategoritreatment" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/kategoritreatment'><i class='fas fa-columns nav-icon text-success'></i> <p>Treatment</p></a></li>";
            echo "<li class='nav-item'><a class='nav-link ".$act3."".($this->uri->segment(2) == "subkategori" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/subkategori'><i class='fas fa-columns nav-icon text-success'></i> <p>Sub Treatment</p></a></li>";
              echo "<li class='nav-item'><a class='nav-link ".$act11."".($this->uri->segment(2) == "kategoriproduct" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/kategoriproduct'><i class='fas fa-columns nav-icon text-success'></i> <p>Product</p></a></li>";
             echo "<li class='nav-item'><a class='nav-link ".$act11."".($this->uri->segment(2) == "subkategoriproduct" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/subkategoriproduct'><i class='fas fa-columns nav-icon text-success'></i> <p>Sub Product</p></a></li>";
             echo "<li class='nav-item'><a class='nav-link ".$act11."".($this->uri->segment(2) == "kategoriproduct" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/bukutamu'><i class='fas fa-columns nav-icon text-success'></i> <p>Buku Tamu (Hubungi)</p></a></li>";
            // }
          $cek = $this->model_app->umenu_akses("subkategori", $this->session->id_session);
         
        
          // $cek=$this->model_app->umenu_akses("album",$this->session->id_session);
          // if($cek==1 OR $this->session->level=='admin'){
          //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/album'><i class='far fa-circle nav-icon text-success'></i> <p>Berita Foto</p></a></li>";
          // }

          // $cek = $this->model_app->umenu_akses("gallery", $this->session->id_session);
          // if ($cek == 1 or $this->session->level == 'admin') {
          //   echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . $this->uri->segment(1) . "/gallery'><i class='far fa-circle nav-icon text-success'></i> <p>Gallery Berita Foto</p></a></li>";
          // }
          ?>
      
  
     
     
          <?php
         
        
        
        

          // $cek=$this->model_app->umenu_akses("album",$this->session->id_session);
          // if($cek==1 OR $this->session->level=='admin'){
          //   echo "<li class='nav-item'><a class='nav-link' href='".base_url().$this->uri->segment(1)."/album'><i class='far fa-circle nav-icon text-success'></i> <p>Berita Foto</p></a></li>";
          // }

          // $cek = $this->model_app->umenu_akses("gallery", $this->session->id_session);
          // if ($cek == 1 or $this->session->level == 'admin') {
          //   echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . $this->uri->segment(1) . "/gallery'><i class='far fa-circle nav-icon text-success'></i> <p>Gallery Berita Foto</p></a></li>";
          // }
          ?>
      

        
        
        
          <?php
        //  $cek = $this->model_app->umenu_akses("mitra", $this->session->id_testimoni);
          if ($cek == 1 or $this->session->level == 'admin' || $this->session->level == 'staf') {
            echo "<li class='nav-item'><a class='nav-link ".$act7."".($this->uri->segment(2) == "mitra" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/mitra'><i class='fas fa-chalkboard-teacher nav-icon text-success'></i> <p>Lokasi Cabang</p></a></li>";
          }

  ?>
       
   
      <?php if ($this->session->level == 'admin') {?>
     
          <?php
          /*
          $cek = $this->model_app->umenu_akses("logowebsite", $this->session->id_session);
          if ($cek == 1 or $this->session->level == 'admin') {
            echo "<li class='nav-item'><a class='nav-link ".($this->uri->segment(2) == "logowebsite" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/logowebsite'><i class='fas fa-box nav-icon text-success'></i> <p>Logo Website</p></a></li>";
          }
*/
          // $cek = $this->model_app->umenu_akses("templatewebsite", $this->session->id_session);
          // if ($cek == 1 or $this->session->level == 'admin') {
          //   echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . $this->uri->segment(1) . "/templatewebsite'><i class='far fa-circle nav-icon text-success'></i> <p>Template Website</p></a></li>";
          // }

          // $cek = $this->model_app->umenu_akses("background", $this->session->id_session);
          // if ($cek == 1 or $this->session->level == 'admin') {
          //   echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . $this->uri->segment(1) . "/background'><i class='far fa-circle nav-icon text-success'></i> <p>Background Website</p></a></li>";
          // }
          ?>
    
      <?php  }   ?>
      <?php if ($this->session->level == 'admin') {?>
     
          <?php
                 

          // $cek = $this->model_app->umenu_akses("jajakpendapat", $this->session->id_session);
          // if ($cek == 1 or $this->session->level == 'admin') {
          //   echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . $this->uri->segment(1) . "/jajakpendapat'><i class='far fa-circle nav-icon text-success'></i> <p>Jajak Pendapat</p></a></li>";
          // }

          // $cek = $this->model_app->umenu_akses("download", $this->session->id_session);
          // if ($cek == 1 or $this->session->level == 'admin') {
          //   echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . $this->uri->segment(1) . "/download'><i class='far fa-circle nav-icon text-success'></i> <p>Download Area</p></a></li>";
          // }

          // $cek = $this->model_app->umenu_akses("alamat", $this->session->id_session);
          // if ($cek == 1 or $this->session->level == 'admin') {
          //   echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . $this->uri->segment(1) . "/alamat'><i class='far fa-circle nav-icon text-success'></i> <p>Alamat Kontak</p></a></li>";
          // }

       //   $cek = $this->model_app->umenu_akses("pesanmasuk", $this->session->id_session);
        //  if ($cek == 1 or $this->session->level == 'admin') {
        //    echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . $this->uri->segment(1) . "/pesanmasuk'><i class='far fa-circle nav-icon text-success'></i> <p>Pesan Masuk</p></a></li>";
       //   }
          ?>
       
      <?php  }   ?>
      <?php if ($this->session->level == 'admin') {?>
 
          <?php
          $cek = $this->model_app->umenu_akses("manajemenuser", $this->session->id_session);
          if ($cek == 1 or $this->session->level == 'admin') {
            echo "<li class='nav-item'><a class='nav-link ".$act8."".($this->uri->segment(2) == "manajemenuser" ? "active" : "")."' href='" . base_url() . $this->uri->segment(1) . "/manajemenuser'><i class='fas fa-users nav-icon text-success'></i> <p>Manajemen User</p></a></li>";
          }

          // $cek = $this->model_app->umenu_akses("manajemenmodul", $this->session->id_session);
          // if ($cek == 1 or $this->session->level == 'admin') {
          //   echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . $this->uri->segment(1) . "/manajemenmodul'><i class='far fa-circle nav-icon text-success'></i> <p>Manajemen Modul</p></a></li>";
          // }
          ?>
      
      <?php  }   ?>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url() . $this->uri->segment(1); ?>/logout"><i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Logout</p>
        </a></li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->