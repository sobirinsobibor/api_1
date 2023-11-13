<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            // Cari pengguna berdasarkan NRP
            $user = User::where('email', $request->input('email'))->first();

            if (!$user) {
                return response()->json(['error' => 'Pengguna dengan email tersebut tidak ditemukan.'], 404);
            }

            // Periksa apakah kata sandi cocok
            if (!Hash::check($request->input('password'), $user->password)) {
                return response()->json(['error' => 'Kata sandi salah.'], 401);
            }

            // Buat token otentikasi
            $token = auth()->login($user);

            // Atur waktu kedaluwarsa token sesuai kebutuhan
            //$expiresInMinutes = 60; // Ganti sesuai kebutuhan

            //Tambahkan informasi tambahan ke token jika diperlukan
            

            // Mengembalikan respons JSON dengan token
            return response()->json([
                'access_token' => $token,
                'token_type' => 'bearer',

            ]);
        } catch (\Exception $e) {
            // Tangani pengecualian atau jika terjadi kesalahan validasi atau otentikasi.
            return response()->json(['error' => $e->getMessage()], 500);
        }    
    }
}
