<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginAPIController extends Controller
{
    public function doLogin(Request $request) {
        try {
            $pegawai = Pegawai::where('email', $request->email)->first();
            if (Hash::check($request->password, $pegawai->password)) {
                return ['login' => 'true', 'message' => 'Login berhasil'];
            }
        } catch (\Exception $e) {
            return ['login' => 'false', 'message' => 'Login gagal'];
        }
        return ['login' => 'false', 'message' => 'Login gagal'];
    }
}
