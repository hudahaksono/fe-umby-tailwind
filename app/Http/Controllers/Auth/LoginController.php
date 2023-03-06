<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'              => 'required',
            'password'              => 'required',
        ], [
            'username.required'     => 'Masukkan Username',
            'password.required'     => 'Masukkan Password',
        ]);

        if ($validator->fails()) {
           $error = $validator->errors()->first();
           return redirect('/')->with('alert-validasi', $error);
        }

        $data = [
                'username'      => $request->username,
                'password'      => $request->password,
            ];
        $pass = $request->password;

        $dataApi = Http::post('http://localhost:8080/v1/user/get-user', $data);

        if(isset($dataApi['data'])){
            $passDB = $dataApi['data']['password'];
            $salt = $dataApi['data']['salt'];
            $aktif = $dataApi['data']['isactive'];
            $passwordDB = md5($pass . $salt);
            // dd($passwordDB);
            if($aktif != 1){
                return redirect('/')->with('alert-validasi', 'Login gagal: username tidak aktif');
            }

            if ($passwordDB !== $dataApi['data']['password']) {
                return redirect('/')->with('alert-validasi', 'Login gagal: password salah');
            }
            session::put('sess_userid', $dataApi['data']['userid']);
            session::put('sess_username', $dataApi['data']['username']);
            session::put('sess_userdesc', $dataApi['data']['userdesc']);
            session::put('sess_email', $dataApi['data']['email']);


            return redirect('/modul')->with('alert-success', 'Berhasil Login');
            // return redirect('/modul');
        }else{
            return redirect('/')->with('alert-noaccount', 'Login gagal: tidak ada username ini');
        }
    }  

    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/')->with('alert-logout', 'Anda berhasil logout');
    } 
}
