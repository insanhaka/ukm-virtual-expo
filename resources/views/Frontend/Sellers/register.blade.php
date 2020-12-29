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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/Frontend/seller-register.css')}} ">

    <title>Registrasi</title>
  </head>
  <body>
    <div class="img-head" style="padding-top: 2%">
        <center>
        <img src="{{asset('assets/img/Header-register.png')}}" class="img-fluid" alt="Responsive image" width="600">
        </center>
    </div>
    <div class="container">
        <h5 class="text-center" style="margin-bottom: 2%;">Form Registrasi</h5>
        <div class="row justify-content-center">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Contoh : Bhara Adimukti" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Contoh: BharaADM" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Contoh: bharaadimukti@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <button type="button" class="btn btn-lg" id="daftar">Daftar</button>
                </form>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        $( "#daftar" ).click(function() {

            var name = document.getElementById('name').value;
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if ((name == "") || (username == "") || (email == "") || (password == "")) {
                swal({
                    text: "Harap dilengkapi seluruh data pada form",
                });
            }else {
                axios.post('{!!$url!!}/api/seller-register', {
                    name: name,
                    username: username,
                    email: email,
                    password: password,
                })
                .then(function (response) {
                    swal("Registrasi Berhasil, Kamu akan bisa login setelah ")
                    .then((value) => {
                        if (value == true) {
                            window.location.href = "/sellers";
                        }
                    });
                })
                .catch(function (error) {

                });
            }

        });
    </script>

  </body>
</html>
