
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Buku Tamu (Hubungi)</h3>
                  <div class="card-tools">
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_albumslide'>Tambahkan Data</a>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th width='60px'>Nama</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Subject</th>
                        <th>Pesan</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td>$row[nama]</td>
                              <td>$row[email]</td>
                              <td>$row[telp]</td>
                              <td>$row[judul]</td>
                              <td>$row[pesan]</td>
                               <td><center>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url().$this->uri->segment(1)."/delete_bukutamu/$row[id_hubungi]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='nav-icon fas fa-trash-alt'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div></div></div>