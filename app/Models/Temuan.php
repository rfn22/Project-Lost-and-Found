<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temuan extends Model
{
    use HasFactory;
    protected $fillable=['nama_barang','slug','no_tel','lokasi','deskripsi','gambar','status','kategori_id'];
}

