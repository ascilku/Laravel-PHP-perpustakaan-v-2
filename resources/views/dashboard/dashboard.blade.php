@include('dashboard.header')
@include('dashboard.menu')





<!-- ======================== Data Perusahaan ============================== -->



            <?php if (session()->has('alert-peringatan')): ?>
                <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
            <?php endif ?>

            <?php if (session()->has('alert-success')): ?>
                <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
            <?php endif ?>
                        
        <div class="py-4">
        
            <div class="container-xl">
                    <?php if ($query_nik->akses != "Admin"): ?>
                            <div class="alert alert-warning alert-dismissible">
                                <strong class="alert-login-success">Warning! </strong> Selaamat Datang..!! Cuman admin yang bisa mengolah data data di sistem ini :)
                            </div>
                    <?php endif ?>
                <div class="row align-items-center ">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                                <?php if (Session::get('alert-success-karyawan_')): ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan_')}}
                                    </div>
                                <?php endif ?>
                                <?php if (session()->has('alert-peringatan')): ?>
                                    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
                                <?php endif ?>
                                <div >
                                    <!-- ====================== logic untuk memilih halaman =================== -->
                                        <?php 
                                            if(isset($_GET['halaman'])){
                                                $halaman = $_GET['halaman'];
                                        ?>  

                                                        <?php
                                                            switch($halaman){
                                                                case 'data-diri':
                                                        ?> 
                                    
                                                                <!-- ====================== Menampilkan Menu Halaman Item Header =================== -->

                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.data-diri')
                                                                <?php       
                                                                        break;      
                                                                ?>
                                                                <!-- ====================== Menampilkan Menu Halaman Item Data Diri================== -->

                                                                <?php 
                                                                    case 'data-orang-tua':
                                                                ?>
                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.data-orang-tua')
                                                                <?php       
                                                                        break;      
                                                                ?>
                                                                <!-- ====================== Menampilkan Menu Halaman Item pendidikan formal================== -->

                                                                <?php 
                                                                    case 'data-pendidikan-formal':
                                                                ?>
                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.pendidikan-formal')
                                                                <?php       
                                                                        break;      
                                                                ?>
                                                                <!-- ====================== Menampilkan Menu Halaman Item pendidikan formal================== -->

                                                                <?php 
                                                                    case 'data-pendidikan-non-formal':
                                                                ?>
                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.pendidikan-non-formal')
                                                                <?php       
                                                                        break;      
                                                                ?>
                                                                <!-- ====================== Menampilkan Menu Halaman Item File Data Diri================== -->

                                                                <?php 
                                                                    case 'data-file-data-diri':
                                                                ?>
                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.file-data-diri')
                                                                <?php       
                                                                        break;      
                                                                ?>

                                                                
                                                        <?php } ?>  
                                                    <?php }?>  
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>



    
@include('dashboard.footer')


