@include('akses_roles.header')
    <?php if (Session::get('alert-token')): ?>
        <div class="alert-storage" data-flashdata="{{Session::get('alert-token')}}">
    <?php endif ?>

    <?php if (session()->has('alert-peringatan')): ?>
        <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
    <?php endif ?>

    <?php if (session()->has('alert-login-berhasil')): ?>
        <div class="alert-login-berhasil" data-flashdata="{{session()->get('alert-login-berhasil')}}">
    <?php endif ?>
    

    <div class="page page-center">
        <div class="container-tight py-4">
             
            <form class="card card-md" action="{{route('loginQuery')}}" method="post">
                @csrf
                <div class="card-body">

                    <?php if (Session::get('alert-login')): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <strong class="alert-login-danger">Warning! </strong> {{Session::get('alert-login')}}
                        </div>
                    <?php endif ?>

                    <?php if (Session::get('alert-login-reset')): ?>
                        <div class="alert alert-success alert-dismissible">
                            <strong class="alert-login-success">Warning! </strong> {{Session::get('alert-login-reset')}}
                        </div>
                    <?php endif ?>
                    
                    <h2 class="card-title text-center mb-4">Login Akun</h2>
                    <div class="mb-3">
                        <label class="form-label">No Pegawai</label>
                        <input type="text" name="nik" class="form-control" placeholder="Employee ID Number" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                           
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" name="password" id="password" class="form-control"  placeholder="Password"  autocomplete="off" required>
                            <span class="input-group-text">
                                
                                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" onclick="myFunction()" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                </a>
                            </span>
                            
                        </div>
                        
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="setuju"  value="yes"/>
                            <span class="form-check-label">yes that's me on this device</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </div>
           
            </form>
           
        </div>
    </div>
    <script>
        function myFunction() {
             var x = document.getElementById("password");
             if (x.type === "password") {
                  x.type = "text";
             } else {
                  x.type = "password";
             }
        }
   </script>
@include('akses_roles.footer') 