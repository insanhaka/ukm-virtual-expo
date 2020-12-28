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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/Frontend/landing.css')}} ">

    <title>Selamat Datang</title>
  </head>
  <body>
    <div class="img-head">
        <img src="{{asset('assets/img/Head-01.png')}}" class="img-fluid" alt="Responsive image" style="margin-top: -6%">
    </div>
    <div class="container" style="margin-top: 2%">
        <div class="row">
            <div class="col-md-6" style="margin-top: 5%;">
                <center>
                <h5>Maaf, Untuk saat ini pelaku usaha yang <br> dapat ditampilkan pada UKM VIRTUAL EXPO <br> hanya yang sudah terdata pada dinas</h5>
                <p>Tetapi jangan khawatir, nanti fitur pendaftaran ini akan dibuka <br> silahkan cek secara berkala.</p>
                <a class="btn btn-lg" href="/" role="button" id="cutomers">Oke, Kembali</a>
                </center>
            </div>
            <div class="col-md-6" id="img-people" style="margin-top: -4%">
                <img src="{{asset('assets/img/sory-right-01.png')}}" alt="Responsive image" height="450">
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

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>

  </body>
</html>
