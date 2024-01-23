<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'nama_kategori' => "Elektronik",
                'slug' => "elektronik",
            ),
            array(
                'nama_kategori' => "Barang sehari-hari",
                'slug' => "barang-sehari-sehari",
            ),
            array(
                'nama_kategori' => "Uang",
                'slug' => "uang",
            ),
            array(
                'nama_kategori' => "Buku",
                'slug' => "buku",
            ),
            array(
                'nama_kategori' => "Perlengkapan Makan",
                'slug' => "perlengkapan-makan",
            ),
            array(
                'nama_kategori' => "Perlenkapan Tulis",
                'slug' => "perlenkapan-tulis",
            ),
        );

        DB::table('kategoris')->insert($data);
    }
}
