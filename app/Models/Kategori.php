<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable=['nama_kategori','slug'];
    public static function getAllCatagory(){
        return Kategori::orderBy('nama_kategori','ASC')->get();
    }
    public function hilang(){
        return $this->hasMany('App\Models\Hilang','kategori_id','id');
    }
    public function temuan(){
        return $this->hasMany('App\Models\Temuan','kategori_id','id');
    }
    public static function getHilangtByCat($slug){
        return Kategori::with('hilang')->where('slug',$slug)->first();
    }
    public static function getTemuantByCat($slug){
        return Kategori::with('temuan')->where('slug',$slug)->first();
    }
}
