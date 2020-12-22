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
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 style="margin-left: 3%">{!!$business['name']!!}</h3>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                      <center>
                      @if ($business['photo'] == null)
                      <img src="{{asset('assets/img/default-image.jpg')}}" class="img-fluid" alt="Responsive image" width="300">
                      @else
                      <img src="{!!$apiurl!!}/business_photo/{!!$business['photo']!!}" class="img-fluid" alt="Responsive image" width="300">
                      @endif
                      </center>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td>Pemilik</td>
                                <td>:</td>
                                <td>{!!$business['owner']!!}</td>
                              </tr>
                              <tr>
                                <td>Jumlah Produk</td>
                                <td>:</td>
                                <td>10</td>
                              </tr>
                              <tr>
                                <td>Lokasi</td>
                                <td>:</td>
                                <td>{!!wordwrap($business['loc_address'],30,"<br>\n")!!}</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>{!!$business['status']!!}</td>
                              </tr>
                              {{-- <tr>
                                @if ($business['attachment'] == null)
                                <td></td>
                                @else
                                <td>Usaha ini telah bersedia mematuhi Protokol Kesehatan</td>
                                @endif
                              </tr> --}}
                            </tbody>
                        </table>
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
    {{-- Font Awesome Icon JS --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

  </body>
</html>
