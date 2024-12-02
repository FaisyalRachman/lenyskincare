

              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Tambah Sub Treatment</h3>
                </div>
              <div class='card-body'>
            
              <?php  
                $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_subkategori',$attributes);
              ?>
        
        
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <input type='hidden' name='b' value='Y' checked> 
                    <tr><th width='220px' scope='row'>Nama Sub Treatment</th>    <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th width='120px' scope='row'>Harga</th>    <td><input type="text" class='form-control' name='e' required></td></tr>
                    <tr><th width='120px' scope='row'>Detail Keterangan</th>    <td><textarea class='form-control' id='editor1' name='f' required></textarea></td></tr>
                    <tr><th scope='row'>Kategori</th>                          <td> <select class="form-control" name='g'><?php  foreach ($recordkat->result_array() as $r) {
                      	$namakat = $r['nama_kategori'];
                        $idkat = $r['id_kategori'];
           echo "<option value='$idkat'>$namakat</option>";
           
            }                      ?></select> </td></tr>
             <tr><th scope='row'>Promo</th>                          <td><?php if ($rows['aktif']=='Y'){ echo "<input type='radio' name='b' value='Y' checked> Ya &nbsp; <input type='radio' name='b' value='N'> Tidak"; }else{ echo "<input type='radio' name='b' value='Y'> Ya &nbsp; <input type='radio' name='b' value='N' checked> Tidak"; }?>
                     
                     </td></tr>
                     <tr><th scope='row'>Recomendation Treatment</th>                          <td><?php if ($rows['recomended']=='Y'){ echo "<input type='radio' name='h' value='Y' checked> Ya &nbsp; <input type='radio' name='h' value='N'> Tidak"; }else{ echo "<input type='radio' name='h' value='Y'> Ya &nbsp; <input type='radio' name='h' value='N' checked> Tidak"; }?>
                     
                     </td></tr>
                    <tr><th scope='row'>Bagian</th>                         <td><select name='c' class='form-control'><option value='2' selected>Treatment</option></select></td></tr>
                    <tr><th width='120px' scope='row'>Gambar</th>    <td><input type='file' class='form-control' name='d' required>
                  </td></tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/subkategori'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>
          </form>
