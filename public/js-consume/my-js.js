
      
      //======================================================================
//======= Simpan Data Di Cookie Storage Perusahaan dan Karyawan ========
//======================================================================

const flashstorage = $('.alert-storage').data('flashdata');
if(flashstorage){
     function setCookie(name,value,days) {
          var expires = "";
          if (days) {
              var date = new Date();
              date.setTime(date.getTime() + (days*24*60*60*1000));
              expires = "; expires=" + date.toUTCString();
          }
          document.cookie = name + "=" + (value || "")  + expires + "; path=/";

          document.cookie = "date-cookie-storage" + "=" + (date.toUTCString() || "")  + expires + "; path=/";
    
     }
       var myItem = flashstorage;
       setCookie('cookie-storage', myItem, 1);
}

//======================================================================
//======================== Alert Login Berhasil ========================
//======================================================================

const loginPerhasil = $('.alert-login-berhasil').data('flashdata');
     if (loginPerhasil) {
          // alert(flashdata);
          Swal.fire({
               position: 'middle',
               icon: 'success',
               title: 'Berhasil ' + loginPerhasil,
               showConfirmButton: false,
               timer: 2900,
               
          });
          setTimeout(
               function(){ 
                    window.location = "/";
                    sessionStorage.clear()
               }, 2000);
          
          // window.location.href = "http://127.0.0.1:8000/dashboard-panel";
          
                // Swal.fire('Any fool can use a computer')
}

//======================================================================
//==================== Alert Hapus Resign Karyawan =====================
//======================================================================


$('.hapus_users').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus-users").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});


//======================================================================
//=========================== Log Out ==================================
//======================================================================

$('.alert-logout').on('click', function(e) {
     e.preventDefault();
     const href = $(this).attr('href')
 
     Swal.fire({
         title: 'Sure Logout ?',
         text: "will be directed to login",
         icon: 'question',
         showCancelButton: false,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Yes'
     }).then((result) => {
         if (result.isConfirmed) {
             document.location.href = href;
         }
     })
 });

 //======================================================================
//======================== modal edit gaji ==========================
//======================================================================

$('.view_edit_user').click(function(){
     const id_user = $(this).data('id_user');


     $('#id_user').val(id_user)
     // $('.data_gaji').val(data_gaji)

     $("#modal-edit-user").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $('#modal-edit-user').modal('show')
})


//======================================================================
//==================== Alert Hapus Resign Karyawan =====================
//======================================================================


$('.hapus_buku').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus-Buku").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});


$('.hapus_pengarang').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus-pengarang").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});


//======================================================================
//========================== Pilih Pengarang ===========================
//======================================================================
     
$('.pilih_pengarang').change(function(){
     if ($(this).val() != "") {
          $('#buku').attr('disabled', false);
          $('#date').attr('disabled', false);
          $('#total').attr('disabled', false);
          $('#tombol').attr('disabled', false);
          $('.tidakinfoo').text('');
          $('.infoo').text('Form Input Buku Sudah Bisa di Isi');
          

          // $('.tidakinfoo').text('Info MI.!! Form Input Yang Tidak Bisa di Edit Di Abaikan Saja');

     }
})
























      // angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
        $(document).ready(function(){
          setTimeout(function(){
            
               $("#update_data_perusahaan").modal({
                    backdrop: 'static',
                    keyboard: true
               }); 
               $('#update_data_perusahaan').modal('show');
          }, 200);
        });

      // angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
     //  setTimeout(function(){
     //    $('#myModal').modal('hide');
     //  }, 3000);


     $(document).ready(function(){
     setTimeout(function(){
          
          $("#update_data_saya").modal({
               backdrop: 'static',
               keyboard: true
          }); 
          $('#update_data_saya').modal('show');
     }, 200);
     });

//======================================================================
//======================== Alert Token =================================
//======================================================================


const flashToken = $('.alert-token').data('flashdata');
     if (flashToken) {
          // alert(flashdata);
          Swal.fire({
               position: 'middle',
               icon: 'success',
               title: 'Berhasil ' + flashToken,
               showConfirmButton: false,
               timer: 2900
          });
          // Swal.fire('Any fool can use a computer')
}

//======================================================================
//======================== Alert Hapus Per Tunjangan ===================
//======================================================================


$('.hapus_per_tunjangan').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_per_tunjangan").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== modal buat tunjangan ========================
//======================================================================

$('.view_tunjangan_buat').click(function(){
     const data_id = $(this).data('id');
     const data_nama = $(this).data('nama');
     // alert(data_id)

     $('#data_id_create_view').val(data_id)
     $('#data_nama_create_view').val(data_nama)

     

     $('#modal-tunjanganbuat').modal('show')
})

//======================================================================
//======================== modal buat tunjangan ========================
//======================================================================

$('.view_tunjangan_buat_').click(function(){
     const data_id = $(this).data('id');
     const data_nama = $(this).data('nama');
     // alert(data_id)

     $('#data_id_').val(data_id)
     $('#data_nama').val(data_nama)

     

     $('#modal-tunjanganbuat_').modal('show')
})

//======================================================================
//======================== modal edit Tunjangan ==========================
//======================================================================

$('.view_edit_Tunjangan').click(function(){
     const data_nama_lengkap_tunjangan_edit = $(this).data('nama_lengkap');
     const data_id_tunjangan_edit = $(this).data('id');
     const data_jabatan_tunjangan_edit = $(this).data('jabatan');
     const data_kendaraan_tunjangan_edit = $(this).data('kendaraan');
     const data_lain_tunjangan_edit = $(this).data('lain');

     // alert()

     $('#data_nama_lengkap_tunjangan_edit').val(data_nama_lengkap_tunjangan_edit)
     $('#data_id_tunjangan_edit').val(data_id_tunjangan_edit)
     $('#data_jabatan_tunjangan_edit').val(data_jabatan_tunjangan_edit)
     $('#data_kendaraan_tunjangan_edit').val(data_kendaraan_tunjangan_edit)
     $('#data_lain_tunjangan_edit').val(data_lain_tunjangan_edit)

     $("#modal-tunjanganedit").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $('#modal-tunjanganedit').modal('show')
})

