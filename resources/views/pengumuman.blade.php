@extends('layouts.main')
@section('container')
@include('sweetalert::alert')
<div class="container">
    <h1><b>PENGUMUMAN</b></h1>
    @foreach($blog as $b)
    <div class="table-wrapper">
        <h2 class="title"><b>{{$b->title}}</b></h2>
        <b>{{$b->tanggal}}</b> <br><br>
        {{$b->content}}
        
    </div>
    @endforeach
</div>
<br><br><br><br><br><br>
@endsection