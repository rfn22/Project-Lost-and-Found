@extends('temukan.layouts.mainTemukan')
@section('container')
@include('sweetalert::alert')

<head>
    <style>
        p{
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: #03256C;
        }
        h4{
            color: black;
            line-height: 40px;
        }
    </style>
</head>
<div class="container-xxl py-5">
    <div class="container">
        <center>
            <h1><b>TEMUKAN BARANGMU</b></h1>
        </center> <br><br><br>
        <center>
            <h4>Jika Anda merasa menemukan barang dan tidak tahu harus melapor kemana, Silahkan pergunakan fitur ini untuk membantu anda mempermudah melaporkan penemuan barang yang anda yang temukan. </h4>
            <h4>Dengan fitur ini, barang anda yang temukan akan dapat dilihat oleh user lainnya yang mungkin saja adalah salah satu orang yang memiliki barang yang anda temukan.</h4>
            <h4>Segera laporkan penemuan barang kalian melalui form dibawah ini, dengan mengisi semua barisnya dan jangan lupa sertakan poto barang yang sesuai, ciri-ciri barang yang detail agar user lain dapat secara lebih spesifik mengenali barang yang anda lapor, Yang terakhir jangan lupa sertakan kategori barang yang anda laporkan sesuai dengan barang yang benar akan anda laporkan.</h4>
        </center>
        <br><br><br>
        <center><h3 style="color:black ;"><b>CARI BARANG HILANG</b></h3></center>
        <div>  
            <ul>
                <hr>       
                {{Helper::Category()}}
                <hr>
            </ul>
        </div>
        <div class='body'>
            <div class="row g-5">
            @foreach($hilang as $h)
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <img src="/BarangHilang/{{$h->gambar}}" alt="" width="300px" height="300px">
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <h3 class="mb-4">{{$h->nama_barang}}</b></h3><hr>
                    <p>No. Telepon&emsp;&nbsp; &nbsp;&nbsp;&nbsp; :<a class=" btn" href="https://api.whatsapp.com/send?phone={{$h->no_tel}}&text=Halo!%20Maaf%20Mengganggu,%20Saya%20ingin%20menanyakan... "><img src="img/wa.png" width="25px"></a>{{$h->no_tel}}</p>
                    <p>Lokasi Hilang&emsp;&nbsp;&nbsp;&nbsp; : &nbsp;  {{$h->lokasi}}</p>
                    <p>Waktu Hilang&emsp; &nbsp; :  &nbsp;{{$h->tanggal}}</p>
                    <p>Ciri - ciri Barang&nbsp; :  &nbsp; {{$h->deskripsi}}</p>
                    <button class="btn btn-info">{{$h->status}}</button><br>
                    @if(Auth()->User()->role== 'user')
                    <a class=" btn btn-warning btn-xs" style="float: right" href="{{route ('hilang.edit', $h->id) }}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>Edit</a>
                    <form method="POST" action="{{route('hilang.destroy',$h->id)}}" onclick="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button style="float: right;" class="btn btn-danger btn-xs" data-id="{{$h->id}}" data-toggle="tooltip" data-placement="bottom" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg>Hapus</button>
                    </form>
                    
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr><br><br>
</div>

@endsection