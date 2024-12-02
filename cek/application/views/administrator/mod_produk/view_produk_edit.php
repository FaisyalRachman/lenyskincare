<?php 
echo "<div class='card'>
    <div class='card-header with-border'>
      <h3 class='card-title'>Edit Produk Terpilih</h3>
    </div>
  <div class='card-body'>";
  $attributes = array('class'=>'form-horizontal','role'=>'form');
  echo form_open_multipart($this->uri->segment(1).'/edit_listproduk',$attributes); 
echo "<table class='table table-sm table-borderless'>
      <tbody>
        <input type='hidden' name='id' value='$rows[id_produk]'>
        <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='b' value='$rows[judul]' required></td></tr>
        <tr><th scope='row'>Sub Judul</th>              <td><input type='text' class='form-control' name='c' value='$rows[sub_judul]'></td></tr>
        <tr><th scope='row'>Video Youtube</th>          <td><input type='text' class='form-control' name='d' value='$rows[youtube]' placeholder='Contoh link: http://www.youtube.com/embed/xbuEmoRWQHU'></td></tr>
        <tr><th scope='row'>Kategori</th>               <td><select name='a' class='form-control' required>
        <option value='' selected>- Pilih Kategori -</option>";
        foreach ($record as $row){
          if ($rows['id_kategori'] == $row['id_kategori']){
            echo "<option value='$row[id_subkategori]' selected>$row[nama_subkategori] by $row[nama_kategori]</option>";
        }else{
          echo "<option value='$row[id_subkategori]'>$row[nama_subkategori] by $row[nama_kategori]</option>";
        }
      }
echo "</td></tr>


        <tr><th scope='row'>Headline</th>               <td>"; if ($rows['headline']=='Y'){ echo "<input type='radio' name='e' value='Y' checked> Ya &nbsp; <input type='radio' name='e' value='N'> Tidak"; }else{ echo "<input type='radio' name='e' value='Y'> Ya &nbsp; <input type='radio' name='e' value='N' checked> Tidak"; } echo "</td></tr>
        <tr><th scope='row'>Produk Utama</th>           <td>"; if ($rows['utama']=='Y'){ echo "<input type='radio' name='g' value='Y' checked> Ya &nbsp; <input type='radio' name='g' value='N'> Tidak"; }else{ echo "<input type='radio' name='g' value='Y'> Ya &nbsp; <input type='radio' name='g' value='N' checked> Tidak"; } echo "</td></tr>
        <tr><th scope='row'>Isi Produk</th>             <td><textarea id='editor1' class='form-control' name='h' style='height:260px' required>$rows[isi_produk]</textarea></td></tr>
        <tr><th scope='row'>Ganti Gambar</th>                 <td><input type='file' class='form-control' name='userfile1'><input type='hidden' class='form-control' name='euserfile1' value='$rows[gambar]'>";
                                                                   if ($rows['gambar'] != ''){ echo "<i style='color:red'>Lihat Gambar Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_produk/$rows[gambar]'>$rows[gambar]</a>"; } echo " : <small>Ukuran gambar * 1080 x 980</small></td></tr>
      <tr><th scope='row'>Ganti File</th>                 <td><input type='file' class='form-control' name='userfile2'><input type='hidden' class='form-control' name='euserfile2' value='$rows[file]'>";
                                                                   if ($rows['file'] != ''){ echo "<i style='color:red'>Lihat Gambar Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_produk/$rows[file]'>$rows[file]</a>"; } echo "</td></tr>                                                           
        <tr><th scope='row'>Ket. Gambar</th>            <td><input type='text' class='form-control' name='i' value='$rows[keterangan_gambar]'></td></tr>
        ";
        echo "
        <tr><th scope='row'>Waktu Posting</th>              <td><input type='text' id='datetimepicker1' data-date-format='YYYY-MM-DD HH:mm:ss' class='form-control' name='waktu' value='$rows[tanggal] $rows[jam]'></td></tr>
      </tbody>
      </table>
  
  <div class='card-footer'>
        <button type='submit' name='submit' class='btn btn-info'>Update</button>
        <a href='".base_url().$this->uri->segment(1)."/listproduk'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
  </div>
</div></div>";
echo form_close();
?>



