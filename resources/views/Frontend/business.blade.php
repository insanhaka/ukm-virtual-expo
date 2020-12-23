<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/Frontend/productview.css')}} ">
    {{-- Slider CSS --}}
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
        .slick-slide, .slick-slide *{ outline: none !important; }
    </style>
    {{-- Font Awesome Icon CSS --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <title>Detail Usaha</title>
  </head>
  <body>

    <nav class="navbar">
        <a class="navbar-brand" href="/categories">
            <img src="{{asset('assets/img/navbrand-01.png')}}" class="img-fluid" alt="Responsive image" width="170">
        </a>
    </nav>
    <div class="business" style="background-color: #FFFDF9; padding-top: 2%; padding-bottom: 2%;">
        <div class="container">
            @if ( $business['status'] === 'Verify' )
                <div class="row">
                    <div class="col-md-1">
                        <img src="{{asset('assets/img/status.png')}}" width="30" alt="" style="margin-top: 3%">
                    </div>
                    <div class="col-md-11" style="margin-left: -7%">
                        <h3 style="margin-left: 3%">{!!$business['name']!!}</h3>
                    </div>
                </div>
            @else
            <h3 style="margin-left: 3%">{!!$business['name']!!}</h3>
            @endif

            <hr>
            <div class="row">
                <div class="col-md-3">
                    <center>
                    @if ($business['photo'] == null)
                    <img src="{{asset('assets/img/default-image.jpg')}}" class="img-fluid" alt="Responsive image" width="300">
                    @else
                    <img src="{!!$apiurl!!}/business_photo/{!!$business['photo']!!}" class="img-fluid" alt="Responsive image" width="300">
                    @endif
                    </center>
                </div>
                <div class="col-md-5">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td><img src="{{asset('assets/img/owner.png')}}" width="20" alt=""> &nbsp Pemilik</td>
                                <td>:</td>
                                <td>{!!$business['owner']!!}</td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('assets/img/box.png')}}" width="20" alt=""> &nbsp Jumlah Produk</td>
                                <td>:</td>
                                <td>{!!$count_product!!}</td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('assets/img/location.png')}}" width="20" alt=""> &nbsp Lokasi</td>
                                <td>:</td>
                                <td>{!!wordwrap($business['loc_address'],30,"<br>\n")!!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    @if ($owner['attachment'] == null)
                    @else
                    <div class="row">
                        <div class="col-md-1" style="padding-top: 1%;">
                            <img src="{{asset('assets/img/protection.png')}}" width="30" alt="">
                        </div>
                        <div class="col-md-10">
                            <p style="margin-left: 3%;">Pemilik usaha ini telah menyetujui untuk menerapkan protokol kesehatan</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="menu" style="background-color: #FFFDF9">
        <div class="container">
            <hr>
            <ul class="nav justify-content-around">
                <li class="nav-item">
                  <a class="nav-link active" href="#" style="color: #000; text-decoration: none;">Semua Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: #000; text-decoration: none;">Produk Terbaru</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #000; text-decoration: none;">
                        Filter Berdasarkan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Harga Terendah</a>
                        <a class="dropdown-item" href="#">Harga Tertinggi</a>
                        <a class="dropdown-item" href="#">Rating</a>
                    </div>
                </li>
            </ul>
            <hr>
        </div>
    </div>

    <div class="container" style="margin-top: 2%">
        <div class="row">
            @foreach ($product as $item)
            <div class="col-md-3" style="margin: 2%;">
                <div class="card" style="background-color: #FFFDF9; padding: 2%;">
                    <center>
                        <div class="photo-product">
                            @foreach ($photo as $pict)
                                @if ($pict['product_id'] == $item['id'])
                                <div>
                                    <img src="{!!$apiurl!!}/product_photo/{!!$pict['title']!!}" class="img-fluid" alt="Responsive image" width="200">
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </center>
                    <div class="card-body">
                        <h6 style="margin-bottom: 10px;">{!! $item['name'] !!}</h6>
                        <h5 style="color: #FA9828">Rp. {!! number_format($item['price']) !!}</h5>
                        <table class="table table-borderless table-sm">
                            <tbody style="font-size: 12px;">
                                <tr style="margin-top: -10px;">
                                    <td style="float: right">Tersedia : {!! $item['stock'] !!}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-block" id="btn-beli" href="https://wa.me/+62{!!$business['contact']!!}" role="button" >Beli</a>
                            </div>
                            {{-- <div class="col-md-6">
                                <a class="btn btn-block" id="btn-lihat" href="/product/detail/{!! $item['id'] !!}" role="button">Detail</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.photo-product').slick({
            arrows: false,
            dots: true,
        });
    </script>
    {{-- Font Awesome Icon JS --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

  </body>
</html>
