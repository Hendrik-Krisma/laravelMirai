<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginproses (Request $request){
        if(Auth::attempt($request->only('username','password'))) {
            return redirect('invoices');   
        }

        return \redirect('login');
    }

    public function register(){
        return view('auth.register');
    }
   
    public function registeradmin(Request $request) {
        User::create([
            'name' => $request-> name,
            'username' => $request-> username,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return \redirect('/login');
    }

    // public function postLogin (Request $request) {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);

    // $credentials = $request->only('username', 'password');
    //         if (Auth::attempt($credentials)) {
    //             return redirect()->intended('penjualanMirai')->withSuccess('Login Berhasil!');
    //         }

    //         return redirect ('/')->withSuccess ('Gagal Login!');
    // }


    // public function registration(){
    //     return view('auth.registration');
    // }

    // public function customRegistration(Request $request)
    // {  
    //     User::create([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'password'=> $request->password,
    //     ]);
           
    //     // $data = $request->all();
    //     // $check = $this->create($data);
         
    //     return redirect("invoices")->withSuccess('You have signed-in');
    // }


    // // public function insertUser(array $data){
    //     Return User::create([
    //     'nama' => $data['nama'],
    //     'username' => $data['username'],
    //     'password' => Hash::make($data['password'])
    //     ]);   
    // }
}
