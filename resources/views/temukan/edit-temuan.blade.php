@extends('temukan.layouts.mainTemukan')
@section('container')
@include('sweetalert::alert')
<div class="container-xxl py-5">
    <div class="container">
        <center>
            <h1><b>Edit Barang Temuan</b></h1>
            </center> <br><br><br>
    </div>
</div>

<div class="container">
<div class="table-wrapper">
        <form action="{{route('temuan.update', $temuan->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nama barang</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$temuan->nama_barang}}" class="form-control" id="name" name="nama_barang">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="noHp" class="col-sm-2 col-form-label">No. Telepon</label>
                    <div class="col-sm-10">
                        <input type="number" value="{{$temuan->no_tel}}" class="form-control" id="noHp" name="no_tel">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="location" class="col-sm-2 col-form-label">Lokasi Barang</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$temuan->lokasi}}" class="form-control" id="location" name="lokasi">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="time" class="col-sm-2 col-form-label">Waktu Kehilangan</label>
                    <div class="col-sm-10">
                        <input type="date" value="{{$temuan->tanggal}}" class="form-control" id="time" name="tanggal">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Ciri - ciri</label>
                    <div class="col-sm-10">
                        <textarea id="detail" name="deskripsi" cols="108" rows="5" style="border-radius:10px;">{{$temuan->deskripsi}}</textarea>
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control"  aria-label="size 3 select example" name="status" >
                        <option value="Belum Diambil">Belum Diambil</option>
                        <option value="Sudah Diambil">Sudah Diambil</option>
                      </select>
                </div>
            </div><br>
            <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Foto barang</label>
                    <div class="col-sm-10">
                    <input class="form-control" value="{{$temuan->gambar}}" type="file" id="image" name="gambar">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori Barang</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kategori" id="kategori">
                        @foreach($kategori as $k)
                        <option value='{{$k->id}}' {{(($temuan->kategori_id==$k->id)? 'selected' : '')}}>{{$k->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary" style="border-radius:15px ;">Submit</button>
        </form>	
        </div>
    </div>


@endsection