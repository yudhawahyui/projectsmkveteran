<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Termwind\Components\Dd;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Login only with email
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required_if:loginAdmin,1', // Password hanya diperlukan jika loginAdmin adalah 0 (tidak dicentang)
        ]);


        $email = $request->input('email');
        $password = $request->input('password');
        $loginAdmin = $request->input('loginAdmin');

        // Cek apakah login sebagai admin atau user
        if ($loginAdmin == 1) {
            // Autentikasi sebagai admin
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                // Autentikasi berhasil sebagai admin
                return redirect()->intended(route('dashboard')); // Ganti ini sesuai dengan rute admin Anda
            } else {
                // Autentikasi gagal sebagai admin
                return redirect()->back()->with('error', 'Login sebagai admin gagal.');
            }
        } else{
            // Autentikasi sebagai user (siswa)
            $user = User::where('email', $email)->first();
            // dd($request->all(), $user);

            if ($user) {
                // Cek status user
                if ($user->status == 'Diterima' || $user->status == 'diterima' && $user->role == 'siswa') {
                    // Autentikasi berhasil sebagai pengguna (user)
                    Auth::login($user);
                    return redirect()->intended(route('dashboard'))->with('success', 'Selamat! Kamu Sudah Diterima!'); // Ganti ini sesuai dengan rute dashboard user Anda
                } else if ($user->status == 'Ditolak' || $user->status == 'ditolak' && $user->role == 'siswa') {
                    return redirect()->back()->with('tolak', 'Pendaftaran Anda Ditolak, Silahkan Daftar Kembali');
                } else if ($user->status == 'Pending' || $user->status == 'pending' && $user->role == 'siswa') {
                    return redirect()->back()->with('pending', 'Pendaftaran Anda Sedang Diperiksa, Kembali Lagi Nanti');
                }
            } else {
                // Autentikasi gagal karena email tidak ditemukan
                return redirect()->back()->with('error', 'Email tidak ditemukan.');
            }
        }
    }

    // logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