//======================================================================
//====================== Alert Hapus Tunjangan =========================
//======================================================================


$('.hapus_tunjangan').on('click', function(e) {
     e.preventDefault();
     const hrefUrl= $(this).attr('href')
   
     // $("#model_hapus").modal('show')
     $("#btn-yes_hapus_tunjangan").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl;
     });

});

//======================================================================
//======================== Alert Hapus Per Jabatan =====================
//======================================================================


$('.hapus_per_jabatan').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_per_jabatan").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== Alert Hapus Jabatan =========================
//======================================================================


$('.hapus_jabatan').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_jabatan").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== modal edit jabatan ==========================
//======================================================================

$('.view_edit_jabatan').click(function(){
     const data_id_jabatan = $(this).data('id');
     const data_jabatan = $(this).data('jabatan');
     // alert(data_jabatan)

     $('#data_id_jabatan').val(data_id_jabatan)
     $('#data_jabatan').val(data_jabatan)

     $("#modal-edit-jabatan").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $('#modal-edit-jabatan').modal('show')
})

//======================================================================
//======================== Alert Hapus Penempatan =========================
//======================================================================


$('.hapus_penempatan').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_penempatan").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== modal edit penempatan ==========================
//======================================================================

$('.edit-penempatan').click(function(){
     const data_id = $(this).data('id');
     const data_alamat = $(this).data('alamat');
     const data_provinsi = $(this).data('provinsi');
     const data_kota = $(this).data('kota');
     const data_kabupaten = $(this).data('kabupaten');
     const data_kelurahan = $(this).data('kelurahan');
     
     const data_kecamatan = $(this).data('kecamatan');
     const data_alokasi = $(this).data('alokasi');
     const data_kode_alokasi = $(this).data('kode_alokasi');
     const data_kode_status_th = $(this).data('status_th');

     $('#data_id_edit_penempatan').val(data_id)
     $('#data_alamat').val(data_alamat)
     $('#data_provinsi').val(data_provinsi)
     $('#data_kota').val(data_kota)

     $('#data_kabupaten').val(data_kabupaten)
     $('#data_kelurahan').val(data_kelurahan)
     $('#data_kecamatan').val(data_kecamatan)
     $('#data_alokasi').val(data_alokasi)
     $('#data_kode_alokasi').val(data_kode_alokasi)
     $('#data_kode_status_th').val(data_kode_status_th)

     // alert(data_id)

})

//======================================================================
//===================== modal lihat kontrak habis ======================
//======================================================================

$('.lihat-kontrak-habis').click(function(){
     const data_id = $(this).data('id');
     const data_nama = $(this).data('nama');
     const data_nik = $(this).data('nik');
     const data_jenis = $(this).data('jenis');
     const data_tanggal_akhir = $(this).data('tanggal_akhir');

     $('#data_lihat_id_habis').val(data_id)
     $('#data_lihat_nama_habis').text(data_nama)
     $('#data_lihat_nik_habis').text(data_nik)
     $('#data_lihat_jenis_habis').text(data_jenis)
     $('#data_lihat_tanggal_akhir_habis').text(data_tanggal_akhir)
     // $('.data_gaji').val(data_gaji)

     // $("#modal-edit-gaji").modal({
     //      backdrop: 'static',
     //      keyboard: true
     // }); 

     $('#lihat-kontrak-habis').modal('show')
})

//======================================================================
//===================== modal lihat kontrak deadline ===================
//======================================================================

$('.lihat-kontrak-deadline').click(function(){
     const data_id = $(this).data('id');
     const data_nama = $(this).data('nama');
     const data_nik = $(this).data('nik');
     const data_jenis = $(this).data('jenis');
     const data_tanggal_akhir = $(this).data('tanggal_akhir');

     $('#data_lihat_id_deadline').val(data_id)
     $('#data_lihat_nama_deadline').text(data_nama)
     $('#data_lihat_nik_deadline').text(data_nik)
     $('#data_lihat_jenis_deadline').text(data_jenis)
     $('#data_lihat_tanggal_akhir_deadline').text(data_tanggal_akhir)
     // $('.data_gaji').val(data_gaji)

     // $("#modal-edit-gaji").modal({
     //      backdrop: 'static',
     //      keyboard: true
     // }); 

     $('#lihat-kontrak-deadline').modal('show')
})

//======================================================================
//=================== modal edit kontrak Deadline ======================
//======================================================================

$('.view_edit_kontrak_deadline').click(function(){
     const data_nama_kontrak_deadline = $(this).data('nama');
     const data_id_kontrak_deadline = $(this).data('id');
     const data_tanggal_awal_kontrak_deadline = $(this).data('tanggal_awal');
     const data_tanggal_akhir_kontrak_deadline = $(this).data('tanggal_akhir');
     const data_jenis_kontrak_deadline = $(this).data('jenis');

     $('#data_nama_kontrak_deadline').val(data_nama_kontrak_deadline)
     $('#data_id_kontrak_deadline').val(data_id_kontrak_deadline)
     $('#data_tanggal_awal_kontrak_deadline').val(data_tanggal_awal_kontrak_deadline)
     $('#data_tanggal_akhir_kontrak_deadline').val(data_tanggal_akhir_kontrak_deadline)
     $('#data_jenis_kontrak_deadline').val(data_jenis_kontrak_deadline)

     $("#modal-edit-kontrak-deadline").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $('#modal-edit-kontrak-deadline').modal('show')
})


//======================================================================
//===================== modal lihat kontrak semua ===================
//======================================================================

$('.lihat-kontrak-semua').click(function(){
     const data_id = $(this).data('id');
     const data_nama = $(this).data('nama');
     const data_nik = $(this).data('nik');
     const data_jenis = $(this).data('jenis');
     const data_tanggal_akhir = $(this).data('tanggal_akhir');
    
     // alert(data_id)
     $('#data_lihat_id_semua').val(data_id)
     $('#data_lihat_nama_semua').text(data_nama)
     $('#data_lihat_nik_semua').text(data_nik)
     $('#data_lihat_jenis_semua').text(data_jenis)
     $('#data_lihat_tanggal_akhir_semua').text(data_tanggal_akhir)
     // $('.data_gaji').val(data_gaji)

     // $("#modal-edit-gaji").modal({
     //      backdrop: 'static',
     //      keyboard: true
     // }); 

     $('#lihat-kontrak-semua-').modal('show')
})

