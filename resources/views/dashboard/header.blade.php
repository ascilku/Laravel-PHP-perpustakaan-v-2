<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta3
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    
    <title>Dashboard.</title>
    <!-- CSS files -->
    <link href="{{ asset('') }}dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/demo.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}css-consume/style.css" rel="stylesheet"/>

    
    
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet"/> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('') }}sweetalert/sweetalert2.all.min.js"></script>
    <script src="{{ asset('') }}ckeditor/ckeditor.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

  
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script>
  $('#myModal').modal('show');
</script>

  </head>
  <body class="antialiased">

  <!-- ======================== Modal edit gaji ============================== -->
<div class="modal modal-blur fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Ubah Password.?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('ubah-password')}}" method="post">
                {{ csrf_field() }}
                      <div class="modal-body">
                            <input type="hidden" class="form-control" id="id_user" name="id_user" placeholder="Your report name">
                            
                            <div class="mb-3">
                                <label class="form-label required">Password</label>
                                <input type="text" class="form-control data_gaji"  name="password"  required>
                            </div>
                      </div>
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Ubah
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>


    
    <div class="wrapper">
      <header class="navbar navbar-expand-md navbar-light d-print-none font-size-info-alert">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="{{route('dashboard-panel')}}">

              

              <?php if ($query_nik->akses == 'Admin'): ?>
                Staft {{$query_nik->akses}}
              <?php else: ?>
                {{$query_nik->akses}}
              <?php endif ?>
              
              <!-- <img src="{{ asset('') }}static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">-->
            </a> 
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <!-- <div class="nav-item d-none d-md-flex me-3">
              <div class="btn-list">
                <a href="https://github.com/tabler/tabler" class="btn btn-outline-white" target="_blank" rel="noreferrer">
                 <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                  Source code
                </a>
                <a href="https://github.com/sponsors/codecalm" class="btn btn-outline-white" target="_blank" rel="noreferrer">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                  Sponsor
                </a>
              </div>
            </div> -->
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <!-- <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                <span class="badge bg-red"></span>
              </a> -->
              
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-item dropdown ">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0  dropdown-toggle" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <?php if (!isset($dahboard_akun_cookie->data_diri->foto)): ?>
                        <?php if (!isset($dahboard_akun_cookie->data_perusahaan->foto)): ?>
                          <span class="avatar avatar-sm" style="background-image: url({{ asset('') }}file/profil-dashboard/profil.png)"></span>
                        <?php else: ?> 
                          <span class="avatar avatar-sm" style="background-image: url({{ asset('') }}file/profil-dashboard/{{$dahboard_akun_cookie->data_perusahaan->foto}})"></span>
                        <?php endif ?> 
                  <?php else: ?> 

                    <span class="avatar avatar-sm" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$dahboard_akun_cookie->data_diri->foto}})"></span>
                         <!-- <span class="avatar avatar-sm" style="background-image: url({{ asset('') }}file/profil-dashboard/profil.png)"></span> -->
                  <?php endif ?> 
                
                <div class="d-none d-xl-block ps-2 ">
                  <div>
                      
                      <?php if ($query_nik->akses != "Admin"): ?>
                         {{$query_nik->name}}
                          
                      <?php else: ?>
                        
                        {{$query_nik->akses}}
                      <?php endif ?>
                      
                  </div>
                  <div class="mt-1 small text-muted ">
                      <?php if ($query_nik->akses != "Admin"): ?>
                         {{$query_nik->akses}}
                          
                      <?php else: ?>
                        
                        {{$query_nik->akses}}
                      <?php endif ?>
                        
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#detail_profil">Profile</a>
             
                  <a href="#"  class="view_edit_user dropdown-item"  data-id_user="{{$query_nik->id}}">
                                              Ubah Password</a>
                    <a href="{{ asset('login-logout') }}" class="dropdown-item alert-logout">Logout</a>
                    
                    <!-- <a href="#" class="view_edit_users" data-id-users="{{$query_nik->id}}" class="dropdown-item ">
                        Ubah Password
                    </a> -->

                    
              </div>
            </div>
          </div>
        </div>
      </header>

      
<!-- ======================== Detail Profile ============================== -->

      