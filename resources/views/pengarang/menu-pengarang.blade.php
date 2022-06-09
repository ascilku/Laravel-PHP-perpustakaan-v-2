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

                        

                        <?php if ($key == 'pengarang'): ?>
                            <li class="nav-item ">
                                <a href="{{route('pengarang', 'pengarang')}}" class="nav-link <?php  echo ($key=='pengarang' ? 'active' : '');?> ">Pengarang</a>
                            </li>


                            <li class="nav-item ">
                                <a href="{{route('pengarang', 'data-pengarang')}}" class="nav-link <?php  echo ($key=='data-pengarang' ? 'active' : '');?> ">Data Pengarang</a>
                            </li>
                        <?php elseif ($key == 'data-pengarang'): ?>
                            <li class="nav-item ">
                                <a href="{{route('pengarang', 'pengarang')}}" class="nav-link <?php  echo ($key=='pengarang' ? 'active' : '');?> ">Pengarang</a>
                            </li>


                            <li class="nav-item ">
                                <a href="{{route('pengarang', 'data-pengarang')}}" class="nav-link <?php  echo ($key=='data-pengarang' ? 'active' : '');?> ">Data Pengarang</a>
                            </li>
                        <?php endif ?>

                       


                    </ul>
                    <div class="card-body">
                        <div class="tab-content">

                            <?php if ($key == 'pengarang'): ?>
                                <div class="tab-pane active show" id="tidak">
                                    @include('pengarang.tambah-pengarang')
                                </div>
                            <?php elseif ($key == 'data-pengarang'): ?>
                                <div class="tab-pane active show" id="tidak">
                                    @include('pengarang.data-pengarang')
                                </div>
                            <?php endif ?>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.footer')