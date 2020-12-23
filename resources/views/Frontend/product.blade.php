<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/Frontend/product.css')}} ">
    {{-- Slider CSS --}}
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
        .slick-slide, .slick-slide *{ outline: none !important; }
    </style>

    <title>Produk {!! $category !!}</title>
  </head>
  <body>

    {{-- Navbar Start --}}
    <nav class="navbar fixed-top">
        <a class="navbar-brand" href="/categories">
            <img src="{{asset('assets/img/navbrand-01.png')}}" class="img-fluid" alt="Responsive image" width="170">
        </a>
    </nav>
    {{-- Navbar End --}}
    {{-- Img Header Start --}}
    <div class="img-head">
        <img src="{{asset('assets/img/Head-02.png')}}" class="img-fluid" alt="Responsive image">
    </div>
    {{-- Img Header End --}}

    <div class="container" id="content">
        <h3 class="text-center">Produk {!! $category !!}</h3>
        <hr style="border: solid 1px #FA9828;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="dropdown">
                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #000; text-decoration: none">
                      Filter Berdasarkan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Harga Terendah</a>
                      <a class="dropdown-item" href="#">Harga Tertinggi</a>
                      <a class="dropdown-item" href="#">Rating</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <form class="form-inline" style="float: right;">
                    <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit" style="background-color: #FA9828; border-color: #FA9828;">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 2%">
        <div class="row">
            @foreach ($product as $item)
            <div class="col-md-3" style="margin: 2%;">
                <div class="card" style="background-color: #FFFDF9;">
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
                            <div class="col-md-6">
                                @foreach ($business as $val)
                                    @if ($val['id'] == $item['business_id'])
                                    <a class="btn btn-block" id="btn-beli" href="https://wa.me/+62{!!$val['contact']!!}" role="button" >Beli</a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-block" id="btn-lihat" href="/product/detail/{!! $item['id'] !!}" role="button">Detail</a>
                            </div>
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
            dots: false,
        });
    </script>

  </body>
</html>
