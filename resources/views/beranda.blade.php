@extends('layouts.main')
@section('container')
@include('sweetalert::alert')

<!-- beranda start-->

    <div class="container"> <br><br>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <center><img src="img/carousel.png" height="400px" width="1100px" alt="..."><center><br><br>
        </div>
    </div>
    </div>
    <div>
        <center style="line-height: 30px;">
        <p class="body">Selamat Datang di website Lost & Found Del 
            Website ini ditujukan untuk seluruh penghuni Institut Teknologi Del yang bertujuan untuk mempermudah semua penghuni institut teknologi Del untuk melakukan laporan terhadap kehilangan barang dan melakukan laporan terhadap penemuan barang.
            User yang membuat laporan kehilagan barang akan dapat secara mudah nantinya untuk mengetahui apakah barang nya ditemukan oleh sesorang dengan saling bertukar informasi melalui no telepon yang sudah di input si pembuat laporan untuk dapat lebih memastikan bahwasanya benar itu adalah barangnya yang hilang. Jika benar itu adalah barang nya maka si pembuat laporan akan mengedit status barang dari belum ditemukan menjadi telah ditemukan.
            
            Hal yang sama juga berlaku pada saat user melakukan laporan terhadap pemenuam barang. User lain akan lebih mudah untuk mencari barang nya yang ditemukan oleh orang lain dengan saling bertukar informasi melalui nomor telepon untuk memastikan apakah benar barang yang dilaporkan adalah barang yang hilang dari sesorang. Jika telah dikonfirmasi pengambilannya maka si pembuat laporan barang temuan akan mengedit status barang dari belum diambil menjadi telah diambil.
           
            Pastikan anda menginput data dan informasi yang benar</p></div><br><br>
        </center>
    </div>
    <hr size="10px">
    <!-- beranda end-->
    <!--About Start-->
    <!-- For demo purpose -->
    <hr>
    <div class="container">
    <div class="row">
        <div class="col-md-12 pt-5 pb-2 ourTeam-hedding text-center">
        <h1><b>TEAM WORK</b></h1>
        <p>Developer of Lost and Found Del
        </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12" id="box">
        <div class="row section-success ourTeam-box text-center">
            <div class="col-md-12 section1">
            <img src="images/yohana.png">
            </div>
            <div class="col-md-12 section2 pb-3">
            <p>Yohana Tambunan</p>
            <span>Role as<br>Project Manager</span>
            </div>
            <div class="col-md-12 section3">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="row section-info ourTeam-box text-center">
            <div class="col-md-12 section1">
            <img src="images/wenni.png">
            </div>
            <div class="col-md-12 section2 pb-3">
                <p>Marianne Solang</p>
                <span>Role as <br>Programmer</span>
            </div>
            <div class="col-md-12 section3">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="row section-danger ourTeam-box text-center">
            <div class="col-md-12 section1">
            <img src="images/rosa.png">
            </div>
            <div class="col-md-12 section2 pb-3">
            <p>Rosalindabrmanik</p>
            <span>Role as <br>Data analyst</span>
            </div>
            <div class="col-md-12 section3">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            </div>
        </div>
        </div>
        <!-- baris 2 -->
        <div class="col-md-4 col-sm-4 col-xs-12" id="box">
        <div class="row section-success ourTeam-box text-center">
            <div class="col-md-12 section1">
            <img src="images/repina.png">
            </div>
            <div class="col-md-12 section2 pb-3">
            <p>Refina Marpaung</p>
            <span>Role as <br>Data analyst</span>
            </div>
            <div class="col-md-12 section3">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="row section-info ourTeam-box text-center">
            <div class="col-md-12 section1">
            <img src="images/mega.png">
            </div>
            <div class="col-md-12 section2 pb-3">
            <p>Mega Marbun</p>
            <span>Role as <br>Designer</span>
            </div>
            <div class="col-md-12 section3">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="row section-danger ourTeam-box text-center">
            <div class="col-md-12 section1">
            <img src="images/sio.png">
            </div>
            <div class="col-md-12 section2 pb-3">
            <p>Sio Alexandra</p>
            <span>Role as <br>Designer</span>
            </div>
            <div class="col-md-12 section3">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            </div>
        </div>
        </div>
    </div>
    </div>

@endsection