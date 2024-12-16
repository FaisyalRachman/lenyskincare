<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Add Kategori Produk</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_kategoriproduct',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Nama Produk</th>    <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th width='120px' scope='row'>What's Include</th>    <td><textarea name='e' rows='10' cols='90'></textarea></td></tr>
                    <tr><th width='120px' scope='row'>Term & Condition</th>    <td><textarea name='f' rows='10' cols='90'></textarea></td></tr>
                      <tr><th width='220px' scope='row'>Meta Title</th>    <td><input type='text' class='form-control' name='m' placeholder='Contoh : Ttreatment IPL Rejuve' value='$rows[meta_title]' required></td></tr></td></tr>
                    <tr><th width='220px' scope='row'>Meta Description</th>    <td><textarea class='form-control' name='n' placeholder='Contoh : Ingin menjaga kekencangan kulit tanpa operasi? Yuk coba treatment IPL Rejuve! Baca di LenySkinCare' value=''required>$rows[meta_desc]</textarea></td></tr>
                    <tr><th scope='row'>Promo</th>                          <td>"; if ($rows['aktif']=='Y'){ echo "<input type='radio' name='b' value='Y' checked> Ya &nbsp; <input type='radio' name='b' value='N'> Tidak"; }else{ echo "<input type='radio' name='b' value='Y'> Ya &nbsp; <input type='radio' name='b' value='N' checked> Tidak"; } echo "</td></tr>
                     <tr><td> <tr><td><input type='hidden' class='form-control' name='c' value='2' placeholder='Treatment' readonly></td></tr></td></tr>
                    <tr><th width='120px' scope='row'>Gambar</th>    <td><input type='file' class='form-control' name='d'><small>Ukuran gambar * 1280 x 537</small></td></tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/kategoritreatment'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
