<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{asset('assets/img/icons/calendar.png')}}"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/Frontend/intro.css')}} ">

    <title>Login</title>
  </head>
  <body>
    {{-- Navbar Start --}}
    <nav class="navbar fixed-top">
        <a class="navbar-brand" href="/">
            <img src="{{asset('assets/img/navbrand-01.png')}}" class="img-fluid" alt="Responsive image" width="170">
        </a>
    </nav>
    {{-- Navbar End --}}
    {{-- Img Header Start --}}
    <div class="img-head">
        <img src="{{asset('assets/img/Head-02.png')}}" class="img-fluid" alt="Responsive image">
    </div>
    {{-- Img Header End --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 5%;">
                <center>
                <h5>Untuk mulai berjualan di Virtual Expo ini <br> Silahkan login terlebih dahulu </h5>
                <button id="cutomers" type="button" class="btn btn-lg" data-toggle="modal" data-target="#modallogin">
                    Oke, Login
                </button>
                <a class="btn btn-lg" href="/sellers/register" role="button" id="sellers">Belum punya akun</a>
                </center>
            </div>
            <div class="col-md-6" id="img-people" style="margin-top: -4%">
                <img src="{{asset('assets/img/intro-seller-01.png')}}" alt="Responsive image" height="450">
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row justify-content-between">
            <div class="col-md-3" style="margin-top: 20px;">
                <img src="{{asset('assets/img/opd-01.png')}}" class="img-fluid" alt="Responsive image" width="300">
            </div>
            <div class="col-md-3" style="margin-top: 50px; margin-right: 20px;">
                <p class="text-center" style="font-size: 11px; color: #8A8A8A; float: right;">&copy;{!! date("Y") !!} Powered By Dinas Kominfo Kabupaten Tegal <br> Develeper IHK</p>
            </div>
        </div>
    </div>

    <!-- Modal login -->
    <div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Selamat Datang Pelaku Usaha Kab. Tegal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>

  </body>
</html>
