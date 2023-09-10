<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\AddSiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;
use Yajra\DataTables\Facades\DataTables;

class AddSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $jurusan = Jurusan::all();
        // get 10 data from table users
        $data = User::where('role', 'siswa')
            ->orderBy('id', 'desc');

        if (request()->ajax()) {
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '
                    <div class="d-flex gap-1">
                        <a class="btn btn-warning btn-sm edit-btn text-white" href="' . route('addsiswa.edit', ['addsiswa' => $row->id]) . '">Edit</a>' .
                        '<form action="' . route('addsiswa.destroy', ['addsiswa' => $row->id]) . '" method="POST">' .
                        csrf_field() .
                        method_field('DELETE') .
                        '<button type="submit" class="btn btn-danger text-white btn-sm delete-btn">Delete</button>' .
                        '</form>
                    </div>
                    ';
                })
                ->make();
        }

        return view('admin.add-siswa.index', compact('jurusan'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'nisn' => ['required', 'string'],
                'tgl_lahir' => ['required', 'date'],
                'sekolah_asal' => ['required', 'string'],
                'jenis_kelamin' => ['required', 'string'],
                'agama' => ['required', 'string'],
                'nama_wali' => ['required', 'string'],
                'no_hp' => ['required', 'string'],
                'jurusan' => ['required', 'string'],
            ]
        );

        // upload foto
        if ($request->hasFile('foto')) {
            $fotoPath = public_path('storage/foto-siswa');
            if (!file_exists($fotoPath)) {
                // Jika direktori belum ada, buat direktori baru dengan izin 0755 (boleh disesuaikan)
                mkdir($fotoPath, 0755, true);
            }

            $foto = $request->file('foto');
            $fotoPath = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('storage/foto-siswa'), $fotoPath);
            $data['foto'] = $fotoPath;
        }

        // set default status
        $data['role'] = 'siswa';
        $data['status'] = 'pending';

        // dd($data);
        // dd($data)s;
        $data = User::create($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AddSiswa $addSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        // find user by id
        $user = User::find($id);
        $jurusan = Jurusan::all();
        // dd($user);

        $data = User::where('role', 'siswa')
            ->orderBy('id', 'desc');

        if (request()->ajax()) {
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '
                    <div class="d-flex gap-1">
                        <a class="btn btn-warning btn-sm edit-btn text-white" href="' . route('addsiswa.edit', ['addsiswa' => $row->id]) . '">Edit</a>' .
                        '<form action="' . route('addsiswa.destroy', ['addsiswa' => $row->id]) . '" method="POST">' .
                        csrf_field() .
                        method_field('DELETE') .
                        '<button type="submit" class="btn btn-danger text-white btn-sm delete-btn">Delete</button>' .
                        '</form>
                    </div>
                    ';
                })
                ->make();
        }
        return view('admin.add-siswa.edit', compact('user', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $user = User::find($id);
        // Validate the request data
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'nisn' => ['required', 'string'],
            'tgl_lahir' => ['required', 'date'],
            'sekolah_asal' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'agama' => ['required', 'string'],
            'nama_wali' => ['required', 'string'],
            'no_hp' => ['required', 'string'],
            'jurusan' => ['required', 'string'],
        ]);

        // Check if a file named 'foto' is present in the request
        if ($request->hasFile('foto')) {
            $fotoPath = public_path('storage/foto-siswa');
            if (!file_exists($fotoPath)) {
                // If the directory doesn't exist, create it with proper permissions
                mkdir($fotoPath, 0755, true);
            }

            $foto = $request->file('foto');
            $fotoPath = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('storage/foto-siswa'), $fotoPath);
        } else {
            // If no file is present in the request, use the old filename from the database
            $fotoPath = $user->foto;
        }

        // Update the user's data in the database
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'tgl_lahir' => $request->tgl_lahir,
            'sekolah_asal' => $request->sekolah_asal,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'nama_wali' => $request->nama_wali,
            'no_hp' => $request->no_hp,
            'jurusan' => $request->jurusan,
            'foto' => isset($fotoPath) ? $fotoPath : null,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }



    public function actionStatus(Request $request, $id)
    {
        // Cari user berdasarkan ID
        // Cek url sekarang
        // dd($request->all());
        $user = User::find($id);

        // rubah status
        $user->status = $request->status;
        $user->save();

        // return response()->json(['success' => 'Status berhasil diubah.']);
        return redirect()->back()->with(['success', 'Status berhasil diubah.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari user berdasarkan ID dan hapus
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data gagal dihapus.');
        }

        $user->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    // cetak pdf
    public function pdf()
    {
        $data = User::where('role', 'siswa')
            ->orderBy('id', 'desc')
            ->get();

        $pdf = PDF::loadView('admin.pdf.index', ['data' => $data])->setPaper('a4', 'landscape');
        return $pdf->download('data-siswa.pdf');
        // return view('admin.pdf.index', compact('data'));
    }
}
