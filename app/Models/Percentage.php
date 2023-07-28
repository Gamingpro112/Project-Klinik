<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Percentage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['uuid', 'house_data_id', 'ketidakteraturan_bangunan_persentasi', 'tingkat_kepadatan_bangunan_persentasi', 'ketidaksesuaian_bangunan_persentasi', 'jalan_tidak_melayani_seluruh_lingkungan_persentase', 'kualitas_jalan_buruk_persentase', 'akses_air_minum_tidak_tersedia_persentase', 'kebutuhan_air_minum_tidak_terpenuhi_persentase', 'drainase_buruk_persentase', 'drainase_tidak_tersedia_persentase', 'kualitas_drainase_buruk_persentase', 'sistem_air_limbah_buruk_persentase', 'sarana_pengelolaan_air_limbah_buruk_persentase', 'sarana_sampah_buruk_persentase', 'sistem_pengelolaan_sampah_buruk_persentase',  'prasarana_proteksi_kebakaran_tidak_tersedia_persentase',
    'sarana_proteksi_kebakaran_tidak_tersedia_persentase',];

    public function houseData()
    {
        return $this->belongsTo(HouseData::class, 'house_data_id');
    }
}
