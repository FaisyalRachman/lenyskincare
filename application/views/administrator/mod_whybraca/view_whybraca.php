
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Why Braca Tour Quote</h3>
               </div><!-- /.card-header -->
                <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th width='60px'>Foto</th>
                        <th>Keterangan</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td><img src='".base_url()."assets/img/$row[gambar]' width='50'></td>
                              <td>$row[keterangan_gambar]</td>
                               <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_whybraca/$row[id_album]'><span class='nav-icon fas fa-edit'></span></a>
                                </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div></div></div>