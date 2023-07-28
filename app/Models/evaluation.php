<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class evaluation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['uuid', 'house_data_id', 'ketidakteraturan_bangunan_evaluasi', 'tingkat_kepadatan_bangunan_evaluasi', 'ketidaksesuaian_bangunan_evaluasi', 'jalan_tidak_melayani_seluruh_lingkungan_evaluasi', 'kualitas_jalan_buruk_evaluasi', 'akses_air_minum_tidak_tersedia_evaluasi', 'kebutuhan_air_minum_tidak_terpenuhi_evaluasi', 'drainase_buruk_evaluasi', 'drainase_tidak_tersedia_evaluasi', 'kualitas_drainase_buruk_evaluasi', 'sistem_air_limbah_buruk_evaluasi', 'sarana_pengelolaan_air_limbah_buruk_evaluasi', 'sarana_sampah_buruk_evaluasi', 'sistem_pengelolaan_sampah_buruk_evaluasi',  'prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi',
    'sarana_proteksi_kebakaran_tidak_tersedia_evaluasi',];

    public function houseData()
    {
        return $this->belongsTo(HouseData::class, 'house_data_id');
    }
}
