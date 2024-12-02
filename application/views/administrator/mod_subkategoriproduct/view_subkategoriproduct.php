  
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Sub Product</h3>
                  <div class="card-tools">
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_subkategoriproduct'>Tambahkan Sub Product</a>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th>Nama Product</th>
                        <th>Link</th>
                        <th>Promo</th>
                        <th>Recomdended</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    $artikel = $this->model_app->view_where('subkategori',array('id_subkategori'=>$row['id_subkategori']))->num_rows();
                    echo "<tr><td>$no</td>
                              <td>$row[nama_subkategori]</td>
                              <td><a target='_BLANK' href='".base_url()."kategori/detail/$row[subkategori_seo]'>kategori/detail/$row[subkategori_seo]</a></td>
                              <td>$row[aktif]</td>
                              <td>$row[recomended]</td>
                           
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_subkategoriproduct/$row[id_subkategori]'><span class='nav-icon fas fa-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url().$this->uri->segment(1)."/delete_subkategoriproduct/$row[id_subkategori]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='nav-icon fas fa-trash-alt'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
                  </div>
              </div>
                  </div>