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

    <title>Detail Produk</title>
  </head>
  <body>

    <nav class="navbar">
        <a class="navbar-brand" href="/">
            <img src="{{asset('assets/img/navbrand-01.png')}}" class="img-fluid" alt="Responsive image" width="170">
        </a>
    </nav>
    <div class="container" id="content">
        <h3>Detail Produk</h3>
        <hr style="border: solid 1px #FA9828;">
    </div>
    <div class="container" style="margin-top: 2%">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5" style="margin-top: 2%; margin-bottom: 2%;">
                    <center>
                        <div class="photo-product">
                            @foreach ($photo as $pict)
                                @if ($pict['product_id'] == $product['id'])
                                <div>
                                    <img src="{!!$apiurl!!}/product_photo/{!!$pict['title']!!}" class="img-fluid" alt="Responsive image" width="400">
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </center>
                    </div>
                    <div class="col-md-7" style="margin-top: 2%; margin-bottom: 2%; padding-top: 3%">
                        <h3>{!!$product['name']!!}</h3>
                        <br>
                        <h4 style="color: #FA9828; margin-bottom: 20px;">Rp. {!! number_format($product['price']) !!}</h4>
                    <center>
                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>:</td>
                                    <td>{!!$product['description']!!}</td>
                                </tr>
                                <tr>
                                    <td>Tersedia</td>
                                    <td>:</td>
                                    <td>{!!$product['stock']!!}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-block" id="btn-beli" href="/product" role="button" >Beli</a>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="content">
        <h5>Informasi Penjual</h5>
        <hr style="border: solid 1px #FA9828;">
    </div>

    <div class="container" style="margin-top: 2%; margin-bottom: 5%">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5" style="margin-top: 2%; margin-bottom: 2%;">
                    <center>
                        <div class="photo-business">
                            <div>
                                @if ($business['photo'] == null)
                                <img src="{{asset('assets/img/no-image.jpg')}}" class="img-fluid" alt="Responsive image" width="200">
                                @else
                                <img src="{!!$apiurl!!}/business_photo/{!!$business['photo']!!}" class="img-fluid" alt="Responsive image" width="200">
                                @endif
                            </div>
                        </div>
                    </center>
                    </div>
                    <div class="col-md-7" style="margin-top: 2%; margin-bottom: 2%; padding-top: 3%">
                    <center>
                        <table class="table table-sm">
                            <tbody>
                              <tr>
                                <td>Nama Usaha</td>
                                <td>:</td>
                                <td>{!!$business['name']!!}</td>
                              </tr>
                              <tr>
                                <td>Pemilik</td>
                                <td>:</td>
                                <td>{!!$business['owner']!!}</td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{!!wordwrap($business['loc_address'],30,"<br>\n")!!}</td>
                              </tr>
                            </tbody>
                        </table>
                    </center>
                    <a class="btn" id="btn-lihat" href="/product" role="button" >Kunjungi Toko</a>
                    </div>
                </div>
            </div>
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

  </body>
</html>
