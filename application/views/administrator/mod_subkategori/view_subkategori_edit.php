
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Edit Sub Treatment</h3>
                </div>
              <div class='card-body'>
            <?php  $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_subkategori',$attributes); 
              ?>
       
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='<?= $rows[id_subkategori];?>'>
                   <input type='hidden' class='form-control' name='c' value='2'>
                    <tr><th width='220px' scope='row'>Nama Treatment</th>    <td><input type='text' class='form-control' name='a' value='<?= $rows[nama_subkategori]; ?>' required></td></tr>
                    <tr><th width='220px' scope='row'>Harga</th>    <td><input type="text" class='form-control' name='e' value='<?= $rows[subdeskripsi]; ?>' required></td></tr>
                    <tr><th width='220px' scope='row'>Detail Keterangan</th>    <td><textarea class='form-control' id='editor1' name='f' value=''required><?= $rows[subdetail]; ?></textarea></td></tr>
                    <tr><th width='220px' scope='row'>Meta Title</th>    <td><input type="text" class='form-control' name='m' placeholder='Contoh : Ttreatment IPL Rejuve' value='<?= $rows[meta_title]; ?>' required></td></tr></td></tr>
                    <tr><th width='220px' scope='row'>Meta Description</th>    <td><textarea class='form-control' id='editor1' name='n' placeholder='Contoh : Ingin menjaga kekencangan kulit tanpa operasi? Yuk coba treatment IPL Rejuve! Baca di LenySkinCare' value=''required><?= $rows[meta_desc]; ?></textarea></td></tr>
                    <tr><th scope='row'>Kategori</th>                          <td> 
                      <select class="form-control" name='g'>
                      <?php  foreach ($recordkat->result_array() as $r) {
                      	$namakat = $r['nama_kategori'];
                        $idkat = $r['id_kategori'];
                        if($rows[id_kategori]==$r[id_kategori]){
                          $select="selected";
                        }else{
                          $select="";
                        }
                        echo "<option value=".$r['id_kategori']." $select>".$r['nama_kategori']."</option>";
                       }                      ?>
                       </select> 
                       </td></tr>
                   <tr><th scope='row'>Promo</th>                          <td><?php if ($rows['aktif']=='Y'){ echo "<input type='radio' name='b' value='Y' checked> Ya &nbsp; <input type='radio' name='b' value='N'> Tidak"; }else{ echo "<input type='radio' name='b' value='Y'> Ya &nbsp; <input type='radio' name='b' value='N' checked> Tidak"; }?>
                   <tr><th scope='row'>Recomendation Product</th>                          <td><?php if ($rows['recomended']=='Y'){ echo "<input type='radio' name='h' value='Y' checked> Ya &nbsp; <input type='radio' name='h' value='N'> Tidak"; }else{ echo "<input type='radio' name='h' value='Y'> Ya &nbsp; <input type='radio' name='h' value='N' checked> Tidak"; }?>
                     
                     </td></tr> 
                   </td></tr>
                    <tr><th width='220px' scope='row'>Gambar</th>    <td><input type='file' class='form-control' name='d'>
              <?php    if ($rows['subgambar_utama'] != ''){ echo "Lihat Gambar : <a target='_BLANK' href='".base_url()."asset/foto_produk/$rows[subgambar_utama]'>$rows[subgambar_utama]</a>"; }?></td></tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='<?= base_url().$this->uri->segment(1);?>/subkategori'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>
</form>