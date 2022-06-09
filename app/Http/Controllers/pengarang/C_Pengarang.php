<?php

namespace App\Http\Controllers\pengarang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\pengarang                 as Pengarang;
use App\Models\User                 as User;

use Session;
use Crypt;

class C_Pengarang extends Controller
{
    //
    public function index($key, Request $request)
    {   
        if($request->input('key') != null){

            $course_id = Crypt::decrypt($request->input('key')); 

            if(isset($_COOKIE['cookie-storage'])){
                $cookie = $_COOKIE['cookie-storage'];
                $data['query_nik'] = User::where('nik', $cookie)->first();
                if($data['query_nik']){
                $data['query_pengaran'] = Pengarang::where('id', $course_id)->first();
                
                    $data['key'] = $key;
                    return view('pengarang.menu-pengarang', $data);
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
                    $data['query_user'] = Pengarang::get();
                    return view('pengarang.menu-pengarang', $data);
                }
            }else{
                Session::flash('alert-login', 'You are forced to logout because there is no access.');
                return redirect('/login');
            }
        }
       
        
    }

    public function pengarangPost(Request $request)
    {  
        $this->validate($request, [
            
            'name'      => 'required|max:30',
        ]);

        $id             = $request->input('id');
        $name           = $request->input('name');

        if(isset($id)){
            $akun  = Pengarang::where('id', $id)
                                ->update([
                                    'name'              => $name,
                                ]);
                            
            Session::flash('alert-success', 'Berhasil Edit Pengarang.');
            return redirect('/pengarang/data-pengarang');

        }else{
            
            $Pengarang = new Pengarang();
                $Pengarang->name             = $name;
            $Pengarang->save();

            Session::flash('alert-success', 'Berhasil Input Pengarang.');
            return redirect('/pengarang/data-pengarang');
                
        }
    }

    public function pengarangDelete(Request $request)
    {  
        echo $course_id = Crypt::decrypt($request->input('key')); 

        $pengarangDelete = Pengarang::find($course_id); 
        $pengarangDelete->delete();
        Session::flash('alert-success-karyawan', 'Berhasil Delete Pengarang.');
        return redirect('/pengarang/data-pengarang');
    }

}
