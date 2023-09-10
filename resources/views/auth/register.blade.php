<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('asset/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Jadi Siswa <br> <b>SMK VETERAN</b> <br>
                                    Sekarang!</h1>
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('sucess'))
                                <div class="alert alert-danger">
                                    {{ session('sucess') }}
                                </div>
                            @endif
                            <form class="user" action="{{ route('register') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="exampleFirstName"
                                            placeholder="Nama Lengkap" name='name'>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail"
                                            placeholder="Email Address" name="email">
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Nomer Handphone</label>
                                        <input type="number" class="form-control" id="exampleInputEmail"
                                            placeholder="Nomer Handphone" name="no_hp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-label">NISN</label>
                                        <input type="number" class="form-control" id="exampleInputPassword"
                                            placeholder="Masukkan NISN" name="nisn">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control form-select" id="">
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="laki - laki">Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-label">Agama</label>
                                        <select name="agama" class="form-control form-select" id="">
                                            <option selected>Pilih Agama</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="katholik">Katholik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="exampleRepeatPassword"
                                            name="tgl_lahir">
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label class="form-label">Alamat Lengkap</label>
                                    <input type="text" class="form-control" id="exampleInputEmail"
                                    placeholder="Alamat Lengkap" name="alamat">
                                </div> --}}
                                <div class="form-group">
                                    <label class="form-label">Sekolah Asal</label>
                                    <input type="text" class="form-control" id="exampleInputEmail"
                                        placeholder="Sekolah Asal" name="sekolah_asal">
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="form-label">Nama Wali</label>
                                        <input type="text" class="form-control" id="exampleInputEmail"
                                            placeholder="Nama Orang Tua/Wali" name="nama_wali">
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Foto</label>
                                        <input type="file" class="form-control" id="exampleInputEmail"
                                            placeholder="Nama Orang Tua/Wali" name="foto">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    Daftar
                                </button>
                                <hr>
                            </form>
                            <div class="text-center">
                                <span class="small">
                                    Sudah Pernah Daftar?
                                    <a href="{{ route('login') }}"> Masuk Sekarang!</a>
                                </span>
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

</body>

</html>
