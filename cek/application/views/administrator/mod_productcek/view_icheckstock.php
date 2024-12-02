<?php 
    echo "<div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Input Stock Item</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/inputstock',$attributes); 
          echo "<table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='2'>
                     <tr><th scope='row'>Link File dari Google</th> <td><input type='text' class='form-control' name='a' placeholder='Contoh link: https://docs.google.com/spreadsheet' value='$record[link]'></td></tr>    
                  
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/inputstock'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
              </div>
            </div></div>";
            echo form_close();
