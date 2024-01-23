<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TemuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HilangController;
use App\Models\Blog;

Route::group(['middleware'=>['auth','CheckRole:user']],function(){   
    Route::get('/ambiltemuan/edit/{id}', [TemuanController::class, 'edit'])->name('temuan.edit');
    Route::patch('/ambiltemuan/{id}', [TemuanController::class, 'update'])->name('temuan.update');
    Route::delete('/ambiltemuan/{id}', [TemuanController::class, 'destroy'])->name('temuan.destroy');

    Route::get('/cariHilang/edit/{id}', [HilangController::class, 'edit'])->name('hilang.edit');
    Route::patch('/cariHilang/{id}', [HilangController::class, 'update'])->name('hilang.update');
    Route::delete('/cariHilang/{id}', [HilangController::class, 'destroy'])->name('hilang.destroy');

});
Route::group(['middleware'=>['auth','CheckRole:admin']],function(){ 
Route::resource('blog', BlogController::class);
});
Route::group(['middleware'=>['auth','CheckRole:user']],function(){
    //Pengumuman
    Route::get('/pengumuman', function () {
        $blog= Blog::get();
        return view('pengumuman',compact('blog'),[
            "title"=> "Pengumuman"
        ]);
    });

});
Route::group(['middleware'=>['auth','CheckRole:user,admin']],function(){

    //beranda
    Route::get('/beranda', function () {
        return view('beranda',[
            "title"=> "Beranda"
        ]);
    });
    //halaman profil
    Route::get('/profil', function () {
        return view('profil.profil',[
            "title"=> "profil"
        ]);
    });
    //halaman grafik
    Route::get('/grafik', function () {
        return view('grafik.grafik',[
            "title"=> "Grafik"
        ]);
    });

    //Laporkan Barang Hilang
    Route::get('/barang-hilang',[HilangController::class, 'create']);
    Route::post('/posthilang', [HilangController::class, 'store'])->name('hilang.store');
    Route::get('/cariHilang',[HilangController::class, 'index' ]);
    Route::get('/cariHilang/{slug}',[HilangController::class, 'HilangByCat' ])->name('cariHilang');

    //Laporkan Barang Temuan
    Route::get('/barang-temuan',[TemuanController::class, 'create']);
    Route::get('/ambiltemuan',[TemuanController::class, 'index' ]);
    Route::post('/posttemuan', [TemuanController::class, 'store'])->name('temuan.store');
    Route::get('/cariTemuan/{slug}',[TemuanController::class, 'TemuanByCat' ])->name('ambilTemuan');
    Route::post('/update', [LoginController::class, 'edituser'])->name('update');
});

Route::get('/', function () {
    return view('auth.login',[
        "title"=> "Login"
    ]);
});

//halaman Login
Route::get('/register', function () {
    return view('auth.register',[
        "title"=> "Register"
    ]);
});
//Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
// //Halaman Logout
Route::get('/logout', [LoginController::class, 'logout']);
// //halaman registrasi
// Route::get('/register', [AuthController::class, 'index']);a
Route::post('/register', [LoginController::class, 'Register'])->name('register');

//halaman login sementara
Route::get('/login', function () {
    return view('auth.login',[
        "title"=> "Login"
    ]);
});

//halaman regis sementara
Route::get('/registrasi', function () {
    return view('auth.register',[
        "title"=> "Login"
    ]);
});