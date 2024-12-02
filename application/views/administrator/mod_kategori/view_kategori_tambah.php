<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Add Kategori Treatment</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_kategoriberita',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='220px' scope='row'>Nama Treatment</th>    <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th width='220px' scope='row'>Keterangan Treatment</th>    <td><textarea name='e' rows='7' cols='40' class='form-control'></textarea></td></tr>
                    <tr><th width='220px' scope='row'>Detail Keterangan</th>    <td><textarea name='f' rows='7' cols='40' class='form-control'></textarea></td></tr>
                    <tr><td><input type='hidden' class='form-control' name='c' value='2' placeholder='Treatment' readonly></td></tr>
                    <tr><th width='220px' scope='row'>Gambar</th>    <td><input type='file' class='form-control' name='d'><small>Ukuran gambar * 1280 x 537</small></td></tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/kategoritreatment'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
