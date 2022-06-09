@include('dashboard.header')
@include('dashboard.menu')
    <div class="py-4">
        <div class="container-xl">
            <div class="col-xl-12 col-md-12">
            <?php if (Session::get('alert-success-karyawan')): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan')}}
                    </div>
                <?php endif ?>
                <div class="card">
                    <ul class="nav nav-tabs" data-bs-toggle="tabs">

                        

                        <?php if ($key == 'user'): ?>
                            <li class="nav-item ">
                                <a href="{{route('user', 'user')}}" class="nav-link <?php  echo ($key=='user' ? 'active' : '');?> ">User</a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{route('user', 'data-user')}}" class="nav-link <?php  echo ($key=='data-user' ? 'active' : '');?> ">Data Users</a>
                            </li>
                        <?php elseif ($key == 'data-user'): ?>
                            <li class="nav-item ">
                                <a href="{{route('user', 'user')}}" class="nav-link <?php  echo ($key=='user' ? 'active' : '');?> ">User</a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{route('user', 'data-user')}}" class="nav-link <?php  echo ($key=='data-user' ? 'active' : '');?> ">Data Users</a>
                            </li>
                        <?php endif ?>

                       


                    </ul>
                    <div class="card-body">
                        <div class="tab-content">

                            <?php if ($key == 'user'): ?>
                                <div class="tab-pane active show" id="tidak">
                                    @include('users.tambah-data')
                                </div>
                            <?php elseif ($key == 'data-user'): ?>
                                <div class="tab-pane active show" id="tidak">
                                    @include('users.data-user')
                                </div>
                            <?php endif ?>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.footer')