<section id="services" class="services" style="margin-top:0px;">
  <div class="container">
<div class="contentbg">
<?php

  $sosmed = $this->model_utama->view('identitas')->row_array();

  $cekslide = $this->model_utama->view_single('berita', array('headline' => 'Y', 'status' => 'Y'), 'id_berita', 'DESC');
if ($cekslide->num_rows() > 0) {
  include "slide.php";
}
?>


    <div class="section-title">
      <h2>Produk </h2>
    </div>



    <div class="row">
   
        <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4">
          
        </div>
      <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-5">
      <div class="icon-box" style="color:#000000;">Authorized Distributor
            <img src="<?php echo base_url(); ?>asset/foto_mitra/dahuanew1.png" alt="" class="img-fluid" style="width:92%;">
            <h5 style="text-align:left;"><a href="<?php echo base_url() . $row['judul_seo']; ?>" style="color:#004488;font-weight:bold"></a></h5>
            <p><a class='btn btn-outline-secondary' href='<?php echo base_url() .'kategori/detail/dahua'; ?>'>Selengkapnya</a></p>
          </div>
        </div>
         <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4">
        
        </div>

       
        <div class="col-lg-1">
</div>
         <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-5" style="color:#000000;">
         <div class="icon-box solel">Sole Distributor
            <img src="<?php echo base_url(); ?>asset/foto_mitra/dspanew30.png" alt="" class="img-fluid" style="width:100%;">
           
            <p><a class='btn btn-outline-secondary'href='<?php echo base_url() .'kategori/detail/dsppa'; ?>'>Selengkapnya</a></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-5">
          <div class="icon-box" style="color:#000000;padding:70px;padding-top:0px;">Authorized Partner
            <img src="<?php echo base_url(); ?>asset/foto_mitra/zkteconew1.png" alt="" class="img-fluid" style="width:90%;">
           
              <p><a class='btn btn-outline-secondary tgh' href='<?php echo base_url() .'kategori/detail/zkteco'; ?>'>Selengkapnya</a></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-5">
        <div class="icon-box soler">Authorized Partner
            <img src="<?php echo base_url(); ?>asset/foto_mitra/seagatenew1.png" alt="" class="img-fluid" style="width:100%;">
            
              <p><a class='btn btn-outline-secondary' href='<?php echo base_url() .'kategori/detail/seagate'; ?>'>Selengkapnya</a></p>
          </div>
        </div>

        <div class="col-lg-1">
</div>
 </div>



 </div>
  </div>
</section>


<section id="services" class="services" style="margin-top:0px;">

  <div class="container">
<div class="contentbg">

