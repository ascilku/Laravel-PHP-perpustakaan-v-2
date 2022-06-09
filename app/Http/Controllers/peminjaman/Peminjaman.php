<?php

namespace App\Http\Controllers\peminjaman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pinjam            as Pinjam;
use App\Models\buku              as buku;

use Session;

use DateTime;

class Peminjaman extends Controller
{
    //
    public function bukuPostPinjam(Request $request)
    {
        # code...

        $data['query_buku'] = buku::where('id', $request->input("id_buku"))->first();
        $total_buku = $data['query_buku']->total;
        $jumlah_pinjam = $request->input("jumlah");
            if($total_buku < $jumlah_pinjam){
                Session::flash('alert-peringatan', 'Buku Yang Anda Pesan Terlalu Banyak..!');
                return redirect('/buku/data-buku');
            }else{
                $penguranganBuku =  $total_buku - $jumlah_pinjam;

                $akun  = buku::where('id', $request->input("id_buku"))
                                ->update([
                                    'total'              => $penguranganBuku,
                                ]);

                $queryPinjam = new Pinjam();
                    $queryPinjam->user_id               = $request->input("id_users");
                    $queryPinjam->pengarang_id          = $request->input("id_pengarang");
                    $queryPinjam->buku_id               = $request->input("id_buku");
                    $queryPinjam->total_p               = $request->input("jumlah");
                    
                    $queryPinjam->j_denda               = "1000";
                    $queryPinjam->total_denda           = null;
                    $queryPinjam->h_keterlambatan       = null;
                    $queryPinjam->deadline              = $request->input("date");
                    $queryPinjam->roll                  = null;
                    $queryPinjam->status                = "New";
                $queryPinjam->save();

                Session::flash('alert-success', 'Buku Berhasil di Pinjam..!');
                return redirect('/buku/buku');
            }

                        
        
    }

    public function kembaliPinjam(Request $request){

        $queryKembali = Pinjam::where('id', $request->input("key"))->first();
        // echo $queryKembali->total_p;
        
        $queryKuku = buku::where('id', $queryKembali->buku_id)->first();
        $totalBuku =  $queryKuku->total + $queryKembali->total_p;
        
        


        $deadline = strtotime($queryKembali->deadline); 

        $tgl_perbandingan = strtotime(date('d-m-Y')); 

        $jumlahHari = $tgl_perbandingan - $deadline;

        $hari = $jumlahHari / 60 / 60 / 24;



        buku::where('id', $queryKembali->buku_id)
                                ->update([
                                    'total'              => $totalBuku,
                                ]);
        
        if($hari <= 0){
            Pinjam::where('id', $request->input("key"))
                                    ->update([
                                        'status'                => "History",
                                        'roll'                  => "Tidak Terlambat",
                                    ]);
            Session::flash('alert-success', 'Berhasil Mengembalikan Buku.');
            return redirect('/buku/buku');
        }else{
            


            Pinjam::where('id', $request->input("key"))
                                    ->update([
                                        'status'                => "History",
                                        'roll'                  => "Terlambat",
                                        'h_keterlambatan'       => $hari,
                                        'total_denda'           => $queryKembali->j_denda * $hari,
                                    ]);

            Session::flash('alert-success', 'Berhasil Mengembalikan Buku.');
            return redirect('/buku/buku');
        }
         

        

        
    }
}
