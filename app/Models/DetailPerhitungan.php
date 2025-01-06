<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPerhitungan extends Model
{
    use HasFactory;

    protected $table = '_detail__perhitungan';
    protected $fillable = [
        'riwayat_id',
        'penyakit',
        'gejala_id',
        'cf_user',
        'cf_pakar',
        'cf',
        'cf_gejala',
        'cf_combine_previous',
    ];

    public function riwayat()
    {
        return $this->belongsTo(RiwayatGejala::class);
    }
}