//======================================================================
//=================== modal edit kontrak Deadline ======================
//======================================================================

$('.view_edit_kontrak_semua').click(function(){
     const data_nama_kontrak_semua = $(this).data('nama');
     const data_id_kontrak_semua = $(this).data('id');
     const data_tanggal_awal_kontrak_semua = $(this).data('tanggal_awal');
     const data_tanggal_akhir_kontrak_semua = $(this).data('tanggal_akhir');
     const data_jenis_kontrak_semua = $(this).data('jenis');

     $('#data_nama_kontrak_semua').val(data_nama_kontrak_semua)
     $('#data_id_kontrak_semua').val(data_id_kontrak_semua)
     $('#data_tanggal_awal_kontrak_semua').val(data_tanggal_awal_kontrak_semua)
     $('#data_tanggal_akhir_kontrak_semua').val(data_tanggal_akhir_kontrak_semua)
     $('#data_jenis_kontrak_semua').val(data_jenis_kontrak_semua)

     $("#modal-edit-kontrak-semua").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $('#modal-edit-kontrak-semua').modal('show')
})


//======================================================================
//======================== modal lihat kontrak ==========================
//======================================================================

$('.lihat-kontrak-aktif').click(function(){
     const data_id = $(this).data('id');
     const data_nama = $(this).data('nama');
     const data_nik = $(this).data('nik');
     const data_jenis = $(this).data('jenis');
     const data_tanggal_akhir = $(this).data('tanggal_akhir');

     $('#data_lihat_id').val(data_id)
     $('#data_lihat_nama').text(data_nama)
     $('#data_lihat_nik').text(data_nik)
     $('#data_lihat_jenis').text(data_jenis)
     $('#data_lihat_tanggal_akhir').text(data_tanggal_akhir)
     // $('.data_gaji').val(data_gaji)

     // $("#modal-edit-gaji").modal({
     //      backdrop: 'static',
     //      keyboard: true
     // }); 

     $('#lihat-kontrak').modal('show')
})





$(document).ready(function() {
     $('#example').DataTable();
 } );

//======================================================================
//=================== modal edit tambah karyawan =======================
//======================================================================

$('.tambah-karyawan_').click(function(){
     const data_id = $(this).data('id');
     const id_akses = $(this).data('id_akses');
     

     $('#data_id_tambah_k').val(data_id)
     $('#id_akses_tambah_k').val(id_akses)
})

//======================================================================
//============================= modal pesan ============================
//======================================================================

$('.pesan').click(function(){
     const data_id = $(this).data('id');

     $('#data_id_aply').val(data_id)
})

//======================================================================
//=========================== orang tua ================================
//======================================================================

$('.edit-orang-tua').click(function(){
     const id = $(this).data('id');
     const id_akun = $(this).data('id_akun');
     const hubungan = $(this).data('hubungan');
     const nama_lengkap = $(this).data('nama_lengkap');
     const tempat_lahir = $(this).data('tempat_lahir');
     const tanggal_lahir = $(this).data('tanggal_lahir');
     
     const agama = $(this).data('agama');
     const alamat_ktp = $(this).data('alamat_ktp');
     const provinsi_ktp = $(this).data('provinsi_ktp');

     const kota_ktp = $(this).data('kota_ktp');
     const kabupaten_ktp = $(this).data('kabupaten_ktp');
     const kecamatan_ktp = $(this).data('kecamatan_ktp');
     const kelurahan_ktp = $(this).data('kelurahan_ktp');
     const no_hp = $(this).data('no_hp');
     // alert(nama_lengkap)
     $('#id').val(id)
     $('#id_akun').val(id_akun)
     $('#hubungan').val(hubungan)
     $('#nama_lengkap_').val(nama_lengkap)

     $('#tempat_lahir_').val(tempat_lahir)
     $('#tanggal_lahir_').val(tanggal_lahir)
     $('#agama').val(agama)
     $('#alamat_ktp').val(alamat_ktp)
     $('#provinsi_ktp').val(provinsi_ktp)
     $('#kota_ktp').val(kota_ktp)

     $('#kabupaten_ktp').val(kabupaten_ktp)
     $('#kecamatan_ktp').val(kecamatan_ktp)
     $('#kelurahan_ktp').val(kelurahan_ktp)
     $('#no_hp').val(no_hp)

     // alert(hubungan)

})

//======================================================================
//======================== Alert Hapus Orang Tua Ayah ========================
//======================================================================


$('.hapus_ayah').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#hapus_ayah").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== modal edit gaji =============================
//======================================================================

