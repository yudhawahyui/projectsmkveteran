<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = RouteServiceProvider::LOGIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nisn' => ['required', 'string'],
            'tgl_lahir' => ['required', 'date'],
            'sekolah_asal' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'agama' => ['required', 'string'],
            'nama_wali' => ['required', 'string'],
            'no_hp' => ['required', 'string'],
            // 'jurusan' => ['required', 'string'],
            // 'kelas' => ['required', 'string'],
            // 'foto' => ['required', 'string'],
            // 'status' => ['required', 'string'],
            // 'role' => ['required', 'string'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // set default status
        $data['role'] = 'siswa';
        $data['status'] = 'pending';

        // dd($data);

        if (isset($data['foto'])) {
            $foto = $data['foto'];
            $fotoPath = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('storage/foto-siswa'), $fotoPath);
            $data['foto'] = $fotoPath;
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nisn' => $data['nisn'],
            'tgl_lahir' => $data['tgl_lahir'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'sekolah_asal' => $data['sekolah_asal'],
            'agama' => $data['agama'],
            'nama_wali' => $data['nama_wali'],
            'no_hp' => $data['no_hp'],

            // 'jurusan' => $data['jurusan'],
            // 'kelas' => $data['kelas'],
            'foto' => $data['foto'],
            'status' => $data['status'],
            'role' => $data['role'],

            // 'password' => Hash::make($data['password']),
        ]);

        return $user;
    }

    protected function registered(Request $request, $user)
    {
        return view('auth.login')->with('success', 'Pendaftaran berhasil, silakan login.');
    }
}
