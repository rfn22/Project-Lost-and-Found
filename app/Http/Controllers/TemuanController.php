<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temuan;
use App\Models\Kategori;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class TemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temuan = Temuan::get();
        return view('temukan.ambilTemuan',compact('temuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();
        return view('Laporkan.barangTemuan', compact('kategori'));
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
        $request->gambar->move(public_path('BarangTemuan'), $imageName);

        $slug=Str::slug($request->nama_barang);
        $count=Temuan::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $status = Temuan::insert( [
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
            Alert::success('Success Title', 'Berhasil Menambahkan Data ');
        }
        else{
            Alert::error('Error Title', 'Gagal !!');
        }
        return redirect('/barang-temuan')->with('alert-success','Berhasil Menambahkan Data');
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
        $temuan = Temuan::findOrFail($id);
        return view('temukan.edit-temuan', compact('kategori','temuan'));
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
        $temuan = Temuan::findOrFail($id);
        if($request->gambar == null){
            $input=$request->all();
            $slug=Str::slug($request->nama_barang);
            $count=Temuan::where('slug',$slug)->count();
            if($count>0){
                $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
            }
            $status = $temuan->fill( [
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
            $request->gambar->move(public_path('BarangTemuan'), $imageName);

            $slug=Str::slug($request->nama_barang);
            $count=Temuan::where('slug',$slug)->count();
            if($count>0){
                $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
            }
            $status = $temuan->fill( [
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
            Alert::success('Success Title', 'Berhasil Mengubah Data ');
        }
        else{
            Alert::error('Error Title', 'Gagal !!');
        }
        return redirect('/ambiltemuan')->with('alert-success','Berhasil Menambahkan Data');
    }

    /**`
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temuan=Temuan::findOrFail($id);
        $status=$temuan->delete();
        
        if($status){
            Alert::success('Success Title', 'Data Berhasil Dihapus');
        }
        else{
            Alert::error('Error Title', 'Gagal !!');
        }
        return redirect('/ambiltemuan');
    }
    public function TemuanByCat(Request $request){
        $temuan= Kategori::getTemuantByCat($request->slug);
        //dd($temuan);
        return view('temukan.ambilTemuan')->with('temuan',$temuan->temuan);
    }
}
