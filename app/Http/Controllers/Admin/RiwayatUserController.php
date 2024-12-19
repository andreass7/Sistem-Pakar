<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RiwayatGejala;
use Illuminate\Http\Request;

class RiwayatUserController extends Controller
{
    public function index()
    {
        $riwayat = RiwayatGejala::with('user')->paginate(5);

        return view('Admin.RiwayatUser', [
            'title' => 'Riwayat User',
            'riwayat' => $riwayat
        ]);
    }
}
