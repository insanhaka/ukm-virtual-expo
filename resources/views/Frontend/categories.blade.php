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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/Frontend/categories.css')}} ">

    <title>Kategori Produk</title>
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

    {{-- Content Start --}}
    <div class="container text-center" id="content">
        <h3>Kategori Produk</h3>
    </div>
    <div class="container" id="menu-item">
        <div class="row">
            @foreach ($category as $item)
            <div class="col-md-4" style="margin-top: 7%;">
                <center>
                    <a href="/categories/{!!$item->product_category_id!!}-cat!{!!$item->product_category_uri!!}">
                    <div class="card" style="padding-top: 10%; background-color: #FFFDF9">
                        <center>
                        <img src="{{asset('menus_icon/'.$item->icon.'')}}" class="img-fluid" alt="Responsive image" width="130">
                        </center>
                        <div class="card-body">
                            <p class="text-menu text-center">{!!$item->product_category_name!!}</p>
                        </div>
                    </div>
                    </a>
                </center>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Content End --}}

    {{-- footer Start --}}
    <div class="footer">
        <div class="row justify-content-between">
            <div class="col-md-3" style="margin-top: 20px;">
            </div>
            <div class="col-md-3" style="margin-top: 50px; margin-right: 20px;">
                <p class="text-center" style="font-size: 11px; color: #8A8A8A; float: right;">&copy;{!! date("Y") !!} Powered By Dinas Kominfo Kabupaten Tegal <br> Develeper IHK</p>
            </div>
        </div>
    </div>
    {{-- Footer End --}}


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>

  </body>
</html>
