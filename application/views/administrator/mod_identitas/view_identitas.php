<?php 
    echo "<div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Identitas Website</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/identitaswebsite',$attributes); 
          echo "<table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='$record[id_identitas]'>
                    <tr><th width='120px' scope='row'>Nama Website</th>   <td><input type='text' class='form-control' name='a' value='$record[nama_website]'></td></tr>
                    <tr><th scope='row'>Email</th>                        <td><input type='email' class='form-control' name='b' value='$record[email]'></td></tr>
                    <tr><th scope='row'>Domain</th>                       <td><input type='url' class='form-control' name='c' value='$record[url]'></td></tr>
                    <tr><th scope='row'>Sosial Network <small><i>(Pisah dengan Koma)</i></small></th>               <td><textarea class='form-control' name='d' style='height:100px'>$record[facebook]</textarea></td></tr>
                    <tr><th scope='row'>Alamat</th>                  <td><input type='text' class='form-control' name='e' value='$record[rekening]'></td></tr>
                    <tr><th scope='row'>No Telpon</th>                    <td><input type='text' class='form-control' name='f' value='$record[no_telp]'></td></tr>
                    <tr><th scope='row'>Link Video</th>                    <td><input type='text' class='form-control' name='m' placeholder='Contoh link: http://www.youtube.com/embed/xbuEmoRWQHU' value='$record[video]'></td></tr>    
                    <tr><th scope='row'>Meta Deskripsi</th>               <td><input type='text' class='form-control' name='g' value='$record[meta_deskripsi]'></td></tr>           
                    <tr><th scope='row'>Meta Keyword</th>                 <td><input type='text' class='form-control' name='h' value='$record[meta_keyword]'></td></tr>
                    <tr><th scope='row'>Google Maps</th>                  <td><textarea class='form-control' name='i' style='height:80px'>$record[maps]</textarea></td></tr>
                    <tr><th scope='row'>Deskripsi Client</th>                  <td><textarea class='form-control' name='k' style='height:80px'>$record[client]</textarea></td></tr>
                     <tr><th scope='row'>Deskripsi Karir</th>                  <td><textarea class='form-control' name='l' style='height:80px'>$record[karir]</textarea></td></tr>
                    <tr><th scope='row'>Clip Video Front</th>                      <td><input type='file' class='form-control' name='j' value='$record[favicon]'><hr style='margin:5px'>
                                                                              Clip Video Front : $record[favicon]</td></tr>
                    
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/identitaswebsite'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
              </div>
            </div></div>";
            echo form_close();