<br>
    <div class="section-title">
      <h2>Artikel & Produk Utama</h2>
    </div>



    <div class="row">
    
         <div class="col-lg-8 col-md-6 d-flex align-items-stretch mt-5" style="margin-left:0px;padding-right: 0px;
    padding-left: 0px;">
         <div class="icon-box sole" style="color:#000000;">
         <?php
           $testimoni = $this->model_utama->view_join_two('berita', 'users', 'kategori', 'username', 'id_kategori', array('headline' => 'Y', 'status' => 'Y','utama' => 'N'), 'RAND()', 'ASC', 0, 1);
          foreach ($testimoni->result_array() as $t) {
            $baca = $t['dibaca'] + 1;
            $tgl = tgl_indo($t['tanggal']);
            $judul = substr($t['judul'], 0, 35);
            $sub_judul = $t['sub_judul'];
            $gbr = $t['gambar'];
            $isi = $t['isi_berita'];
            echo "<div class='container'>";

            echo "<img src='asset/foto_berita/$gbr' class='img-fluid' alt='' style='width:97%;margin-left:23px;border:2px double #ffcc00'>
              <div class='top-left' style='text-shadow:0px 1px #777777 !important;'><h4><b>".$judul."</b></h4><div class='intro' style='word-wrap: break-word !important;'>".$sub_judul."</p><p><br><a class='btn btn-outline-secondary portal' href=".base_url()."news/".$t[judul_seo].">Selengkapnya <i class='bx bx-chevron-right panahkiri'></i></a></div></div>";

              echo "</div>";
          }
          ?>
         </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-5" style="padding-right: 0px;
    padding-left: 0px;">
          <div class="icon-box" style="color:#000000;">
          <?php
           $testimoni = $this->model_utama->view_join_two('produk', 'users', 'subkategori', 'username', 'id_subkategori', array('headline' => 'Y', 'status' => 'Y'), 'RAND()', 'DESC', 0, 1);
          foreach ($testimoni->result_array() as $t) {
            $baca = $t['dibaca'] + 1;
            $tgl = tgl_indo($t['tanggal']);
            $judul = substr($t['judul'], 0, 35);
            $sub_judul = substr($t['sub_judul'], 0, 20);
            $gbr = $t['gambar'];
            $isi = $t['isi_produk'];
            echo "<div class='container'>";

            echo "<img src='asset/foto_produk/$gbr' class='img-fluid' alt='' style='width:94%;margin-right:23px;border:2px double #ffcc00'>
            <div class='top-left' style='width:80%;margin-left:-12px;text-shadow:1px 1px #777777 !important;word-wrap:break-word;line-height: 1.6;'><h5>".$judul."</h5><div class='intro' style='word-wrap: break-word !important;'><p>".$sub_judul."</p></div><p><br><a class='btn btn-outline-secondary portal' href=".base_url().$t[judul_seo].">Selengkapnya <i class='bx bx-chevron-right panahkiri'></i></a></p></div>";

              echo "</div>";
          }
          ?>
        </div>
        </div>
        
 </div>

 <div class="row">
    
    <div class="col-xl-12 justify-content-center align-items-stretch" style="margin-top:30px;">

      <?php
       $testimoni = $this->model_utama->view_join_two('berita', 'users', 'kategori', 'username', 'id_kategori', array('headline' => 'N', 'status' => 'Y', 'utama' => 'Y'), 'RAND()', 'DESC', 0, 1);
       foreach ($testimoni->result_array() as $t) {
        $baca = $t['dibaca'] + 1;
        $tgl = tgl_indo($t['tanggal']);
        $judul = substr($t['judul'], 0, 35);
        $sub_judul = $t['sub_judul'];
    
          $pathgbr = 'foto_berita';
       
        $gbr = $t['gambar'];
        $url = $t['judul_seo'];
        $isi = $t['isi_berita'];
        echo "<div class='container'>";

        echo "<img src='asset/$pathgbr/$gbr' class='img-fluid' alt='' style='width:99%;margin-left:9px;margin-right:9x;border:2px double #ffcc00;'>
          <div class='top-left2'><h4><b>".$judul."</b></h4><div class='intro' style='word-wrap: break-word !important;'><p>".$sub_judul.$t['idfront']."</p></div><p><a class='btn btn-outline-secondary portal' href='".base_url() ."news/". $url."'>Selengkapnya <i class='bx bx-chevron-right panahkiri'></i></a></p></div>";

        echo "</div>";
      }
      ?>
      </div>
  </div>

 </div>
  </div>
</section>


<section id="services" class="services">
  <div class="container">
  <div class="contentbg" style="padding-bottom:68px;">
    <div class="section-title">
      <h2 class="project">Client</h2>
    </div>
     <br><br>
 <div class="row justify-content-center text-center">

  <div class="col-lg-2"></div>
 <div class="col-lg-6">
    <div class="row">
    <div class="columns container d-flex">
      <div class="custom2 owl-carousel owl-theme">
     
 <?php
$result ='';
$result .= '<div class="item active">';
$result .= '<div class="row">';
 $client = $this->model_utama->view_ordering_limit2('mitra','id_mitra', 'DESC', 0, 200);

         foreach ($client as $key => $row) {
      
        if ($key !=0 && ($key % 16 == 0)) { //to avoid first empty "active"
          $result .= "</div>";
          $result .= "</div>";
          $result .= "<div class='item'>";
           $result .= "<div class='row'>";
       
         
        }
        
 $result .= '<div class="col-lg-3 client"><div class="icon-box">';
        $result .= '<img src="'.base_url().'asset/foto_mitra/'.$row->gambar.'" class="img-fluid client" style="padding:10px !important;"></div></div>';
        
    }
    $result .= '</div>';
    $result .= '</div>';

    echo $result;
?> 
</div>
</div>
    </div>
</div>
<div class="col-lg-2"></div>
</div>
</div> 
 </div>

</section>