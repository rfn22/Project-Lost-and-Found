<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){  
            Alert::success(' Berhasil Login ');
            return redirect('/beranda');
        }
        else{
            Alert::error('Gagal Login :(');
            return redirect('/')->withInput()->with('error','Gagal Login !!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function Register(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'username'=>'required|string',
            'email'=>'required',
            'password-confirmation'=>'required',
        ],
        [
            'name.required'=> 'Nama Produk Harus Diisi !',
            'email.required'=> 'Email Harus Diisi !',
            'name.required'=> 'Name Pengguna Harus Diisi !',
            'password-confirmation.required'=> 'Konfirmasi Password !',
        ]);
        $user = new User;
        $user -> role = 'user';
        $user -> name = $request -> name;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> password =bcrypt($request->password);
        $user -> remember_token = Str::random(60);
        $user -> save();
        Alert::success(' Data Berhasil Ditambahkan ');
        return redirect('/login');
    }
    public function edituser(Request $request)
    {   
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();
        if($request->image == null){
            $user -> name = $request -> input ('name');
            $user -> username = $request -> input ('username');
            $user -> email = $request -> input ('email');
            $user ->save();
        }else{
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $user -> name = $request -> input ('name');
            $user -> username = $request -> input ('username');
            $user -> email = $request -> input ('email');
            $user -> foto = $imageName;
            $user ->save();
        }
        Alert::success(' Data Diubah ');
        return redirect('/profil');
    }
}
