 
<?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>

<?php if (session()->has('alert-peringatan')): ?>
        <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
    <?php endif ?>


<div class="row row-cards">
    <div class="col-12">
                

    




              <?php if (isset($userDetail)): ?>
                <form  action="{{route('user-post')}}" method="post" class="card">
                  <div class="card-header">
                        <h4 class="card-title">Input Data User</h4> 
                        
                    </div>
                    <div class="card-body">
                      
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="row">
                            <div class="col-md-6 col-xl-12">
                                  {{ csrf_field() }}

                                  <input type="hidden" class="form-control" name="id" id="nama_lengkap" value="{{$userDetail->id}}" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" required>
                                   

                                  <div class="mb-3">
                                    <label class="form-label required">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" id="nama_lengkap" value="{{$userDetail->name}}" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" required>
                                    <span id="nama_lengkap_error" class="text-danger"></span>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Nik</label>
                                    <input type="text" class="form-control" name="nik" placeholder="Nik..." value="{{$userDetail->nik}}" onkeyup="this.value = this.value.toUpperCase()" required>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$userDetail->email}}" placeholder="Email..." required>
                                  </div>

                                  

                        

                                  <div class="mb-3">
                                    <label class="form-label required">Password</label>
                                    <input type="text" class="form-control" name="password" value="{{$userDetail->show_password}}" placeholder="password ..." required>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Akses</label>
                                    <div >
                                      <select class="form-select" name="akses">

                                      <?php if ($userDetail->akses == "Admin"): ?>
                                          <option value="Admin">  Admin</option>
                                          <option value="Users">  User</option>
                                      <?php else: ?>
                                        <option value="Users">  User</option>
                                        <?php if ($query_nik->akses == "Admin Super"): ?>
                                          <option value="Admin">  Admin</option>
                                        <?php else: ?>
                                        <?php endif ?>
                                        
                                          
                                      <?php endif ?>

                                        <!-- <option disabled selected hidden></option> -->
                                        
                                        
                                      </select>
                                    </div>
                                  </div>
                              
                              

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="card-footer text-end">
                      <div class="d-flex">
                        <a href="#" class="btn btn-link">Hapus</a>
                        <button type="submit" class="btn btn-primary ms-auto">Kirim data</button>
                        {{-- <input type="submit" name="save" id="save" class="btn btn-info" value="Save" /> --}}
                      </div>
                    </div>

                </form>
              <?php else: ?>
                <form  action="{{route('user-post')}}" method="post" class="card">
                {{ csrf_field() }}
                  <div class="card-header">
                        <h4 class="card-title">Input Data User</h4> 
                        
                    </div>

                    <?php if ($query_nik->akses == "Admin Super" || $query_nik->akses == "Admin"): ?>
            

                      <div class="card-body">
                        
                        <div class="row">
                          <div class="col-xl-6">
                            <div class="row">
                              <div class="col-md-6 col-xl-12">
                                    

                                  

                                    <div class="mb-3">
                                      <label class="form-label required">Nama Lengkap</label>
                                      <input type="text" class="form-control" name="name" id="nama_lengkap" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="nama_lengkap_error" class="text-danger"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Nik</label>
                                      <input type="text" class="form-control" name="nik" placeholder="Nik..." onkeyup="this.value = this.value.toUpperCase()" required>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Email</label>
                                      <input type="email" class="form-control" name="email" placeholder="Email..." required>
                                    </div>

                                    

                          

                                    <div class="mb-3">
                                      <label class="form-label required">Password</label>
                                      <input type="password" class="form-control" name="password" placeholder="password ..." required>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Akses</label>
                                      <div >
                                        <select class="form-select" name="akses">
                                          <option disabled selected hidden></option>
                                          <?php if ($query_nik->akses == "Admin Super"): ?>
                                            <option value="Admin">              Admin</option>
                                          <?php else: ?>
                                          <?php endif ?>
                                          
                                          <option value="Users">  User</option>
                                        </select>
                                      </div>
                                    </div>
                                
                                
          
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="card-footer text-end">
                        <div class="d-flex">
                          <a href="#" class="btn btn-link">Hapus</a>
                          <button type="submit" class="btn btn-primary ms-auto">Kirim data</button>
                          {{-- <input type="submit" name="save" id="save" class="btn btn-info" value="Save" /> --}}
                        </div>
                      </div>

                    <?php else: ?>
                      <div class="card-body">
                        
                        <div class="row">
                          <div class="col-xl-6">
                            <div class="row">
                              <div class="col-md-6 col-xl-12">
                      Akses Tidak Tersedia
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    <?php endif ?>

                </form>
              <?php endif ?>
        
    </div>
</div>