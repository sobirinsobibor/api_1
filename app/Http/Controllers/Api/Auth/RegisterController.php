<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:150'],
            'email' => ['required', 'email', 'unique:users,email'],
            'username' => ['required', 'string', 'min:3', 'max:150'],
            'password' => ['required', 'min:6',],
        ]);

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'username' => request('username'),
            'password' =>  bcrypt(request('password')),
            'id_role' => 2
        ]);

        return response()->json('Berhasil Registrasi', 200);

    }
}
