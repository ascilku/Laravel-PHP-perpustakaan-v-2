<?php

namespace App\Http\Controllers\akses_roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cookie;
use Session;

use App\Models\User                 as User;

class C_Dashboard extends Controller
{
    //
    public function index()
    {
        if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage']) ){
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
                $cookie = $_COOKIE['cookie-storage'];
                $data['query_nik'] = User::where('nik', $cookie)->first();
                if($data['query_nik']){
                    return view('dashboard.dashboard', $data);
                }
            }
        }

      
    }
}
