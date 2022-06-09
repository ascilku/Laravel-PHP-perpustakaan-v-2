<?php

namespace App\Http\Controllers\akses_roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User                 as User;

use Session;

class C_Akses extends Controller
{
    public function index()
    {
        if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
            return view('akses_roles.akses');
        }else{    
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage'])); 
            $date_now = date('d-m-Y');
    
            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);
    
            if ($today_time >= $expire_time) {
                unset($_COOKIE['cookie-storage']);    
                setcookie('cookie-storage', null, -1, '/'); 
                
                unset($_COOKIE['date-cookie-storage']);    
                $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
        
                if($logout_unset_cookie){
                    
                    return redirect('login-dashboard');
                } 
            }else{
                return redirect('/');
            }
            
        }
        
        // echo "dfdf";
    }

    public function loginQuery(Request $request)
    {
        $this->validate($request, [
            'nik'           => 'required|max:20',
            'password'      => 'required|max:20'
        ]);

        $login_nik          = $request->input('nik');
        $login_password     = $request->input('password');
        $login_setuju       = $request->input('setuju');

            if(isset($login_setuju) == 'yes' ){
                $query_nik = User::where('nik', $login_nik)->first();
                if($query_nik){
                    if(Hash::check($login_password, $query_nik->password)){
                        $akses = $query_nik->akses;
                        Session::flash('alert-token', $login_nik); 
                        $request->session()->flash('alert-login-berhasil', 'Login Success Akun.');
                        return redirect('/login');
                    }else{
                            Session::flash('alert-login', 'Your Password Is Wrong.');
                            return redirect('/login');
                        }
                }else{
                    Session::flash('alert-login', 'NIK Not Available.');
                    return redirect('/login');
                }
            }else{
                Session::flash('alert-login', 'ceklist yes thats me on this device.');
                return redirect('/login');
            }
    }

    public function loginLogout(Request $request)    
    {
        unset($_COOKIE['cookie-storage']);    
        setcookie('cookie-storage', null, -1, '/'); 
        
        unset($_COOKIE['date-cookie-storage']);    
        $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 

        if($logout_unset_cookie){
            
            return redirect('login');
        } 
    }

    public function loginUbahPass(Request $request)
    {
       
        echo $id         = $request->input('id_user');
        $password   = $request->input('password');

        $akun  = User::where('id', $id)
                                ->update([
                                    'password'          => Hash::make($password),
                                    'show_password'     => $password,
                                ]);
                            
        Session::flash('alert-success', 'Berhasil Ubah Password.');
        return redirect('/');
    }
}

    


