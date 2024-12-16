<?php 
    echo "<div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Edit Meta Product Page</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/productpage',$attributes); 
          echo "<table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='$record[id_identitas]'>
                    <tr><th scope='row'>Title</th>                  <td><textarea class='form-control' name='g' style='height:80px'>$record[meta_keyword]</textarea></td></tr>
                     <tr><th scope='row'>Description</th>                  <td><textarea class='form-control' name='h' style='height:80px'>$record[meta_deskripsi]</textarea></td></tr>
                         
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/productpage'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
              </div>
            </div></div>";
            echo form_close();
