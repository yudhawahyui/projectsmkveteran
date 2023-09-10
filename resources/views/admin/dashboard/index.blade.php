@extends('layouts.app')

@section('content')
    @can('isAdmin')
        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="/dashboard" class="fw-normal">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Siswa</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto">
                                    <span class="counter text-success">
                                        @if ($user == null)
                                            0
                                        @elseif($user->count() == 0)
                                            Data Kosong
                                        @else
                                            {{ $user->count() }}
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Siswa Laki - Laki</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto">
                                    <span class="counter text-purple">
                                        @if ($user == null)
                                            0
                                        @elseif ($user->count() - $user->where('jenis_kelamin', 'laki - laki')->count() == 0)
                                            Data Kosong
                                        @else
                                            {{ $user->count() - $user->where('jenis_kelamin', 'laki - laki')->count() }}
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Siswa Perempuan</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto">
                                    <span class="counter text-info">
                                        @if ($user == null)
                                            0
                                        @elseif ($user->count() - $user->where('jenis_kelamin', 'perempuan')->count() == 0)
                                            Data Kosong
                                        @else
                                            {{ $user->count() - $user->where('jenis_kelamin', 'perempuan')->count() }}
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Data Semua Siswa</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap table-hover table-responsive" id="tbl_list" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">NISN</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Tanggal Lahir</th>
                                            <th class="border-top-0">Jenis Kelamin</th>
                                            <th class="border-top-0">Agama</th>
                                            <th class="border-top-0">Asal Sekolah</th>
                                            <th class="border-top-0">Jurusan</th>
                                            <th class="border-top-0">Nama Wali</th>
                                            <th class="border-top-0">Nomer Handphone</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-capitalize">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elsecan('isSiswa')
        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="/dashboard" class="fw-normal">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid hidden">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($user->status == 'diterima')
                        <div class="bg-white alert d-flex justify-content-center align-items-center gap-3" style="height:78vh">
                            <img src="{{ asset('asset/img/logo.jpg') }}" alt="" style="width: 75px">
                            <H1> Selamat! Anda diterima di <b>SMKS Veteran <span class="text-primary">Kota Cirebon</span></b>!
                            </H1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endcan
    <p class="hidden">INFO</p>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tbl_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url()->current() }}',
                // fixedHeader: true,
                fixedColumns: {
                    left: 3,
                    right: 0,
                },
                paging: true,
                scrollCollapse: true,
                scrollX: true,
                // scrollY: 300,
                columns: [{
                        data: 'id',
                        name: 'id',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'nisn',
                        name: 'nisn'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'tgl_lahir',
                        name: 'tgl_lahir'
                    },
                    {
                        data: 'jenis_kelamin',
                        name: 'jenis_kelamin'
                    },
                    {
                        data: 'agama',
                        name: 'agama'
                    },
                    {
                        data: 'sekolah_asal',
                        name: 'sekolah_asal'
                    },
                    {
                        data: 'jurusan',
                        name: 'jurusan'
                    },
                    {
                        data: 'nama_wali',
                        name: 'nama_wali'
                    },
                    {
                        data: 'no_hp',
                        name: 'no_hp'
                    },
                ]
            });
        });
    </script>
@endpush
