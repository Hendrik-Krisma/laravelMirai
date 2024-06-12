<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function postLogin (Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

    $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard')->withSuccess('Login Berhasil!');
            }

            return redirect ('invoices')->withSuccess ('Gagal Login!');
    }


    public function registration(){
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {  
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password'=> $request->password,
        ]);
           
        // $data = $request->all();
        // $check = $this->create($data);
         
        return redirect("invoices")->withSuccess('You have signed-in');
    }


    // public function insertUser(array $data){
    //     Return User::create([
    //     'nama' => $data['nama'],
    //     'username' => $data['username'],
    //     'password' => Hash::make($data['password'])
    //     ]);   
    // }
}
