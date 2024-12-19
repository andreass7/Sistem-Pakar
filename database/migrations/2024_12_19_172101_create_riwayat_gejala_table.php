<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayat_gejala', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Relasi ke tabel pengguna
            $table->text('gejala')->nullable(); // Simpan gejala dalam format JSON
            $table->string('hasil_penyakit')->nullable(); // Nama penyakit yang terdiagnosa
            $table->float('nilai_cf')->nullable(); // Nilai CF tertinggi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_gejala');
    }
};
