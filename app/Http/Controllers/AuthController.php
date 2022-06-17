<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return redirect('admin');
            } elseif ($user->level == 'petugas') {
                return redirect()->intended('petugass');
            } elseif ($user->level == 'pelanggan') {
                 return redirect()->intended('pesan');
            } 
        }
        return view('login');
        
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect('admin');
                } elseif ($user->level == 'petugas') {
                    return redirect()->intended('kendaraans');
                } elseif ($user->level == 'pelanggan') {
                    return redirect()->intended('pesan');
                }
                return redirect()->intended('/');
            }

        return redirect('login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function register(){
        return view('registrasi');
    }

    public function simpanregister(Request $request){
        // dd($request->all());
        
        $this->validate($request,[
            'name'          => 'required',
            'username'      => 'required',
            'email'         => 'required',
            'password'      => 'required'
        ]);

        User::create([
            'name' => $request->name, 
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'pelanggan',
            'remember_token' => Str::random(60),
        ]);
        
        return redirect()->intended('login');
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
}
