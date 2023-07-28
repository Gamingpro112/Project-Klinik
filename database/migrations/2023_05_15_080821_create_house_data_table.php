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
        Schema::create('house_data', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('province_id')->constrained('provinces')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('district_id')->constrained('districts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('village_id')->constrained('villages')->onUpdate('cascade')->onDelete('cascade');
            $table->string('lintang');
            $table->string('bujur');
            $table->string('kmz');
            $table->string('nama');
            $table->float('luas', 8, 2);
            $table->string('dusun');
            $table->integer('jumlah_bangunan');
            $table->integer('jumlah_jiwa');
            $table->float('luas_wilayah', 8,2);
            $table->integer('kepadatan_penduduk');
            $table->enum('tingkat_kepadatan_penduduk', ['Rendah', 'Sedang', 'Tinggi', 'Sangat Padat']);
            $table->integer('jumlah_kk');
            $table->integer('ketidakteraturan_bangunan');
            $table->integer('tingkat_kepadatan_bangunan');
            $table->integer('ketidaksesuaian_bangunan');
            $table->integer('panjang_jalan_ideal');
            $table->integer('panjang_jalan_eksisting');
            $table->integer('jalan_tidak_melayani_seluruh_lingkungan');
            $table->integer('kualitas_jalan_buruk');
            $table->integer('akses_air_minum_tidak_tersedia');
            $table->integer('kebutuhan_air_minum_tidak_terpenuhi');
            $table->integer('panjang_drainase_ideal');
            $table->integer('panjang_drainase_eksisting');
            $table->integer('drainase_buruk');
            $table->integer('drainase_tidak_tersedia');
            $table->integer('kualitas_drainase_buruk');
            $table->integer('sistem_air_limbah_buruk');
            $table->integer('sarana_pengelolaan_air_limbah_buruk');
            $table->integer('sarana_sampah_buruk');
            $table->integer('sistem_pengelolaan_sampah_buruk');
            $table->integer('prasarana_proteksi_kebakaran_tidak_tersedia');
            $table->integer('sarana_proteksi_kebakaran_tidak_tersedia');
            $table->integer('nilai_kumuh');
            $table->enum('tingkat_kumuh', ['Tidak Kumuh', 'Ringan', 'Sedang', 'Berat']);
            $table->enum('status_penguasaan_lahan', ['+', '-']);
            $table->enum('kesesuaian_rtr', ['+', '-']);
            $table->enum('legalitas_lahan', ['legal', 'Non-legal']);
            $table->integer('nilai_strategis_lokasi');
            $table->integer('kependudukan');
            $table->integer('kondisi_sosial');
            $table->integer('nilai_pl');
            $table->enum('tingkat_pl', ['Rendah', 'Sedang', 'Tinggi']);
            $table->string('klasifikasi', 50);
            $table->string('prioritas', 50);
            $table->string('image_one');
            $table->string('image_two');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_data');
    }
};
