<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\aturan;
use App\Models\DetailPerhitungan;
use App\Models\gejala;
use App\Models\penyakit;
use App\Models\RiwayatGejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GejalaController extends Controller
{
    public function index()
    {
        $gejala = gejala::get();
        return view('User.GejalaSolusi', [
            'title' => 'Diagnosis',
            'gejala' => $gejala
        ]);
    }

    // public function hitung(Request $request)
    // {
    //     // Ambil input dari user, hanya ambil gejala yang diisi oleh user
    //     $gejalaInput = $request->input('gejala');

    //     // Validasi input: pastikan gejala adalah array dan tidak kosong
    //     if (!is_array($gejalaInput) || empty($gejalaInput)) {
    //         return back()->withErrors(['error' => 'Harap pilih gejala yang relevan.']);
    //     }

    //     // Filter input: hanya gejala valid dengan nilai antara 0 dan 1
    //     $gejalaInput = array_filter($gejalaInput, function ($value) {
    //         return is_numeric($value) && $value >= 0 && $value <= 1;
    //     });

    //     // Jika tidak ada gejala valid yang tersisa
    //     if (empty($gejalaInput)) {
    //         return back()->withErrors(['error' => 'Harap masukkan nilai gejala yang valid.']);
    //     }

    //     // Ambil semua penyakit dengan relasi aturan (eager loading)
    //     $penyakitList = Penyakit::with('aturan')->get();
    //     $hasilCF = [];

    //     // Hitung Certainty Factor untuk setiap penyakit
    //     foreach ($penyakitList as $penyakit) {
    //         $cfCombine = 0; // Nilai awal CF

    //         foreach ($penyakit->aturan as $aturan) {
    //             $gejalaId = $aturan->gejala_id;

    //             // Cek apakah gejala ini ada dalam input user
    //             if (isset($gejalaInput[$gejalaId])) {
    //                 $cfUser = $gejalaInput[$gejalaId]; // Nilai CF dari user
    //                 $cfPakar = $aturan->cf_rule;      // Nilai CF dari pakar

    //                 // Perhitungan Certainty Factor menggunakan rumus kombinasi yang tepat
    //                 $cf = $cfUser * $cfPakar;

    //                 // Kombinasi CF dengan rumus yang lebih tepat
    //                 $cfCombine = $cfCombine + $cf * (1 - $cfCombine);
    //             }
    //         }

    //         // Jika CF gabungan lebih besar dari 0, masukkan ke dalam hasil
    //         if ($cfCombine > 0) {
    //             $hasilCF[] = [
    //                 'penyakit' => $penyakit->nama,
    //                 'nilai_cf' => round($cfCombine, 2),
    //                 'deskripsi' => $penyakit->deskripsi, // Deskripsi untuk penyakit ini
    //                 'solusi' => $penyakit->aturan->first()->solusi ?? '', // Solusi dari aturan pertama
    //             ];
    //         }
    //     }

    //     // Urutkan hasil berdasarkan nilai CF tertinggi
    //     usort($hasilCF, function ($a, $b) {
    //         return $b['nilai_cf'] <=> $a['nilai_cf'];
    //     });

    //     // Ambil hanya hasil dengan CF tertinggi
    //     $hasilTertinggi = $hasilCF[0] ?? null;

    //     // Simpan hasil ke database jika ada hasil tertinggi
    //     if ($hasilTertinggi) {
    //         RiwayatGejala::create([
    //             'user_id' => Auth::id(), // ID pengguna yang sedang login
    //             'gejala' => json_encode($gejalaInput), // Simpan gejala dalam format JSON
    //             'hasil_penyakit' => $hasilTertinggi['penyakit'], // Nama penyakit
    //             'nilai_cf' => $hasilTertinggi['nilai_cf'], // Nilai CF tertinggi
    //         ]);
    //     }

    //     // Menampilkan hasil di tampilan
    //     return view('User.hasil', [
    //         'hasilTertinggi' => $hasilTertinggi,
    //         'gejalaInput' => $gejalaInput,
    //         'daftarGejala' => gejala::whereIn('id', array_keys($gejalaInput))->get()
    //     ]);
    // }

    public function hitung(Request $request)
    {
        $gejalaInput = $request->input('gejala');

        if (!is_array($gejalaInput) || empty($gejalaInput)) {
            return back()->withErrors(['error' => 'Harap pilih gejala yang relevan.']);
        }

        $gejalaInput = array_filter($gejalaInput, function ($value) {
            return is_numeric($value) && $value >= 0 && $value <= 1;
        });

        if (empty($gejalaInput)) {
            return back()->withErrors(['error' => 'Wajib Pilih Salah Satu Gejala Terlebih Dahulu.!']);
        }

        $penyakitList = Penyakit::with('aturan')->get();
        $hasilCF = [];
        $detailPerhitungan = [];

        foreach ($penyakitList as $penyakit) {
            $cfCombine = 0;
            $steps = [];

            foreach ($penyakit->aturan as $aturan) {
                $gejalaId = $aturan->gejala_id;

                if (isset($gejalaInput[$gejalaId])) {
                    $cfUser = $gejalaInput[$gejalaId];
                    $cfPakar = $aturan->cf_rule;

                    $cfGejala = $cfUser * $cfPakar;

                    $cfCombinePrevious = $cfCombine;

                    $cfCombine = $cfCombine + $cfGejala * (1 - $cfCombine);

                    $steps[] = [
                        'gejala_id' => $gejalaId,
                        'cf_user' => $cfUser,
                        'cf_pakar' => $cfPakar,
                        'cf_gejala' => round($cfGejala, 2),
                        'cf_combine_previous' => round($cfCombinePrevious, 2),
                        'cf' => round($cfCombine, 2),
                    ];
                }
            }


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

        usort($hasilCF, function ($a, $b) {
            return $b['nilai_cf'] <=> $a['nilai_cf'];
        });

        $hasilTertinggi = $hasilCF[0] ?? null;

        if ($hasilTertinggi) {
            $riwayat = RiwayatGejala::create([
                'user_id' => Auth::id(),
                'gejala' => json_encode($gejalaInput),
                'hasil_penyakit' => $hasilTertinggi['penyakit'],
                'nilai_cf' => $hasilTertinggi['nilai_cf'],
            ]);

            foreach ($detailPerhitungan as $detail) {
                foreach ($detail['steps'] as $step) {
                    DetailPerhitungan::create([
                        'riwayat_id' => $riwayat->id,
                        'penyakit' => $detail['penyakit'],
                        'gejala_id' => $step['gejala_id'],
                        'cf_user' => $step['cf_user'],
                        'cf_pakar' => $step['cf_pakar'],
                        'cf_gejala' => $step['cf_gejala'],
                        'cf_combine_previous' => $step['cf_combine_previous'], // Tambahkan kolom ini
                        'cf' => $step['cf'],
                    ]);
                }
            }
        }

        return view('User.hasil', [
            'hasilTertinggi' => $hasilTertinggi,
            'gejalaInput' => $gejalaInput,
            'detailPerhitungan' => $detailPerhitungan,
            'daftarGejala' => gejala::whereIn('id', array_keys($gejalaInput))->get()
        ]);
    }
}
