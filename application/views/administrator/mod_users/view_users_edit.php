<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Edit Data $rows[nama_lengkap]</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_manajemenuser',$attributes); 
              if ($rows['foto']==''){ $foto = 'users.gif'; }else{ $foto = $rows['foto']; }
              echo $this->session->flashdata('message');
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[username]'>
                    <input type='hidden' name='ids' value='$rows[id_session]'>
                    <tr><th width='120px' scope='row'>Username</th>   <td><input type='text' class='form-control' name='a' value='$rows[username]' readonly='on'></td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>             <td><input type='text' class='form-control' name='c' value='$rows[nama_lengkap]'></td></tr>
                    <tr><th scope='row'>Alamat Email</th>                    <td><input type='email' class='form-control' name='d' value='$rows[email]'></td></tr>
                    <tr><th scope='row'>No Telepon</th>                  <td><input type='number' class='form-control' name='e' value='$rows[no_telp]'></td></tr>
                    <tr><th scope='row'>Ganti Foto</th>                     <td><input type='file' class='form-control' name='f'><hr style='margin:5px'>";
                                                                                 if ($rows['foto'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_user/$rows[foto]'>$rows[foto]</a>"; } echo "</td></tr></td></tr>";
                    if ($this->session->level == 'admin'){
                      echo " <tr><th scope='row'>Password</th>                 <td><input type='password' class='form-control' name='b' onkeyup=\"nospaces(this)\"></td></tr><tr><th scope='row'>Blokir</th>                   <td>"; if ($rows['blokir']=='Y'){ echo "<input type='radio' name='h' value='Y' checked> Ya &nbsp; <input type='radio' name='h' value='N'> Tidak"; }else{ echo "<input type='radio' name='h' value='Y'> Ya &nbsp; <input type='radio' name='h' value='N' checked> Tidak"; } echo "</td></tr>
                          ";
                      echo "";
                                                                              
                      echo "";
                    }
                  echo "</tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/manajemenuser'><button type='button' class='btn btn-default pull-right'>Kembali</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();