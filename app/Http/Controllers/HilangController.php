<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hilang;
use Illuminate\Support\Str;
use App\Models\Kategori;
use RealRashid\SweetAlert\Facades\Alert;

class HilangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hilang = Hilang::get();
        return view('temukan.cariHilang',compact('hilang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();
        return view('Laporkan.barangHilang',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $imageName = time().'.'.$request->gambar->extension();  
        $request->gambar->move(public_path('BarangHilang'), $imageName);

        $slug=Str::slug($request->nama_barang);
        $count=Hilang::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $status = Hilang::insert( [
            'nama_barang' =>$input['nama_barang'],
            'slug' => $slug,
            'no_tel' => $input['no_tel'],
            'lokasi' => $input['lokasi'],
            'gambar' => $imageName,
            'status' => $input['status'],
            'tanggal' => $input['tanggal'],
            'deskripsi' => $input['deskripsi'],
            'kategori_id' => $input['kategori'],
        ]);
        if($status){
            Alert::success('Berhasil Menambahkan Data ');
        }
        else{
            Alert::error('Gagal !!');
        }
        return redirect('/barang-hilang')->with('alert-success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::get();
        $hilang = Hilang::findOrFail($id);
        return view('temukan.edit-hilang', compact('kategori','hilang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hilang = Hilang::findOrFail($id);
        if($request->gambar == null){
            $input=$request->all();
            $slug=Str::slug($request->nama_barang);
            $count=Hilang::where('slug',$slug)->count();
            if($count>0){
                $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
            }
            $status = $hilang->fill( [
                'nama_barang' =>$input['nama_barang'],
                'slug' => $slug,
                'no_tel' => $input['no_tel'],
                'lokasi' => $input['lokasi'],
                'status' => $input['status'],
                'tanggal' => $input['tanggal'],
                'deskripsi' => $input['deskripsi'],
                'kategori_id' => $input['kategori'],
            ])->save();
        }else{
            $input=$request->all();
            $imageName = time().'.'.$request->gambar->extension();  
            $request->gambar->move(public_path('BarangHilang'), $imageName);

            $slug=Str::slug($request->nama_barang);
            $count=hilang::where('slug',$slug)->count();
            if($count>0){
                $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
            }
            $status = $hilang->fill( [
                'nama_barang' =>$input['nama_barang'],
                'slug' => $slug,
                'no_tel' => $input['no_tel'],
                'lokasi' => $input['lokasi'],
                'gambar' => $imageName,
                'status' => $input['status'],
                'tanggal' => $input['tanggal'],
                'deskripsi' => $input['deskripsi'],
                'kategori_id' => $input['kategori'],
            ])->save();
        }
        if($status){
            Alert::success('Berhasil Mengubah Data ');

        }
        else{
            request()->session('error','Please try again!!');
        }
        Alert::success('Berhasil Mengubah Data ');

       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hilang=Hilang::findOrFail($id);
        $status=$hilang->delete();
        
        if($status){
            Alert::success('Data Berhasil Dihapus');

        }
        else{
            Alert::error('Gagal :(');
        }
        return redirect('/cariHilang');
    }
    public function HilangByCat(Request $request){
        $hilang= Kategori::getHilangtByCat($request->slug);
        //dd($hilang);
        return view('temukan.cariHilang')->with('hilang',$hilang->hilang);
    }
}
