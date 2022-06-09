 
<?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>

<?php if (session()->has('alert-peringatan')): ?>
        <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
    <?php endif ?>


<div class="row row-cards">
    <div class="col-12">
                






          <h5 class="modal-title">Daftar Buku Pinjaman</h5>
          <div class="col-12">
              
              <div class="card font-size-cv-">
                <div class="table-responsive">
                  <!-- <table class="table table-vcenter card-table" > -->
                  <table id="example" class="table table-striped table-bordered padding-top padding-bottom" cellspacing="0" width="100%">
                          
                    <thead>
                      <tr>
                          <th>Nama Buku</th>
                          <th>Nama Pengarang</th>
                          <th>Total Pinjam</th>
                          <th>Tanggal Pengembalian</th>
                          <th>Denda (Rp)</th>
                          <th>Hari Terlambat</th>
                          <th></th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php if (count($query_proses) > 0): ?>
                            <?php foreach ($query_proses as $key_query_user): ?>

                              



                                  <tr>
                                      <td data-label="Name" >
                                        {{$key_query_user->buku->name}}
                                      </td>
                                      <td data-label="Name" >
                                        {{$key_query_user->pengarang->name}}
                                      </td>
                                      <td data-label="Name" >
                                        {{$key_query_user->total_p}}
                                      </td>
                                      <td data-label="Name" >
                                        {{$key_query_user->deadline}}
                                      </td>

                                      <?php if (!isset($key_query_user->total_denda)): ?>
                                        <td>Tidak Ada</td>
                                      <?php else: ?>
                                          <td data-label="Name" >
                                              <span class="badge bg-danger me-1 center-foto ">
                                                  <div class="ringht-jabatan">
                                                    
                                                      {{$key_query_user->total_denda}}
                                                    
                                                  </div>
                                              </span>
                                          </td>
                                        
                                      <?php endif ?>

                                      <?php if (!isset($key_query_user->h_keterlambatan)): ?>
                                        <td>Tidak Ada</td>
                                      <?php else: ?>
                                        <td data-label="Name" >
                                              <span class="badge bg-danger me-1 center-foto ">
                                                  <div class="ringht-jabatan">
                                                      {{$key_query_user->h_keterlambatan}}
                                                  </div>
                                              </span>
                                        </td>
                                      <?php endif ?>
                                      

                                      
                                    
                                  
                                    
                                      <?php if ($query_nik->akses == 'Admin' || $query_nik->akses == 'Admin Super' ): ?>
                                        <?php if ($key_query_user->status == 'New'): ?>
                                          

                                          <td>
                                              <!-- <a  href="{{route('pinjam')}}?key={{$key_query_user->id}}"> -->
                                                  <span class="badge bg-danger me-1 center-foto ">
                                                      <div class="ringht-jabatan">
                                                          Belum Kembalikan
                                                          <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> -->
                                                      </div>
                                                  </span>
                                              <!-- </a> -->
                                          </td>
                                        <?php else: ?>
                                            <td>
                                                    <!-- <span class="badge bg-danger me-1 center-foto "> -->
                                                        <div class="ringht-jabatan">
                                                            Sudah Di Kembalikan
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> -->
                                                        </div>
                                                    <!-- </span> -->
                                            </td>
                                        <?php endif ?>

                                          <!-- <td>  
                                              <a href="{{route('buku', 'buku')}}?key={{Crypt::encrypt($key_query_user->id)}}">
                                                  <span class="badge bg-warning me-1 center-foto ">
                                                      <div class="ringht-jabatan">
                                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                      </div>
                                                  </span>
                                              </a>
                                              <a class="hapus_buku" data-bs-toggle="modal" data-bs-target="#model_hapus_buku" href="{{route('buku_hapus')}}??key={{Crypt::encrypt($key_query_user->id)}}">
                                                  <span class="badge bg-danger me-1 center-foto ">
                                                      <div class="ringht-jabatan">
                                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                      </div>
                                                  </span>
                                              </a>
                                          </td> -->
                                      <?php else: ?>
                                        
                                          <?php if ($key_query_user->status == 'New'): ?>
                                          

                                            <td>
                                                <a  href="{{route('pinjam')}}?key={{$key_query_user->id}}">
                                                    <span class="badge bg-success me-1 center-foto ">
                                                        <div class="ringht-jabatan">
                                                            Kembalikan
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> -->
                                                        </div>
                                                    </span>
                                                </a>
                                            </td>
                                          <?php else: ?>
                                              <td>
                                                      <!-- <span class="badge bg-danger me-1 center-foto "> -->
                                                          <div class="ringht-jabatan">
                                                              History Pengembalian
                                                              <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> -->
                                                          </div>
                                                      <!-- </span> -->
                                              </td>
                                          <?php endif ?>
                                      <?php endif ?>
                                  </tr>
                                
                            <?php endforeach ?>
                        <?php else: ?>
                              <tr>
                                <td colspan='9' class="center-"> Tidak Ada Data </td>
                              </tr>
                        <?php endif ?>
                      

                    </tbody>
                  </table>
                
                  
                </div>
                
              </div>
              
          </div>
        
    </div>
</div>