$('.detail-karyawan').click(function(){
     const data_nik = $(this).data('nik');
     const data_show_pass = $(this).data('show_pass');
     const data_nama_lengkap = $(this).data('nama_lengkap');
     const data_nama_panggilan = $(this).data('nama_panggilan');
     const data_tempat_lahir = $(this).data('tempat_lahir');
     const data_tanggal_lahir = $(this).data('tanggal_lahir');
     const nikk = $(this).data('nikk');
     const emaill = $(this).data('email');
     const agama = $(this).data('agama');
     const jenis_kelamin = $(this).data('jenis_kelamin');
     const status_perkawinan = $(this).data('status_perkawinan');
     const tinggi_badan = $(this).data('tinggi_badan');
     const berat_badan = $(this).data('berat_badan');
     const golongan_darah = $(this).data('golongan_darah');
     const suku = $(this).data('suku');
     const total_saudara = $(this).data('total_saudara');
     const alamat_ktp = $(this).data('alamat_ktp');
     const provinsi_ktp = $(this).data('provinsi_ktp');
     const kota_ktp = $(this).data('kota_ktp');
     const kabupaten_ktp = $(this).data('kabupaten_ktp');
     const kecamatan_ktp = $(this).data('kecamatan_ktp');
     const kelurahan_ktp = $(this).data('kelurahan_ktp');
     const alamat_domisili = $(this).data('alamat_domisili');
     const provinsi_domisili = $(this).data('provinsi_domisili');
     const kota_domisili = $(this).data('kota_domisili');
     const kabupaten_domisili = $(this).data('kabupaten_domisili');
     const kecamatan_domisili = $(this).data('kecamatan_domisili');
     const kelurahan_domisili = $(this).data('kelurahan_domisili');
     const instagram = $(this).data('instagram');
     const nomor_whatsapp = $(this).data('nomor_whatsapp');
     const nomor_hp = $(this).data('nomor_hp');
     const cerita_diri = $(this).data('cerita_diri');
     const data_orang_tua = $(this).data('data_orang_tua');
     

     $('#data_nik').text(data_nik)
     $('#data_show_pass').text(data_show_pass)
     $('#data_nama_lengkap').text(data_nama_lengkap)
     $('#data_nama_panggilan').text(data_nama_panggilan)
     $('#data_tempat_lahir').text(data_tempat_lahir)
     $('#data_tanggal_lahir').text(data_tanggal_lahir)
     $('#nikk').text(nikk)
     $('#emaill').text(emaill)
     $('#agama').text(agama)
     $('#jenis_kelamin').text(jenis_kelamin)
     $('#status_perkawinan').text(status_perkawinan)
     $('#tinggi_badan').text(tinggi_badan)
     $('#berat_badan').text(berat_badan)
     $('#golongan_darah').text(golongan_darah)
     $('#suku').text(suku)
     $('#total_saudara').text(total_saudara)
     $('#alamat_ktp').text(alamat_ktp)
     $('#provinsi_ktp').text(provinsi_ktp)
     $('#kota_ktp').text(kota_ktp)
     $('#kabupaten_ktp').text(kabupaten_ktp)
     $('#kecamatan_ktp').text(kecamatan_ktp)
     $('#kelurahan_ktp').text(kelurahan_ktp)
     $('#alamat_domisili').text(alamat_domisili)
     $('#provinsi_domisili').text(provinsi_domisili)
     $('#kota_domisili').text(kota_domisili)
     $('#kabupaten_domisili').text(kabupaten_domisili)
     $('#kecamatan_domisili').text(kecamatan_domisili)
     $('#kelurahan_domisili').text(kelurahan_domisili)
     $('#instagram').text(instagram)
     $('#nomor_whatsapp').text(nomor_whatsapp)
     $('#nomor_hp').text(nomor_hp)
     $('#cerita_diri').text(cerita_diri)

     $('#data_orang_tua').text(data_orang_tua)
     // $('.data_gaji').val(data_gaji)

     // $("#modal-edit-gaji").modal({
     //      backdrop: 'static',
     //      keyboard: true
     // }); 

     // $('#modal-edit-gaji').modal('show')
})

//======================================================================
//==================== ambil id perusahaan di modal ====================
//======================================================================


$('.view_data').click(function(){
     const data_id  = $(this).data('flashdata')
        
     $("#data_id").val(data_id);

     $("#modal-create-karyawan").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $("#modal-create-karyawan").modal('show')

   })

//======================================================================
//===================== modal tidak ada kontrak ========================
//======================================================================


$('.view_model_kontrak').click(function(){
     const data_id       = $(this).data('flashdata')
     const data_nama     = $(this).data('nama')
        
     $("#data_id_").val(data_id);
     $("#data_nama").val(data_nama);

     // alert(data_id)

     $("#modal-kontrak").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $("#modal-kontrak").modal('show')

   })

//======================================================================
//======================== modal edit kontrak ==========================
//======================================================================

$('.view_edit_kontrak_aktif').click(function(){
     const data_nama_kontrak_aktif = $(this).data('nama');
     const data_id_kontrak_aktif = $(this).data('id');
     const data_tanggal_awal_kontrak_aktif = $(this).data('tanggal_awal');
     const data_tanggal_akhir_kontrak_aktif = $(this).data('tanggal_akhir');
     const data_jenis_kontrak_aktif = $(this).data('jenis');

     $('#data_nama_kontrak_aktif').val(data_nama_kontrak_aktif)
     $('#data_id_kontrak_aktif').val(data_id_kontrak_aktif)
     $('#data_tanggal_awal_kontrak_aktif').val(data_tanggal_awal_kontrak_aktif)
     $('#data_tanggal_akhir_kontrak_aktif').val(data_tanggal_akhir_kontrak_aktif)
     $('#data_jenis_kontrak_aktif').val(data_jenis_kontrak_aktif)

     $("#modal-edit-kontrak-aktif").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $('#modal-edit-kontrak-aktif').modal('show')
})

//======================================================================
//===================== modal create baru kontrak ======================
//======================================================================


$('.view_model_kontrak_semua').click(function(){
     const data_id       = $(this).data('flashdata')
     const data_nama     = $(this).data('nama')
        
     $("#data_id_create_baru").val(data_id);
     $("#data_nama_create_baru").val(data_nama);

     $("#modal-kontrak-semua").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $("#modal-kontrak-semua").modal('show')

   })


//======================================================================
//===================== modal semua kontrak ========================
//======================================================================


$('.view_model_kontrak_semua').click(function(){
     const data_id       = $(this).data('flashdatasemua')
     const data_nama     = $(this).data('namasemua')
        
     $("#data_id_semua").val(data_id);
     $("#data_nama_semua").val(data_nama);

     $("#modal-kontrak-semua").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $("#modal-kontrak-semua").modal('show')

   })

//======================================================================
//======================= modal lihat kontrak ==========================
//======================================================================


$('.view_model_lihat_kontrak').click(function(){
     // const data_id       = $(this).data('flashdatasemua')
     // const data_nama     = $(this).data('namasemua')
        
     // $("#data_id_semua").val(data_id);
     // $("#data_nama_semua").val(data_nama);

     $("#modal-lihat-kontrak").modal({
          backdrop: 'static',
          keyboard: true
     }); 

     $("#modal-lihat-kontrak").modal('show')

   })

//======================================================================
//=============== ambil id perusahaan di modal exel ====================
//======================================================================


