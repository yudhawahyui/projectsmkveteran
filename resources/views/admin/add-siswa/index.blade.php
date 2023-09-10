@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Tambah Data Siswa</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="/add-siswa" class="fw-normal">Tambah Data Siswa</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">
                    <b>
                        {{ session('success') }}
                    </b>
                </div>
            @endif
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-5">
                    <div class="white-box">
                        <div class="d-md-flex mb-3">
                            <h3 class="box-title mb-0">Tambah Data Siswa</h3>
                        </div>
                        <form class="user" action="{{ route('addsiswa.store') }}" method="POST"
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
                                    <input type="date" class="form-control" id="exampleRepeatPassword" name="tgl_lahir">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jurusan</label>
                                <select name="jurusan" class="form-control form-select" id="">
                                    <option selected>Pilih Jurusan</option>
                                    @foreach ($jurusan as $item)
                                        <option value="{{ $item->nama_jurusan }}">{{ $item->nama_jurusan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Sekolah Asal</label>
                                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Sekolah Asal"
                                    name="sekolah_asal">
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
                            <button type="submit" class="btn btn-success btn-user btn-block text-white">
                                Tambah Siswa
                            </button>
                            <hr>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-7">
                    <div class="white-box">
                        <div class="d-md-flex mb-3 justify-content-between">
                            <h3 class="box-title mb-0">Siswa Baru</h3>
                            <form action="{{ route('addsiswa.pdf') }}" method="POST">
                                @csrf
                                @method('POST')
                                <button formtarget="_blank" class="btn btn-sm btn-primary text-white">Cetak PDF</button>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap table-responsive table-hover" id="tbl_list" width="100%">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">NISN</th>
                                        <th class="border-top-0">Foto</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Tanggal Lahir</th>
                                        <th class="border-top-0">Jenis Kelamin</th>
                                        <th class="border-top-0">Agama</th>
                                        <th class="border-top-0">Asal Sekolah</th>
                                        <th class="border-top-0">Nama Wali</th>
                                        <th class="border-top-0">Nomer Handphone</th>
                                        <th class="border-top-0">Jurusan</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Action Status</th>
                                        <th class="border-top-0">Action</th>
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
        {{-- Modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Foto Siswa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="modalImage" src="" alt="Foto Siswa" width="100%" height="auto">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-white"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Modal --}}
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function($addsiswa) {
            $('#tbl_list').DataTable({
                processing: true,
                serverSide: true,
                dataType: 'json',
                ajax: '{{ url()->current() }}',
                // fixedHeader: true,
                fixedColumns: {
                    left: 2,
                    right: 1,
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
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'nisn',
                        name: 'nisn'
                    },
                    {
                        data: 'foto',
                        name: 'foto',
                        render: function(data, type, row) {
                            var imageUrl = "{{ asset('storage/foto-siswa') }}/" + row.foto;
                            return `
                            <button type="button" class="btn text-primary foto-btn" data-foto="${imageUrl}" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Foto</button>
                        `;
                        }
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
                        data: 'nama_wali',
                        name: 'nama_wali'
                    },
                    {
                        data: 'no_hp',
                        name: 'no_hp'
                    },
                    {
                        data: 'jurusan',
                        name: 'jurusan'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: null,
                        name: 'actionStatus',
                        render: function(data, type, row) {
                            return `
                            <form action="{{ url('addsiswa/actionstatus/${row.id}') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="name" name="name" value="${row.name}">
                                <button type="submit" name="status" value="Diterima" class="btn btn-success text-white btn-sm status-btn">Terima</button>
                                <button type="submit" name="status" value="Tidak Diterima" class="btn btn-danger btn-sm text-white status-btn">TIdak Diterima</button>
                            </form>
                                    `;
                        }
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            });
        });

        $('#tbl_list').on('click', '.status-btn', function() {
            var userId = $(this).data('id');
            //ambil value dari input name di form
            var nama = document.getElementById("name").value;

            // Prompt the user for confirmation before updating the status
            if (confirm('Apakah anda yakin ingin mengubah status dari siswa ' + nama + ' ?')) {
                var updateStatus = '{{ route('addsiswa.actionstatus', ':id') }}';
                updateStatus = updateStatus.replace(':id', userId);

                $.ajax({
                    url: updateStatus,
                    type: 'PUT',
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#tbl_list').DataTable().ajax.reload();
                        } else {
                            alert('Failed to update status user: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating status: ' + error);
                    }
                });
            } else {
                return false;
            }
        });

        $('#tbl_list').on('click', '.delete-btn', function() {
            var userId = $(this).data('id');

            // Prompt the user for confirmation before deleting
            if (confirm('Are you sure you want to delete this ?')) {
                var deleteUrl = '{{ route('addsiswa.destroy', ':id') }}';
                deleteUrl = deleteUrl.replace(':id', userId);

                // Send an AJAX request to delete the user
                $.ajax({
                    url: deleteUrl,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Refresh the DataTable after successful deletion
                            $('#tbl_list').DataTable().ajax.reload();
                        } else {
                            alert('Failed to delete user: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error deleting user: ' + error);
                    }
                });
            } else {
                return false;
            }
        });

        // Event handler ketika modal muncul
        $('#tbl_list').on('click', '.foto-btn', function() {
            var imageUrl = $(this).data('foto'); // Ambil URL gambar dari data siswa
            var modalImage = $('#modalImage'); // Ambil elemen gambar di dalam modal
            console.log("ini adalah gambar " + imageUrl)

            // Atur sumber gambar modal sesuai dengan URL gambar dari data siswa
            modalImage.attr('src', imageUrl);

            // Tampilkan modal
            $('#exampleModal').modal('show');
        });
    </script>
@endpush
