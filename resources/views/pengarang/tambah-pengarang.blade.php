 
<?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>

<?php if (session()->has('alert-peringatan')): ?>
        <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
    <?php endif ?>


<div class="row row-cards">
    <div class="col-12">
                






              <?php if (isset($query_pengaran)): ?>
                
                <form  action="{{route('pengarang-post')}}" method="post" class="card">
                  <div class="card-header">
                        <h4 class="card-title">Input Pengarang</h4> 
                        
                    </div>
                    <div class="card-body">
                      
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="row">
                            <div class="col-md-6 col-xl-12">
                                  {{ csrf_field() }}

                                
                                  <input type="hidden" class="form-control" name="id" id="id" value="{{$query_pengaran->id}}" placeholder="Nama Pengarang..." onkeyup="this.value = this.value.toUpperCase()" required>
                                    
                                  <div class="mb-3">
                                    <label class="form-label required">Nama Pengarang</label>
                                    <input type="text" class="form-control" name="name" id="nama_lengkap" value="{{$query_pengaran->name}}" placeholder="Nama Pengarang..." onkeyup="this.value = this.value.toUpperCase()" required>
                                    <span id="nama_lengkap_error" class="text-danger"></span>
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

               
                <form  action="{{route('pengarang-post')}}" method="post" class="card">
                  <div class="card-header">
                        <h4 class="card-title">Input Pengarang</h4> 
                        
                    </div>

                    <?php if ($query_nik->akses == "Admin Super" || $query_nik->akses == "Admin"): ?>
                
                        <div class="card-body">
                          
                          <div class="row">
                            <div class="col-xl-6">
                              <div class="row">
                                <div class="col-md-6 col-xl-12">
                                      {{ csrf_field() }}

                                    

                                      <div class="mb-3">
                                        <label class="form-label required">Nama Pengarang</label>
                                        <input type="text" class="form-control" name="name" id="nama_lengkap" placeholder="Nama Pengarang..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="nama_lengkap_error" class="text-danger"></span>
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