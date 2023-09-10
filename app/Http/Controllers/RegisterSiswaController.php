<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class RegisterSiswaController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.register-siswa.index');
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
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nisn' => ['required', 'string'],
            'tgl_lahir' => ['required', 'date'],
            'sekolah_asal' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'agama' => ['required', 'string'],
            'nama_wali' => ['required', 'string'],
            'no_hp' => ['required', 'string'],
            'foto' => ['sometimes', 'image', 'max:2048'], // Menambahkan validasi untuk foto
        ]);

        // set default status
        $data['role'] = 'siswa';
        $data['status'] = 'pending';

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('storage/foto-siswa'), $fotoPath);
            $data['foto'] = $fotoPath;
        }

        // dd($data);

        User::create($data);

        return redirect()->route('login')->with('success', 'Pendaftaran berhasil, silakan login.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
