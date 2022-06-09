<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Session;
use Crypt;

use App\Models\User                 as User;

class C_User extends Controller
{
    //
    public function index($key, Request $request)
    {   
        if($request->input('key') != null){

            $course_id = Crypt::decrypt($request->input('key')); 
            $data['userDetail'] = User::where('id', $course_id)->first();

            if(isset($_COOKIE['cookie-storage'])){
                $cookie = $_COOKIE['cookie-storage'];
                $data['query_nik'] = User::where('nik', $cookie)->first();
                if($data['query_nik']){
                    $data['key'] = $key;
                    $data['query_user'] = User::get();
                    return view('users.menu-users', $data);
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
                    $data['query_user'] = User::get();
                    return view('users.menu-users', $data);
                }
            }else{
                Session::flash('alert-login', 'You are forced to logout because there is no access.');
                return redirect('/login');
            }
        }
       
        
    }

    public function userPost(Request $request)
    {  
        $this->validate($request, [
            
            'name'      => 'required|max:30',
            'nik'       => 'required|max:20',
            'email'     => 'required|email|max:35',
            'password'  => 'required|max:20',
            'akses'     => 'required|max:10'
        ]);

        $id             = $request->input('id');
        $name           = $request->input('name');
        $nik            = $request->input('nik');
        $email          = $request->input('email');
        $password       = $request->input('password');
        $akses          = $request->input('akses');

        if(isset($id)){
            $akun  = User::where('id', $id)
                                ->update([
                                    'name'              => $name,
                                    'nik'               => $nik,
                                    'email'             => $email,
                                    'password'          => Hash::make($password),
                                    'show_password'     => $password,
                                    'akses'             => $akses,
                                ]);
                            
            Session::flash('alert-success', 'Berhasil Edit Users.');
            return redirect('/user/data-user');

        }else{
            
            $userEmail = User::where('email', $email)->first();
            
                if (isset($userEmail)) {
                    Session::flash('alert-peringatan', 'Email Sama.');
                    return redirect('user/user');
                }else{
                    $User = new User();
                        $User->name             = $name;
                        $User->nik              = $nik;
                        $User->email            = $email;
                        $User->password         = Hash::make($password);
                        $User->show_password    = $password;
                        $User->akses            = $akses;
                    $User->save();

                    Session::flash('alert-success', 'Berhasil Input Users.');
                    return redirect('/user/data-user');
                }
        }
    }

    public function userDelete(Request $request)
    {  
        $course_id = Crypt::decrypt($request->input('key')); 

        $userDelete = User::find($course_id); 
        $userDelete->delete();
        Session::flash('alert-success-karyawan', 'Berhasil Delete Karyawan.');
        return redirect('/user/data-user');
    }
}