$('.view_data_exel').click(function(){
     const data_id  = $(this).data('flashdata')
        
     $("#data_id_upload_exel_karyawan").val(data_id);

     $("#modal-create-karyawan-exel").modal({
               backdrop: 'static',
               keyboard: true
     }); 

     $("#modal-create-karyawan-exel").modal('show')
     // $('#modal-create-karyawan-exel').modal({backdrop: 'static', keyboard: false})  

   })


//======================================================================
//=========================== insentif modal exel ======================
//======================================================================


$('.view_data_exel_kpi').click(function(){
     const data_id  = $(this).data('flashdata')
        
     $("#data_id").val(data_id);

     $("#modal-create-karyawan-exel").modal({
               backdrop: 'static',
               keyboard: true
     }); 

     $("#modal-create-kpi-exel").modal('show')
     // $('#modal-create-karyawan-exel').modal({backdrop: 'static', keyboard: false})  

   })

//======================================================================
//========== Peringatan Success Pada Upload Data Diri ==================
//======================================================================

const flash_alert_success = $('.alert-success').data('flashdata');
     if (flash_alert_success) {
          // alert(flashdata);
          Swal.fire({
               position: 'middle',
               icon: 'success',
               position: 'top-end',
               title: 'Berhasil ' + flash_alert_success,
               showConfirmButton: false,
               timer: 4000
          });
          // Swal.fire('Any fool can use a computer')
}

//======================================================================
//========== Peringatan Warning Pada Upload Data Diri ==================
//======================================================================

const flash_alert_peringatan = $('.alert-peringatan').data('flashdata');
     if (flash_alert_peringatan) {
          // alert(flashdata);
          Swal.fire({
               position: 'middle',
               icon: 'warning',
               position: 'middle',
               title: 'Warning ' + flash_alert_peringatan,
               showConfirmButton: false,
               timer: 7000
          });
          // Swal.fire('Any fool can use a computer')
}

//======================================================================
//====================== Alert Create Storage ==========================
//======================================================================

// const flashstorage = $('.alert-storage').data('flashdata');
     // if (flashstorage) {
          // localStorage.setItem('test', flashstorage);
          // var alertLocalStorage = localStorage.getItem('test');
          
          // alert(localStorage.getItem('test'));
          // if(alertLocalStorage != "undefined")
		// else 
		// console.log("opps");         
// }

//======================================================================
//==================== get data local storage ==========================
//======================================================================

// const localAmbil = localStorage.getItem('test');
// if(localAmbil){
//      alert(localAmbil);
//      local=JSON.stringify(localAmbil)
//      $('#cek').val(local);
//      $("input:text").val("Glenn Quagmire");
//      document.getElementById("cek").innerHTML = localAmbil;
// }

//======================================================================
//======================= modal data perusahaan ========================
//======================================================================

// $('#modal').modal('show');




//======================================================================
//============================ alert whatsapp ==========================
//======================================================================

// const flashwhatsapp = $('.alert-whatsapp').data('flashdata');
// if(flashwhatsapp){
//      console.log(flashwhatsapp);6285298973663
//       window.open('https://api.whatsapp.com/send?phone=' + flashwhatsapp + '&text=' + "I Miss U", '_blank');
       
// }


//======================================================================
//================= Simpan Data Di Cookie Storage User =================
//======================================================================

const flashstorageUser = $('.alert-storage-user').data('flashdata');
var expires = "";
     if(flashstorageUser){
          function setCookie(name,value,days) {
               
               if (days) {
                   var date = new Date();
                   date.setTime(date.getTime() + (days*24*60*60*1000));
                   expires = "; expires=" + date.toUTCString();
               }
               document.cookie = name + "=" + (value || "")  + expires + "; path=/";

               document.cookie = "date-cookie-storage-user" + "=" + (date.toUTCString() || "")  + expires + "; path=/";
          }
            var myItemUser = flashstorageUser;
            setCookie('cookie-storage-user', myItemUser, 1);

            
          //   -------------------------------------------------------
            
     }



//======================================================================
//======================== Alert Login Berhasil User ===================
//======================================================================

const loginPerhasiluser = $('.alert-login-berhasil-user').data('flashdata');
     if (loginPerhasiluser) {
          // alert(flashdata);
          Swal.fire({
               position: 'middle',
               icon: 'success',
               title: 'Berhasil ' + loginPerhasiluser,
               showConfirmButton: false,
               timer: 2900,
               
          });
          setTimeout(
               function(){ 
                    window.location = "/rekrutmen";
                    sessionStorage.clear()
               }, 2000);
          
          // window.location.href = "http://127.0.0.1:8000/dashboard-panel";
          
                // Swal.fire('Any fool can use a computer')
}

//======================================================================
//============= Alert Login Berhasil Upload Data User ==================
//======================================================================

const registBerhasiluser = $('.alert-regist-berhasil-user').data('flashdata');
     if (registBerhasiluser) {
          // alert(flashdata);
          Swal.fire({
               position: 'middle',
               icon: 'success',
               title: 'Berhasil ' + registBerhasiluser,
               showConfirmButton: false,
               timer: 2900,
               
          });
          setTimeout(
               function(){ 
                    window.location = "/login-user";
                    sessionStorage.clear()
               }, 4000);
          
          // window.location.href = "http://127.0.0.1:8000/dashboard-panel";
          
                // Swal.fire('Any fool can use a computer')
}

//======================================================================
//============= Alert Login Berhasil Upload Data User ==================
//======================================================================

const registBerhasilPerusahaan = $('.alert-regist-berhasil-perusahaan').data('flashdata');
     if (registBerhasilPerusahaan) {
          // alert(flashdata);
          Swal.fire({
               position: 'middle',
               icon: 'success',
               title: 'Berhasil ' + registBerhasilPerusahaan,
               showConfirmButton: false,
               timer: 2900,
               
          });
          setTimeout(
               function(){ 
                    window.location = "/login-dashboard";
                    sessionStorage.clear()
               }, 4000);
          
          // window.location.href = "http://127.0.0.1:8000/dashboard-panel";
          
                // Swal.fire('Any fool can use a computer')
}




//======================================================================
//================== Klik Persetujuan Kirim Data =======================
//======================================================================

