@extends('layouts.main')
@section('container')
@include('sweetalert::alert')

<head>
    <style>
        button{
            float: right;
        }
    </style>
</head>
<div class="container-xxl py-5">
    <div class="container">
        <center>
            <h1><b>LAPORKAN BARANG TEMUAN</b></h1>
            </center> <br><br><br>
            <center style="font-size: 18px">
                <p>Jika Anda merasa menemukan barang dan tidak tahu harus melapor kemana, Silahkan pergunakan fitur ini untuk membantu anda mempermudah melaporkan penemuan barang yang anda yang temukan. </p>
                <p> Dengan fitur ini, barang anda yang temukan akan dapat dilihat oleh user lainnya yang mungkin saja adalah salah satu orang yang memiliki barang yang anda temukan.</p>
                <p>Segera laporkan penemuan barang kalian melalui form dibawah ini, dengan mengisi semua barisnya dan jangan lupa sertakan poto barang yang sesuai, ciri-ciri barang yang detail agar user lain dapat secara lebih spesifik mengenali barang yang anda lapor, Yang terakhir jangan lupa sertakan kategori barang yang anda laporkan sesuai dengan barang yang benar akan anda laporkan.</p>
            </center>
    </div>
</div>

<div class="container">
<div class="table-wrapper">
        <form action="{{route('temuan.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <h4 for="name" class="col-sm-2 col-form-label">Nama barang</h4>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="nama_barang">
                </div>
        </div><br>
        <div class="mb-3 row">
            <h4 for="noHp" class="col-sm-2 col-form-label">No. Telepon</h4>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="noHp" name="no_tel">
                </div>
        </div><br>
        <div class="mb-3 row">
            <h4 for="location" class="col-sm-2 col-form-label">Lokasi</h4>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="location" name="lokasi">
                </div>
        </div><br>
        <div class="mb-3 row">
            <h4 for="time" class="col-sm-2 col-form-label">Waktu </h4>
                <div class="col-sm-10">
                    <input type="datetime-local" class="form-control" id="time" name="tanggal">
                </div>
        </div><br>
        <div class="mb-3 row">
            <h4 for="name" class="col-sm-2 col-form-label">Ciri - ciri</h4>
                <div class="col-sm-10">
                    <textarea id="detail" name="deskripsi" cols="108" rows="5" style="border-radius:10px;"></textarea>
                </div>
        </div><br>
        <div class="mb-3 row">
            <h4 for="kategori" class="col-sm-2 col-form-label">Status</h4>
            <div class="col-sm-10">
                <select class="form-control"  aria-label="size 3 select example" name="status">
                    <option value="Belum Ditemukan" selected>Belum Ditemukan</option>
                  </select>
            </div>
        </div><br>
        <div class="mb-3 row">
            <h4 for="image" class="col-sm-2 col-form-label">Foto</h4>
                <div class="col-sm-10">
                <input class="form-control" type="file" id="image" name="gambar">
                </div>
        </div><br>
            <div class="mb-3 row">
                <h4 for="kategori" class="col-sm-2 col-form-label">Kategori</h4>
                <div class="col-sm-10">
                    <select class="form-control" name="kategori" id="kategori">
                        @foreach($kategori as $k)
                            <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary" style="border-radius:15px ;">Submit</button>
        </form>	
        </div>
    </div>


@endsection