<?php 
    echo "<div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>About Braca Tour <small> (Founder Quote) </small></h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/aboutbracatour',$attributes); 
          echo "<table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='1'>
                    <tr>        
                    <td><textarea class='form-control' name='aboubracatour1' style='height:300px'>$record[isi_halaman]</textarea></td></tr>
                     <tr>        
                     <td><textarea class='form-control' name='aboutbracatour2' style='height:300px'>$record[isi_halaman1]</textarea></td></tr>
                     </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/aboutbracatour'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
              </div>
            </div></div>";
            echo form_close();
