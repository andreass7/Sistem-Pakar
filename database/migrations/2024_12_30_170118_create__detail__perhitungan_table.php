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
        Schema::create('_detail__perhitungan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('riwayat_id')->constrained('riwayat_gejala')->onDelete('cascade');
            $table->string('penyakit');
            $table->unsignedBigInteger('gejala_id');
            $table->float('cf_user');
            $table->float('cf_pakar');
            $table->float('cf');
            $table->float('cf_gejala');
            $table->float('cf_combine_previous')->nullable(); // Tambahkan kolom ini
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_detail__perhitungan');
    }
};
