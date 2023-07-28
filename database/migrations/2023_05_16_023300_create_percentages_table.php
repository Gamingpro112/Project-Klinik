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
        Schema::create('percentages', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('house_data_id')->constrained('house_data')->onUpdate('cascade')->onDelete('cascade');
            $table->float('ketidakteraturan_bangunan_persentasi', 8,2);
            $table->float('tingkat_kepadatan_bangunan_persentasi', 8,2);
            $table->float('ketidaksesuaian_bangunan_persentasi', 8,2);
            $table->float('jalan_tidak_melayani_seluruh_lingkungan_persentase', 8,2);
            $table->float('kualitas_jalan_buruk_persentase', 8,2);
            $table->float('akses_air_minum_tidak_tersedia_persentase', 8,2);
            $table->float('kebutuhan_air_minum_tidak_terpenuhi_persentase', 8,2);
            $table->float('drainase_buruk_persentase', 8,2);
            $table->float('drainase_tidak_tersedia_persentase', 8,2);
            $table->float('kualitas_drainase_buruk_persentase', 8,2);
            $table->float('sistem_air_limbah_buruk_persentase', 8,2);
            $table->float('sarana_pengelolaan_air_limbah_buruk_persentase', 8,2);
            $table->float('sarana_sampah_buruk_persentase', 8,2);
            $table->float('sistem_pengelolaan_sampah_buruk_persentase', 8,2);
            $table->float('prasarana_proteksi_kebakaran_tidak_tersedia_persentase', 8,2);
            $table->float('sarana_proteksi_kebakaran_tidak_tersedia_persentase', 8,2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('percentages');
    }
};
