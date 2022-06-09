<div class="container-xl">
          <!-- Page title -->
            
        </div>

 
<?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>

<?php if (Session::get('alert-success-karyawan')): ?>
    <div class="alert alert-danger alert-dismissible">
        <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan')}}
    </div>
<?php endif ?>


        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">

                <!-- ======================== Model Non Aktif Status Kepegawaian ======================== -->
                <div class="modal modal-blur fade" id="model_hapus_users" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Yakin Mau Hapus Akun Users.?</div>
                            <div>Menghapus Akun Users, Maka Akan Menghapus Permanen Akun User Yang di Hapus.</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="btn-hapus-users" data-bs-dismiss="modal">Ya, Hapus Akun</button>
                        </div>
                        </div>
                    </div>
                </div>













                <!-- ======================== Model Resaign Status Kepegawaian ======================== -->
                <div class="modal modal-blur fade" id="model_resaign" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Apakah Karyawan Sudah Resign.?</div>
                            <div>Fitur ini digunakan untuk karyawan yang sudah resign.</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-warning" id="btn-yes-resaign" data-bs-dismiss="modal">Ya, Resignkan Akun</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- ================================ Model Status Akun ============================== -->
                <div class="modal modal-blur fade" id="model_statys_akun" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Yakin Menon Aktifkan Akun Ini.?</div>
                            <div>Fitur ini akan membuat akun tidak lagi bisa digunakan sementara waktu sampai di aktifkan lagi oleh Admin.</div>
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="btn-yes-status-akun" data-bs-dismiss="modal">Ya, Non Aktifkan Akun</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- ======================== Model Hapus Karyawan ======================== -->
                <div class="modal modal-blur fade" id="model_hapus" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Yakin Mau Hapus Karyawan.?</div>
                            <div>Mengahapus Karyawan, berarti juga menghapus semua data berkaitan karyawan tersebut dari database.</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="btn-hapus_" data-bs-dismiss="modal">Ya, Hapus Data Karyawan</button>
                        </div>
                        </div>
                    </div>
                </div>

              <div class="col-12">
                <div class="card font-size-cv-">
                  <div class="table-responsive">
                    <!-- <table class="table table-vcenter card-table" > -->
                    <table id="example" class="table table-striped table-bordered padding-top padding-bottom" cellspacing="0" width="100%">
                             
                      <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Akses</th>
                            <th>Jadwal Daftar</th>
                            <th></th>
                        </tr>
                      </thead>
                      <tbody>

                          <?php if (count($query_user) > 0): ?>
                              <?php foreach ($query_user as $key_query_user): ?>

                                

                                <?php if ($query_nik->akses == "Admin Super"): ?>
                                    <tr>
                                        <td data-label="Name" >
                                          {{$key_query_user->name}}
                                        </td>
                                        <td data-label="Name" >
                                        {{$key_query_user->nik}}
                                        </td>
                                        <td data-label="Name" >
                                        {{$key_query_user->email}}
                                        </td>
                                        <td data-label="Name" >
                                        {{$key_query_user->show_password}}
                                        </td>
                                        <td data-label="Name" >
                                        {{$key_query_user->akses}}
                                        </td>
                                        <td data-label="Name" >
                                        {{$key_query_user->created_at}}
                                        </td>

                                            

                                            <td>  
                                                <a href="{{route('user', 'user')}}??key={{Crypt::encrypt($key_query_user->id)}}">
                                                    <span class="badge bg-warning me-1 center-foto ">
                                                        <div class="ringht-jabatan">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                        </div>
                                                    </span>
                                                </a>
                                                <a class="hapus_users" data-bs-toggle="modal" data-bs-target="#model_hapus_users" href="{{route('user_hapus')}}??key={{Crypt::encrypt($key_query_user->id)}}">
                                                    <span class="badge bg-danger me-1 center-foto ">
                                                        <div class="ringht-jabatan">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                        </div>
                                                    </span>
                                                </a>
                                            </td>
                                    </tr>
                                    
                                <?php else: ?>
                                    <?php if ($key_query_user->akses == "Admin" || $key_query_user->akses == "Admin Super"): ?>
                                    <?php else: ?>
                                        <tr>
                                            <td data-label="Name" >
                                            {{$key_query_user->name}}
                                            </td>
                                            <td data-label="Name" >
                                            {{$key_query_user->nik}}
                                            </td>
                                            <td data-label="Name" >
                                            {{$key_query_user->email}}
                                            </td>
                                            <td data-label="Name" >
                                            {{$key_query_user->show_password}}
                                            </td>
                                            <td data-label="Name" >
                                            {{$key_query_user->akses}}
                                            </td>
                                            <td data-label="Name" >
                                            {{$key_query_user->created_at}}
                                            </td>

                                            <?php if ($query_nik->akses == 'Admin' ): ?>
                                                

                                                <td>  
                                                    <a href="{{route('user', 'user')}}??key={{Crypt::encrypt($key_query_user->id)}}">
                                                        <span class="badge bg-warning me-1 center-foto ">
                                                            <div class="ringht-jabatan">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                            </div>
                                                        </span>
                                                    </a>
                                                    <a class="hapus_users" data-bs-toggle="modal" data-bs-target="#model_hapus_users" href="{{route('user_hapus')}}??key={{Crypt::encrypt($key_query_user->id)}}">
                                                        <span class="badge bg-danger me-1 center-foto ">
                                                            <div class="ringht-jabatan">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                            </div>
                                                        </span>
                                                    </a>
                                                </td>
                                            <?php else: ?>
                                            <?php endif ?>
                                        </tr>
                                    <?php endif ?>
                                <?php endif ?>

                                    
                                  
                              <?php endforeach ?>
                          <?php else: ?>
                                <tr>
                                  <td colspan='9' class="center-"> Tidak Ada Data Aktif Karyawan </td>
                                </tr>
                          <?php endif ?>
                        

                      </tbody>
                    </table>
                   
                    
                  </div>
                  
                </div>
                
              </div>
              
            </div>
            
          </div>
          
        </div>
