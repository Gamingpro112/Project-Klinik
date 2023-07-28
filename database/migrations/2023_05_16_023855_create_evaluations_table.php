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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('house_data_id')->constrained('house_data')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('ketidakteraturan_bangunan_evaluasi', [0, 1, 3, 5]);
            $table->enum('tingkat_kepadatan_bangunan_evaluasi', [0, 1, 3, 5]);
            $table->enum('ketidaksesuaian_bangunan_evaluasi', [0, 1, 3, 5]);
            $table->enum('jalan_tidak_melayani_seluruh_lingkungan_evaluasi', [0, 1, 3, 5]);
            $table->enum('kualitas_jalan_buruk_evaluasi', [0, 1, 3, 5]);
            $table->enum('akses_air_minum_tidak_tersedia_evaluasi', [0, 1, 3, 5]);
            $table->enum('kebutuhan_air_minum_tidak_terpenuhi_evaluasi', [0, 1, 3, 5]);
            $table->enum('drainase_buruk_evaluasi', [0, 1, 3, 5]);
            $table->enum('drainase_tidak_tersedia_evaluasi', [0, 1, 3, 5]);
            $table->enum('kualitas_drainase_buruk_evaluasi', [0, 1, 3, 5]);
            $table->enum('sistem_air_limbah_buruk_evaluasi', [0, 1, 3, 5]);
            $table->enum('sarana_pengelolaan_air_limbah_buruk_evaluasi', [0, 1, 3, 5]);
            $table->enum('sarana_sampah_buruk_evaluasi', [0, 1, 3, 5]);
            $table->enum('sistem_pengelolaan_sampah_buruk_evaluasi', [0, 1, 3, 5]);
            $table->enum('prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi', [0, 1, 3, 5]);
            $table->enum('sarana_proteksi_kebakaran_tidak_tersedia_evaluasi', [0, 1, 3, 5]);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
