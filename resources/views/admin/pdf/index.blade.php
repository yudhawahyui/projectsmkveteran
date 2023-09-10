<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aloha!</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
            padding: 5px;
        }

        thead tr th {
            font-weight: bold;
            font-size: x-small;
            padding: 5px;
        }

        tbody tr td {
            font-size: x-small;
            text-transform: capitalize;
        }

        .gray {
            background-color: lightgray
        }
    </style>

</head>

<body>

    <table width="100%">
        <tr>
            <td valign="top"><img src="asset/img/logo.jpg" alt="" width="150" /></td>

            {{-- <td valign="top"><img src="/public/asset/img/logo.jpg" alt="" width="150" /></td> --}}
            <td align="right">
                <h1>SMK VETERAN</h1>
                <pre>
                Sunyaragi, Kec. Kesambi, Kota Cirebon, Jawa Barat
                45132
                (0231) 235930
            </pre>
                <b>
                    <h2> {{ Illuminate\Support\Carbon::now()->formatLocalized('%A, %d %B %Y') }}</h2>
                </b>
            </td>
        </tr>

    </table>

    <br />

    <table width="100%">
        <thead style="background-color: lightgray;">
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
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->sekolah_asal }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->nama_wali }}</td>
                    <td>{{ $item->no_hp }}</td>
                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr style="background-color: lightgray;">
                <td colspan="9">Total Siswa</td>
                <td align="right"></td>
                <td align="right">{{ $data->count() }}</td>
            </tr>
        </tfoot>
    </table>

</body>

</html>
