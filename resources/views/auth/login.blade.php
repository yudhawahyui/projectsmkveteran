<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->

    {{-- <link href="{{ asset('asset/css/sb-admin-2.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('asset/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Daftar Jadi Siswa <br> <b>SMK VETERAN</b> <br>
                                            Sekarang!</h1>
                                    </div>

                                    @if (session('error'))
                                        <div class="alert text-center alert-danger">
                                            <b>
                                                {{ session('error') }}
                                            </b>
                                        </div>
                                    @endif
                                    @if (session('tolak'))
                                        <div class="alert text-center alert-danger">
                                            <b>
                                                {{ session('tolak') }}
                                            </b>
                                        </div>
                                    @endif
                                    @if (session('pending'))
                                        <div class="alert text-center alert-warning">
                                            <b>
                                                {{ session('pending') }}
                                            </b>
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form class="user" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group" id="passwordField" style="display: none;">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="loginAdmin" class="custom-control-input"
                                                    id="loginAdmin" value="1">
                                                <label class="custom-control-label" for="loginAdmin">Login Sebagai
                                                    Admin</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <span class="small">
                                            Belum Mendaftar??
                                            <a href="{{ route('register-siswa.index') }}">Daftar Sekarang!</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('asset/js/sb-admin-2.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Mendengarkan peristiwa 'change' pada checkbox
            $('#loginAdmin').change(function() {
                if (this.checked) {
                    // Checkbox dicentang, tampilkan input password
                    $('#passwordField').show();
                } else {
                    // Checkbox tidak dicentang, sembunyikan input password dan reset nilainya
                    $('#passwordField').hide();
                    $('#exampleInputPassword').val('');
                }
            });
        });
    </script>

</body>

</html>
