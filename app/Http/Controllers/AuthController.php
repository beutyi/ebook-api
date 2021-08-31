<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => 3103119043,
            "Nama" => "Beuty",
            "gender" => "Perempuan",
            "phone" => 62857137508718,
            "class" => "kk4 B RPL 2"
        ];
    }
}
