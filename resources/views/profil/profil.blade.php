@extends('profil.main')
@section('container')
@include('sweetalert::alert')

<div class="wrapper bg-white mt-sm-5">
    <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h4 class="pb-4 border-bottom">DETAIL AKUN</h4>
        <div class="d-flex align-items-start py-3 border-bottom">
            <center><img src="/images/{{Auth()->User()->foto}}"
                class="img" alt="" width="400px"></center>
            <div class="pl-sm-4 pl-2" id="img-section">
                <label for="inputImage">Foto Profil</label>
                <center><input type="file" name="image" id="inputImage" class="form-control @error('image') is-invalid @enderror"></center>
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <br><br>
        <div class="py-2">
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="firstname">Nama</label>
                    <input type="text" name="name" class="bg-light form-control" placeholder="Masukkan Nama" value="{{Auth()->User()->name}}">
                </div><br><br><br><br>
                <div class="col-md-6 pt-md-0 pt-3">
                    <label for="lastname">Username</label>
                    <input type="text" name="username" class="bg-light form-control" value="{{Auth()->User()->username}}" placeholder="Masukkan username">
                </div><br><br><br><br>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" class="bg-light form-control" value="{{Auth()->User()->email}}" placeholder="Masukkan email">
                </div>
            </div><br><br>
            <div class="py-3 pb-4 border-bottom">
                <center><button class="btn btn-primary mr-3">Simpan perubahan</button> <br></center>
            </div>
            <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            </div>
        </div>
    </form>
    <br>
</div>
        

@endsection