<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatGejala extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional jika nama tabel mengikuti format plural)
    protected $table = 'riwayat_gejala';

    // Kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'user_id',       // ID pengguna (relasi ke tabel users)
        'gejala',        // Gejala yang dipilih (disimpan dalam format JSON)
        'hasil_penyakit', // Hasil penyakit yang terdiagnosa
        'nilai_cf',      // Nilai CF tertinggi
    ];

    // Relasi ke model User (jika ada fitur login)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detailPerhitungan()
    {
        return $this->hasMany(DetailPerhitungan::class, 'riwayat_id');
    }
}
