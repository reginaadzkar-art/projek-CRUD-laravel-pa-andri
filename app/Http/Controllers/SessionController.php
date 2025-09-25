<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('sesi/index');
    }
   public function login(Request $request){
    Session::flash('email', $request->email);


    $request->validate ([
    'email'=> 'required',
    'password'=> 'required',    
    ]);
    [
        'email'=>'Email Wajib Diisi',
        'password'=>'Password Wajib Diisi',
    ];
    $infologin = [
        'email'=>$request->email,
        'password'=>$request->password
    ];

    if(Auth::attempt($infologin)) {
        return redirect('dashboard')->with('success','Berhasil Login');
    } else {
        return redirect('sesi')->with('success','username dan password salah');
    }
}
 public function logout(){
    Auth::logout();
    return redirect('sesi')->with('success','Berhasil Logout');
 }
}
?> 