<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Tambah Cabang Leny Skin Care</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_mitra',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='180px' scope='row'>Nama Cabang</th>    <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th width='120px' scope='row'>Alamat </th>    <td><input type='text' class='form-control' name='b'></td></tr>
                    <tr><th width='120px' scope='row'>Gmap </th>    <td><input type='text' class='form-control' name='e'></td></tr>
                   <tr><th scope='row'>Petugas Admin</th>    <td><input type='text' class='form-control' name='source'></td></tr>
                    <tr><th scope='row'>No. Wa</th>    <td><input type='text' class='form-control' name='d'></td></tr>
                   <tr><th width='120px' scope='row'>Foto Lokasi</th>    <td><input type='file' class='form-control' name='c'><small>Ukuran gambar * unkown</small></td></tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/mitra'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
