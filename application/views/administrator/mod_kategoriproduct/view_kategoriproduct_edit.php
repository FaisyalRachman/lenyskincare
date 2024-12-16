<?php 
if($rows['id_kategori'] == '1'){
$path = 'foto_berita';
}else{
$path = 'foto_produk';
}
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Edit Kategori Product</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_kategoriproduct',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_kategori]'>
                    <tr><th width='120px' scope='row'>Nama Product</th>    <td><input type='text' class='form-control' name='a' value='$rows[nama_kategori]' required></td></tr>
                    <tr><th width='120px' scope='row'>Keterangan Product</th>    <td><textarea class='form-control' name='e' value='' required>$rows[deskripsi]</textarea></td></tr>
                    <tr><th width='120px' scope='row'>Detail Keterangan</th>    <td><textarea class='form-control' name='f' value='' required>$rows[detail]</textarea></td></tr>
                     <tr><th width='220px' scope='row'>Meta Title</th>    <td><input type='text' class='form-control' name='m' placeholder='Contoh : Ttreatment IPL Rejuve' value='$rows[meta_title]' required></td></tr></td></tr>
                    <tr><th width='220px' scope='row'>Meta Description</th>    <td><textarea class='form-control' name='n' placeholder='Contoh : Ingin menjaga kekencangan kulit tanpa operasi? Yuk coba treatment IPL Rejuve! Baca di LenySkinCare' value=''required>$rows[meta_desc]</textarea></td></tr>
                   <tr><th scope='row'>Promo</th>                          <td>"; if ($rows['aktif']=='Y'){ echo "<input type='radio' name='b' value='Y' checked> Ya &nbsp; <input type='radio' name='b' value='N'> Tidak"; }else{ echo "<input type='radio' name='b' value='Y'> Ya &nbsp; <input type='radio' name='b' value='N' checked> Tidak"; } echo "</td></tr>
                    <tr><th scope='row'>Bagian</th>                         <td><select name='c' class='form-control'><option value='#'>- Pilih -</option><option value='1'>Berita</option><option value='2'>Produk</option></select></td></tr>
                    <tr><th width='120px' scope='row'>Gambar</th>    <td><input type='file' class='form-control' name='d'>";
                                                                        if ($rows['gambar_utama'] != ''){ echo "Lihat Gambar : <a target='_BLANK' href='".base_url()."asset/".$path."/".$rows[gambar_utama]."'>$rows[gambar_utama]</a>"; } echo " : <small>Ukuran gambar * 1280 x 537</small></td></tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/kategoriproduct'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();