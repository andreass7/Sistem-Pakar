<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';
    protected $fillable = ['kode', 'nama'];

    public function aturan()
    {
        return $this->hasMany(aturan::class);
    }
}
