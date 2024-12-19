<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aturan extends Model
{
    use HasFactory;

    protected $table = 'aturan';
    protected $fillable = ['penyakit_id', 'gejala_id', 'cf_rule', 'solusi'];

    public function gejala()
    {
        return $this->belongsTo(gejala::class);
    }

    public function penyakit()
    {
        return $this->belongsTo(penyakit::class);
    }
}
