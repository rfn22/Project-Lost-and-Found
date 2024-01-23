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
            <h1><b>LAPORKAN BARANG HILANG</b></h1>
            </center> <br><br><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum debitis pariatur fugiat soluta voluptatum ab ea voluptate, deserunt porro rerum eaque quidem laudantium delectus quis incidunt architecto exercitationem quasi ratione doloribus mollitia totam tenetur. Tenetur fugit fuga obcaecati. Vero, ipsum cupiditate iste sequi, quidem vitae pariatur laboriosam, quas magni voluptatum quo quae commodi dolore! Placeat eveniet atque porro voluptas qui optio molestiae ipsum accusamus laudantium voluptatibus doloremque ad fugit ipsam commodi rem aliquam dolores facilis, autem nostrum. Perferendis ex dignissimos adipisci aperiam dicta quis tenetur ea porro iure sequi perspiciatis dolorem, atque dolore accusamus quos ipsa maiores quaerat obcaecati harum, consectetur, reprehenderit debitis eligendi illum. Minima nemo adipisci esse et pariatur accusamus ad ea ab sint, praesentium laboriosam doloribus expedita atque facilis non recusandae mollitia doloremque numquam accusantium cupiditate? Quas obcaecati natus autem minus eos vitae laudantium voluptas ea? Voluptas velit beatae quaerat omnis eveniet illo, consequatur harum est officiis minima corporis deserunt aspernatur distinctio quo. Maxime at ut nemo exercitationem neque distinctio possimus, error iure sit ducimus quis atque itaque officia perspiciatis. Provident temporibus eum labore ipsam magnam optio natus possimus voluptatem fuga quam, voluptatibus fugit. Dignissimos, impedit tempore pariatur nam quis, nihil dicta neque aliquam labore i ut eaque, nesciunt facilis eos ab iste sint?</p>
    </div>
</div>

<div class="container">
    <div class="table-wrapper">
        <form action="{{route('hilang.store')}}" method="post" enctype="multipart/form-data">
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