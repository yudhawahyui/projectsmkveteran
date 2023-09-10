@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="#" class="fw-normal">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-2">
                    <div class="white-box">
                        {{-- <div class="d-md-flex mb-3">
                            <h3 class="box-title mb-0">Data Jurusan</h3>
                        </div> --}}
                        <div class="table-responsive">
                            <table class="table no-wrap" id="tbl_list">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Nama Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody class="text-capitalize">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md col-lg col-sm">
                    <div class="white-box">
                        <div class="d-md-flex mb-3">
                            <h3 class="box-title mb-0">Cari siswa berdasarkan jurusan</h3>
                        </div>
                        <div class="table-responsive">
                            <select name="" id="jurusan" class="form-control">
                                <option selected>Pilih Jurusan</option>
                                @foreach ($jurusan as $item)
                                    <option value="{{ $item->nama_jurusan }}">{{ $item->nama_jurusan }}
                                    </option>
                                @endforeach
                            </select>
                            <table class="table no-wrap table-hover" id="student-table">
                                {{-- <table class="table no-wrap" id="student-table"> --}}
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
                                        <th class="border-top-0">Nama Wali</th>
                                        <th class="border-top-0">Nomer Handphone</th>
                                        <th class="border-top-0">Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody class="text-capitalize">
                                    <tr>
                                        <td colspan="11" class="text-center">Pilih Jurusan Terlebih Dahulu</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tbl_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url()->current() }}',
                // scrollX: 10,
                scrollY: true,
                searching: false,
                paging: false,
                info: false,
                columns: [
                    {
                        data: 'nama_jurusan',
                        name: 'nama_jurusan',
                        orderable: false,
                    },
                ]
            });
        });


        $(document).ready(function() {
            $('#jurusan').change(function() {
                // Mendapatkan nilai yang dipilih
                var selectedValue = $(this).val();

                if (selectedValue != "Pilih Jurusan") {
                    // Lakukan permintaan Ajax ke server dengan nilai yang dipilih
                    $.ajax({
                        type: 'GET',
                        url: '/jurusan/' + selectedValue, // Sesuaikan dengan URL rute Anda
                        success: function(response) {
                            // Tanggapan dari server akan berisi data siswa
                            // Anda dapat menampilkan data ini di tabel
                            var tableBody = $('#student-table tbody');
                            tableBody
                                .empty(); // Kosongkan tabel sebelum mengisi dengan data baru

                            // Loop melalui data siswa dan tambahkan baris baru ke tabel
                            $.each(response, function(index, student) {
                                // iterasi index + 1 karena dimulai dari 0
                                iteration = index + 1;

                                var newRow = '<tr>' +
                                    '<td class="small">' + iteration + '</td>' +
                                    '<td class="small">' + student.nisn + '</td>' +
                                    '<td class="small">' + student.name + '</td>' +
                                    '<td class="small">' + student.email + '</td>' +
                                    '<td class="small">' + student.tgl_lahir + '</td>' +
                                    '<td class="small">' + student.jenis_kelamin + '</td>' +
                                    '<td class="small">' + student.agama + '</td>' +
                                    '<td class="small">' + student.asal_sekolah + '</td>' +
                                    '<td class="small">' + student.nama_wali + '</td>' +
                                    '<td class="small">' + student.no_hp + '</td>' +
                                    '<td class="small">' + student.jurusan + '</td>' +
                                    '</tr>';

                                tableBody.append(newRow);
                            });
                        },
                        error: function(xhr, status, error) {
                            // Tangani kesalahan jika permintaan Ajax gagal
                            console.error(error);
                        }
                    });
                } else {
                    var tableBody = $('#student-table tbody');
                    tableBody
                        .empty(); // Kosongkan tabel sebelum mengisi dengan data baru
                }
            });
        });
    </script>
@endpush
