<?php

namespace App\Http\Controllers\buku;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Crypt;
use Session;

use App\Models\buku                 as buku;
use App\Models\User                 as User;
use App\Models\pengarang            as Pengarang;
use App\Models\Pinjam               as Pinjam;

class C_Buku extends Controller
{
    public function index($key, Request $request)
    {   
        
        if($request->input('key') != null){

            $course_id = Crypt::decrypt($request->input('key')); 
            $data['userDetail'] = buku::where('id', $course_id)->first();

            if(isset($_COOKIE['cookie-storage'])){
                $cookie = $_COOKIE['cookie-storage'];
                $data['query_nik'] = User::where('nik', $cookie)->first();
                if($data['query_nik']){
                    $data['key'] = $key;
                    $pengarang_id = $data['userDetail']->pengarang_id;
                    $data['query_user'] = pengarang::where('id', $pengarang_id)->first();
                    $data['pengarang_key'] = Pengarang::get();
                    return view('buku.menu-buku', $data);
                }
            }else{
                Session::flash('alert-login', 'You are forced to logout because there is no access.');
                return redirect('/login');
            }

        }else{
            if(isset($_COOKIE['cookie-storage'])){
                $cookie = $_COOKIE['cookie-storage'];
                $data['query_nik'] = User::where('nik', $cookie)->first();
                if($data['query_nik']){
                    $data['key'] = $key;
                    
                    $data['query_user'] = buku::with('pengarang')->get();
                    $data['query_proses'] = Pinjam::with("user")->with("pengarang")->with("buku")->get();
                    $data['query_proses_user'] = Pinjam::with("user")->with("pengarang")->with("buku")->where('user_id', $data['query_nik']->id)->get();
                    $data['query_pinjam'] = buku::with("pengarang")->where('id', $request->input('key1'))->first();
                        if(!isset($data['query_pinjam'])){

                        }else{
                            $total_buku = $data['query_pinjam']->total;
                            
                            if($total_buku <= "0"){
                                Session::flash('alert-peringatan', 'Stok Buku Ini Sudah Habis..!');
                                return redirect('/buku/data-buku');
                            }
                        }
                    
                    
                    $data['pengarang_key'] = Pengarang::get();

                    return view('buku.menu-buku', $data);
                }
            }else{
                Session::flash('alert-login', 'You are forced to logout because there is no access.');
                return redirect('/login');
            }
        }
       
        
    }

    public function bukuDelete(Request $request)
    {  
        echo $course_id = Crypt::decrypt($request->input('key')); 

        $bukuDelete = buku::find($course_id); 
        $bukuDelete->delete();
        Session::flash('alert-success-karyawan', 'Berhasil Delete Karyawan.');
        return redirect('/buku/data-buku');
    }

    public function bukuPost(Request $request)
    {  
        $this->validate($request, [
            
            'pengarang'      => 'required|max:50',
            'buku'      => 'required',
            'date'      => 'required',
            'total'      => 'required',
        ]);

         $id             = $request->input('id');
         $pengarang             = $request->input('pengarang');
         $buku             = $request->input('buku');
         $date             = $request->input('date');
         $total             = $request->input('total');
        

        if(isset($id)){
            $akun  = buku::where('id', $id)
                                ->update([
                                    'name'              => $buku,
                                    'pengarang_id'              => $pengarang,
                                    'tahun'              => $date,
                                    'total'              => $total,
                                ]);
                            
            Session::flash('alert-success', 'Berhasil Edit Buku.');
            return redirect('/buku/data-buku');

        }else{
            
            $queryBuku = new buku();
                $queryBuku->name                = $buku;
                $queryBuku->pengarang_id        = $pengarang;
                $queryBuku->tahun               = $date;
                $queryBuku->total               = $total;
            $queryBuku->save();

            Session::flash('alert-success', 'Berhasil Input Buku.');
            return redirect('/buku/data-buku');
                
        }
    }
    
}
