<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Hilang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class BlogController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.blog.create');
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'image'     => 'image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required',
            'tanggal'   => 'required'
        ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/blogs', $image->hashName());

        $blog = Blog::create([
            // 'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content,
            'tanggal'   => $request->tanggal
        ]);

        if($blog){
            //redirect dengan pesan sukses
            Alert::success('Berhasil Menambahkan Data ');
            return redirect()->route('blog.index');
        }else{
            //redirect dengan pesan error
            Alert::error('Gagal :(');
            return redirect()->route('blog.index'); 
        }
    }
    
    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required',
            'tanggal'   => 'required'
        ]);

        //get data Blog by ID
        $blog = Blog::findOrFail($blog->id);

        if($request->file('image') == "") {

            $blog->update([
                'title'     => $request->title,
                'content'   => $request->content,
                'tanggal'   => $request->tanggal
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/blogs/'.$blog->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/blogs', $image->hashName());

            $blog->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content,
                'tanggal'   => $request->tanggal,
            ]);
            
        }

        if($blog){
            //redirect dengan pesan sukses
            Alert::success('Berhasil Mengubah Data ');
            return redirect()->route('blog.index');
        }else{
            //redirect dengan pesan error
            Alert::error('Gagal !!');
            return redirect()->route('blog.index');
        }
    }
    
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        if($blog){
            //redirect dengan pesan sukses
            Alert::success('Berhasil Menghapus Data ');
            return redirect()->route('blog.index');
        }else{
            //redirect dengan pesan error
            Alert::error('Gagal !!');
            return redirect()->route('blog.index');
        }
    }

}