// const btnUpload = document.getElementById("btnKirim");
// const formUpload = document.getElementById("formUploadData");

$('.button-klik').on('click', function(e){
    e.preventDefault();
    Swal.fire({
          position: 'middle',
          icon: 'success',
          title:'Cek Kembali Datanya!',
          text: 'Info : Karna Data Tidak Bisa di Edit Lagi Kalau Sudah di Kirim',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!'
     }).then((result) => {
          if (result.isConfirmed) {
               $('.form-klik').submit()
          }
     })
     // text: "<p style='color: #ffcc00;'>Info : Karna Data Tidak Bisa di Edit Lagi Kalau Sudah di Submit</p>",

});

//======================================================================
//===================== Alert Hapus Orang Tua Ayah =====================
//======================================================================


$('.hapus_formal').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#hapus_formal").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//====================== edit pendidikan formal ========================
//======================================================================

$('.edit-pendidikan-formal').click(function(){
     const id = $(this).data('id');
     const pendidikan = $(this).data('pendidikan');
     const gelar = $(this).data('gelar');
     const nama_univ = $(this).data('nama_univ');
     const akredi_univ = $(this).data('akredi_univ');
     const jurusan = $(this).data('jurusan');
     
     const akredi_jur = $(this).data('akredi_jur');
     const mulai_studi = $(this).data('mulai_studi');
     const akhir_studi = $(this).data('akhir_studi');

     const nilai = $(this).data('nilai');
     const no_ijazah = $(this).data('no_ijazah');
     const ijazah = $(this).data('ijazah');
     const transkrip = $(this).data('transkrip');

     // alert(id)
     $('#id-dashboard').val(id)
     $('#pendidikan-dashboard').val(pendidikan)
     $('#gelar').val(gelar)
     $('#nama_univ-dashboard').val(nama_univ)

     $('#akreditasi_universitas').val(akredi_univ)
     $('#jurusan').val(jurusan)
     $('#akreditasi_jurusan').val(akredi_jur)
     $('#mulai_studi-dashboard').val(mulai_studi)
     $('#akhir_studi-dashboard').val(akhir_studi)
     $('#nilai-dashboard').val(nilai)

     $('#no_ijazah').val(no_ijazah)

     $('#ijazah').val(ijazah)
     $('#transkrip').val(transkrip)

     // alert(hubungan)

})



     $('.form-clickk').submit(function(){
          $('#gelar').removeAttr('disabled');
          $('#akreditasi_universitas').removeAttr('disabled');
          $('#jurusan').removeAttr('disabled');
          $('#akreditasi_jurusan').removeAttr('disabled');
     })



//======================================================================
//============================ Alert Hapus =============================
//======================================================================


$('.non').on('click', function(e) {
     e.preventDefault();
     const hrefUrl= $(this).attr('href')
   
     // $("#model_hapus").modal('show')
     $("#btn-yes").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl;
     });

});

//======================================================================
//============================ Alert resaign Non ===========================
//======================================================================


$('.resaign_non').on('click', function(e) {
     e.preventDefault();
     const hrefUrl= $(this).attr('href')

     
   
     $("#btn-yes-resaign_non").on("click", function(e){
          e.preventDefault();
          // console.log(hrefUrl);
          document.location.href=hrefUrl;
     });

});

//======================================================================
//============================ Alert resaign ===========================
//======================================================================


$('.resaign').on('click', function(e) {
     e.preventDefault();
     const hrefUrl= $(this).attr('href')

     
   
     $("#btn-yes-resaign").on("click", function(e){
          e.preventDefault();
          // console.log(hrefUrl);
          document.location.href=hrefUrl;
     });

});

//======================================================================
//======================== Alert Aktifkan Non Karyawan ========================
//======================================================================


$('.aktif_non').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-aktif_non").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== Alert Aktif Resign Karyawan ========================
//======================================================================


$('.aktif_resign').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-aktif_btn-aktif").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//==================== Alert hapus Tidak aktif Karyawan =====================
//======================================================================


$('.hapus_non').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_non").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});



//======================================================================
//======================== Alert Hapus Karyawan ========================
//======================================================================


$('.hapus_').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== Alert Hapus Semua Karyawan ========================
//======================================================================


$('.hapus_semua').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_semua").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== Alert expired users =========================
//======================================================================


$('.expired_users').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-expired").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== Alert Hapus Lowongan ========================
//======================================================================


$('.hapus_lowongan').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_lowongan").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== modal edit Lowongan =========================
//======================================================================

$('.view_edit_lowongan').click(function(){
     const idlowongan = $(this).data('idlowongan');
     const judullowongan = $(this).data('judul');
     const deskripsilowongan = $(this).data('deskripsi');
     const tgl_bukalowongan = $(this).data('tgl_buka');
     const tgl_tutuplowongan = $(this).data('tgl_tutup');

     // alert(idlowongan)

     $('#idlowongan').val(idlowongan)
     $('#judullowongan').val(judullowongan)
     $('#deskripsilowongan').val(deskripsilowongan)
     $('#tgl_bukalowongan').val(tgl_bukalowongan)
     $('#tgl_tutuplowongan').val(tgl_tutuplowongan)

     // $("#modal-tunjanganedit").modal({
     //      backdrop: 'static',
     //      keyboard: true
     // }); 

     // $('#modal-tunjanganedit').modal('show')
})

//======================================================================
//======================== modal lihat Lowongan ========================
//======================================================================

$('.view_lihat_lowongan').click(function(){
     const idlowongan = $(this).data('idlowongan');
     const judullowongan = $(this).data('judul');
     const deskripsilowongan = $(this).data('deskripsi');
     const tgl_bukalowongan = $(this).data('tgl_buka');
     const tgl_tutuplowongan = $(this).data('tgl_tutup');
     const gambar = $(this).data('gambar');


     $('#idlowongan_lihat').val(idlowongan)
     $('#judullowongan_lihat').text(judullowongan)
     $('#deskripsilowongan_lihat').text(deskripsilowongan)
     $('#tgl_bukalowongan_lihat').text(tgl_bukalowongan)
     $('#tgl_tutuplowongan_lihat').text(tgl_tutuplowongan)
     $('#gambar').text(gambar)

     // $("#modal-tunjanganedit").modal({
     //      backdrop: 'static',
     //      keyboard: true
     // }); 

     $('#detail-lowongan').modal('show')
})

