<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gejala;
use App\Models\penyakit;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index()
    {
        $gejala = gejala::all();
        return view(
            'Admin.Perhitungan',
            [
                'title' => 'Admin-Perhitungan',
                'gejala' => $gejala
            ]
        );
    }

    public function hitung(Request $request)
    {
        // Input gejala dari form
        $gejalaInput = $request->input('gejala');

        // Validasi input
        if (!is_array($gejalaInput) || empty($gejalaInput)) {
            return back()->withErrors(['error' => 'Harap pilih gejala yang relevan.']);
        }

        // Filter input untuk hanya nilai CF valid (0 <= CF <= 1)
        $gejalaInput = array_filter($gejalaInput, function ($value) {
            return is_numeric($value) && $value >= 0 && $value <= 1;
        });

        if (empty($gejalaInput)) {
            return back()->withErrors(['error' => 'Wajib Pilih Salah Satu Gejala Terlebih Dahulu!']);
        }

        // Ambil daftar penyakit beserta aturan terkait
        $penyakitList = Penyakit::with('aturan')->get();
        $hasilCF = [];
        $detailPerhitungan = [];

        // Perhitungan Certainty Factor (CF)
        foreach ($penyakitList as $penyakit) {
            $cfCombine = 0;
            $steps = [];

            foreach ($penyakit->aturan as $aturan) {
                $gejalaId = $aturan->gejala_id;

                if (isset($gejalaInput[$gejalaId])) {
                    $cfUser = $gejalaInput[$gejalaId];
                    $cfPakar = $aturan->cf_rule;

                    // Hitung CF Gejala dan langkah perkaliannya
                    $cfGejala = $cfUser * $cfPakar;
                    $cfCombinePrevious = $cfCombine;
                    $cfCombine = $cfCombine + $cfGejala * (1 - $cfCombine);

                    // Simpan langkah perhitungan
                    $steps[] = [
                        'gejala_id' => $gejalaId,
                        'cf_user' => $cfUser,
                        'cf_pakar' => $cfPakar,
                        'cf_gejala' => round($cfGejala, 2),
                        'cf_combine_previous' => round($cfCombinePrevious, 2),
                        'cf_combine' => round($cfCombine, 2),
                        'perkalian' => [
                            'cf_user' => $cfUser,
                            'cf_pakar' => $cfPakar,
                            'cf_gejala' => round($cfGejala, 2),
                            'penjelasan' => "{$cfUser} * {$cfPakar} = {$cfGejala}",
                        ],
                    ];
                }
            }

            // Simpan hasil CF jika ada nilai yang valid
            if ($cfCombine > 0) {
                $hasilCF[] = [
                    'penyakit' => $penyakit->nama,
                    'nilai_cf' => round($cfCombine, 2),
                    'deskripsi' => $penyakit->deskripsi,
                    'solusi' => $penyakit->aturan->first()->solusi ?? '',
                ];

                $detailPerhitungan[] = [
                    'penyakit' => $penyakit->nama,
                    'steps' => $steps,
                ];
            }
        }

        // Urutkan hasil CF secara descending
        usort($hasilCF, function ($a, $b) {
            return $b['nilai_cf'] <=> $a['nilai_cf'];
        });

        $hasilTertinggi = $hasilCF[0] ?? null;

        // Return hasil ke view
        return view('Admin.hasil', [
            'title' => 'Admin - Hasil Perhitungan',
            'hasilTertinggi' => $hasilTertinggi,
            'gejalaInput' => $gejalaInput,
            'detailPerhitungan' => $detailPerhitungan,
            'daftarGejala' => Gejala::whereIn('id', array_keys($gejalaInput))->get(),
        ]);
    }
}
