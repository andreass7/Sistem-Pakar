<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailPerhitungan;
use App\Models\RiwayatGejala;
use Illuminate\Http\Request;

class RiwayatUserController extends Controller
{
    public function index()
    {
        $riwayat = RiwayatGejala::with('user')->orderBy('created_at', 'desc')->paginate(5);
        $offset = ($riwayat->currentPage() - 1) * $riwayat->perPage();

        return view('Admin.RiwayatUser', [
            'title' => 'Riwayat User',
            'riwayat' => $riwayat,
            'offset' => $offset
        ]);
    }
    public function show($id)
    {
        $riwayat = RiwayatGejala::with(['user', 'detailPerhitungan'])->findOrFail($id);

        return view(
            'Admin.Detail',
            [
                'title' => 'Detail Riwayat User',
                'riwayat' => $riwayat,
            ]
        );
    }
}