//======================================================================
//=========================== Alert Hapus Akun =========================
//======================================================================


$('.hapus_akun').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_akun").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//======================== Alert Hapus Lowongan ========================
//======================================================================


$('.hapus_orang_users').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-hapus_orang_users").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});


//======================================================================
//========================== detail karyawan ===========================
//======================================================================

// $('.detail-karyawan').click(function(){
//      const data_id = $(this).data('id');
//      const token = $(this).data('token');


     
//      $.ajax({
//           url: "/dashboard-panel/detail-karyawan",
//           type:"POST",
//           data:{
//                data_id:data_id,        
//           _token: token
//           },
//           success:function(response){
//           if(response) {
//           $('.success').text(response.success);
          
//           }
//           },
//           error: function(error) {
//           console.log(error);
//           }
//      });

//      // location.reload();
// })

//======================================================================
//======================== status akun perusahaan ======================
//======================================================================


function myFunctionn() {

     // alert("sdhs")
     
     $('input[type="checkbox"]').change(function(){

          const token= $('#token').val();
          const id_status = $(this).data('id');
          let name="";
          
         if($(this).prop("checked") == true){
               name ="aktif";
         }
         else if($(this).prop("checked") == false){
               name ="tidak";
         }
     //     alert(name)
         
          $.ajax({
               url: "/dashboard-panel/status-perusahaan",
               type:"POST",
               data:{
               name:name,
               id_status : id_status,           
               _token: token
               },
               success:function(response){
               if(response) {
               $('.success').text(response.success);
               
               }
               },
               error: function(error) {
               console.log(error);
               }
          });

          location.reload();
     
   });

}

//======================================================================
//============================ status akun =============================n
//======================================================================


function myFunction_akun() {
     $('input[type="checkbox"]').change(function(){

          const token= $('#token').val();
          const id_status = $(this).data('id');
          let name="";
          
         if($(this).prop("checked") == true){
               name ="aktif";
         }
         else if($(this).prop("checked") == false){
               name ="tidak";
         }
     //     alert(name)
         
          $.ajax({
               url: "/dashboard-panel/status-akun",
               type:"POST",
               data:{
               name:name,
               id_status : id_status,           
               _token: token
               },
               success:function(response){
               if(response) {
               $('.success').text(response.success);
               
               }
               },
               error: function(error) {
               console.log(error);
               }
          });

          location.reload();
     
   });

}

//======================================================================
//============================ aktive menu =============================
//======================================================================

$(function(){
     // this will get the full URL at the address bar
     var url = window.location.href; 
 
     // passes on every "a" tag 
     $("#sub-header a").each(function() {
             // checks if its the same on the address bar
         if(url == (this.href)) { 
             $(this).closest("a").addClass("bg-menu");
         }
     });
 });

//======================================================================
//======================== Hide and Show Password ======================
//======================================================================

     function myFunction() {
          var x = document.getElementById("password");           
          if (x.type === "password") {
               x.type = "text";
          } else {
               x.type = "password";
          }
     }

//======================================================================
//======================== Lihat Gambar ================================
//======================================================================

$("#preview_gambar").change(function(){
     bacaGambar(this);
  });

  function bacaGambar(input) {
     if (input.files && input.files[0]) {
        var reader = new FileReader();
   
        reader.onload = function (e) {
            $('#gambar_nodin').attr('src', e.target.result);
        }
   
        reader.readAsDataURL(input.files[0]);
     }
  }


//======================================================================
//======================== Lihat Gambar ================================
//======================================================================

$("#preview_gambar_perusahaan").change(function(){
     bacaGambarPerusahaan(this);
  });

  function bacaGambarPerusahaan(input) {
     if (input.files && input.files[0]) {
        var reader = new FileReader();
   
        reader.onload = function (e) {
            $('#gambar_nodin_perusahaan').attr('src', e.target.result);
        }
   
        reader.readAsDataURL(input.files[0]);
     }
  }

//======================================================================
//======================== notif panjang login =========================
//======================================================================

$('#nik').keyup(function() {
     var len = this.value.length;
     if (len > 16) {
          // this.value = this.value.substring(0, 150);
          $('#nik_error').text('Panjang Nik Maksimal 16 Krakter');
     }else{
          $('#nik_error').text('');
     }
});

$('#password').keyup(function() {
     var len = this.value.length;
     if (len > 18) {
          // this.value = this.value.substring(0, 150);
          $('#password_error').text('Panjang Karakter Harus 18 Krakter');
     }else{
          $('#password_error').text('');
     }
});

//======================================================================
//======================== Alert Local Storage =========================
//======================================================================

// const flashstorage = $('.alert-storage').data('flashdata');
//      if (flashstorage) {
          // alert(localStorage.removeItem('test'));
          // localStorage.removeItem('test'); 
          // localStorage.setItem('test', flashstorage);
          // var alertLocalStorage = localStorage.getItem('test');

          // if(alertLocalStorage != "undefined")
               
          //      alert(localStorage.getItem('test'));
		// else 
		// 	console.log("opps");
          
// }
// cookieStorage.removeItem('cookieName'); 

//======================================================================
//==================== Hapus data non formal ===========================
//======================================================================


$('.hapus_data_non_formal_').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn_data_non_formal_").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//========================= Hapus Data Diri ============================
//======================================================================


$('.hapus_data_diri_').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#hapus_data_diri").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });

});

//======================================================================
//=========================== Alert Data Diri ==========================
//======================================================================

// $('.form-clickk').change(function(){
//      if ($(this).val() == "MI") {

//       }
// })

$('.form-clickk').on('click', function(event){
     // event.preventDefault();
     var count_error = 0;

     if($('#nama_lengkap').val() == ''){
          $('#name_error').text('Nama Lengkap Wajib di Isi');
          count_error++;
     }else{
          $('#name_error').text('');
     }

     if($('#nik').val() == ''){
          $('#nik_error').text('Nik Lengkap Wajib di Isi');
          count_error++;
     }else{
          $('#nik_error').text('');
     }

     if($('#nama_panggil').val() == ''){
          $('#panggil_error').text('Nama Panggilan Wajib di Isi');
          count_error++;
     }else{
          $('#panggil_error').text('');
     }

     if($('#tempat_lahir').val() == ''){
          $('#tempat_error').text('Tempat Lahir Wajib di Isi');
          count_error++;
     }else{
          $('#tempat_error').text('');
     }

     if($('#tanggal_lahir').val() == ''){
          $('#tanggal_error').text('Tanggal Lahir Wajib di Isi');
          count_error++;
     }else{
          $('#tanggal_error').text('');
     }

     if($('#email').val() == ''){
          $('#email_error').text('Email Wajib di Isi');
          count_error++;
     }else{
          $('#email_error').text('');
     }

     if($('#agama').val() == ''){
          $('#agama_error').text('Agama Wajib di Isi');
          count_error++;
     }else{
          $('#agama_error').text('');
     }

     if($('#jenis_kelamin').val() == ''){
          $('#jenis_kelamin_error').text('Jenis Kelamin Wajib di Isi');
          count_error++;
     }else{
          $('#jenis_kelamin_error').text('');
     }

     if($('#status_kawin').val() == ''){
          $('#status_kawin_error').text('Status Kawin Wajib di Isi');
          count_error++;
     }else{
          $('#status_kawin_error').text('');
     }

     if($('#no_bpjs').val() == ''){
          $('#no_bpjs_error').text('No BPJS Wajib di Isi');
          count_error++;
     }else{
          $('#no_bpjs_error').text('');
     }

     if($('#tinggi_badan').val() == ''){
          $('#tinggi_badan_error').text('Tinggi Badan Wajib di Isi');
          count_error++;
     }else{
          $('#tinggi_badan_error').text('');
     }

     if($('#berat_badan').val() == ''){
          $('#berat_badan_error').text('Berat Badan Wajib di Isi');
          count_error++;
     }else{
          $('#berat_badan_error').text('');
     }

     if($('#golongan_darah').val() == ''){
          $('#golongan_darah_error').text('Golongan Darah Wajib di Isi');
          count_error++;
     }else{
          $('#golongan_darah_error').text('');
     }

     if($('#suku').val() == ''){
          $('#suku_error').text('Suku Wajib di Isi');
          count_error++;
     }else{
          $('#suku_error').text('');
     }

     if($('#total_saudara').val() == ''){
          $('#total_saudara_error').text('Total Saudara Wajib di Isi');
          count_error++;
     }else{
          $('#total_saudara_error').text('');
     }

     if($('#alamat_ktp').val() == ''){
          $('#alamat_ktp_error').text('Alamat Wajib di Isi');
          count_error++;
     }else{
          $('#alamat_ktp_error').text('');
     }

     if($('#provinsi_ktp').val() == ''){
          $('#provinsi_ktp_error').text('Provinsi Wajib di Isi');
          count_error++;
     }else{
          $('#provinsi_ktp_error').text('');
     }

     if($('#kota_ktp').val() == ''){
          $('#kota_ktp_error').text('Kota Wajib di Isi');
          count_error++;
     }else{
          $('#kota_ktp_error').text('');
     }

     if($('#kabupaten_ktp').val() == ''){
          $('#kabupaten_ktp_error').text('Kabupaten Wajib di Isi');
          count_error++;
     }else{
          $('#kabupaten_ktp_error').text('');
     }

     if($('#kecamatan_ktp').val() == ''){
          $('#kecamatan_ktp_error').text('Kecamatan Wajib di Isi');
          count_error++;
     }else{
          $('#kecamatan_ktp_error').text('');
     }

     if($('#kelurahan_ktp').val() == ''){
          $('#kelurahan_ktp_error').text('Kelurahan Wajib di Isi');
          count_error++;
     }else{
          $('#kelurahan_ktp_error').text('');
     }

     if($('#kode_pos_ktp').val() == ''){
          $('#kode_pos_ktp_error').text('Kode Pos Wajib di Isi');
          count_error++;
     }else{
          $('#kode_pos_ktp_error').text('');
     }

     if($('#alamat_domisili').val() == ''){
          $('#alamat_domisili_error').text('Alamat Wajib di Isi');
          count_error++;
     }else{
          $('#alamat_domisili_error').text('');
     }

     if($('#provinsi_domisili').val() == ''){
          $('#provinsi_domisili_error').text('Provinsi Wajib di Isi');
          count_error++;
     }else{
          $('#provinsi_domisili_error').text('');
     }

     if($('#kota_domisili').val() == ''){
          $('#kota_domisili_error').text('Kota Wajib di Isi');
          count_error++;
     }else{
          $('#kota_domisili_error').text('');
     }

     if($('#kabupaten_domisili').val() == ''){
          $('#kabupaten_domisili_error').text('Kabupaten Wajib di Isi');
          count_error++;
     }else{
          $('#kabupaten_domisili_error').text('');
     }

     if($('#kecamatan_domisili').val() == ''){
          $('#kecamatan_domisili_error').text('Kecamatan Wajib di Isi');
          count_error++;
     }else{
          $('#kecamatan_domisili_error').text('');
     }

     if($('#kelurahan_domisili').val() == ''){
          $('#kelurahan_domisili_error').text('Kelurahan Wajib di Isi');
          count_error++;
     }else{
          $('#kelurahan_domisili_error').text('');
     }

     if($('#no_wa').val() == ''){
          $('#no_wa_error').text('Nomor WhatasApp Wajib di Isi');
          count_error++;
     }else{
          $('#no_wa_error').text('');
     }

     if($('#no_hp').val() == ''){
          $('#no_hp_error').text('Nomor HP Wajib di Isi');
          count_error++;
     }else{
          $('#no_hp_error').text('');
     }

     if($('#cerita_diri').val() == ''){
          $('#cerita_diri_error').text('Cerita Diri Wajib di Isi');
          count_error++;
     }else{
          $('#cerita_diri_error').text('');
     }
           
})