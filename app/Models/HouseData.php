<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HouseData extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['uuid', 'user_id', 'province_id', 'city_id', 'district_id', 
        'village_id', 'nama', 'luas', 'lintang', 'bujur', 'kmz', 'dusun', 'jumlah_bangunan',
        'jumlah_jiwa', 'luas_wilayah', 'kepadatan_penduduk', 'tingkat_kepadatan_penduduk', 'jumlah_kk', 'ketidakteraturan_bangunan', 'tingkat_kepadatan_bangunan', 'ketidaksesuaian_bangunan', 'panjang_jalan_ideal',
        'panjang_jalan_eksisting', 'jalan_tidak_melayani_seluruh_lingkungan', 
        'kualitas_jalan_buruk', 'akses_air_minum_tidak_tersedia', 
        'kebutuhan_air_minum_tidak_terpenuhi','panjang_drainase_ideal', 'panjang_drainase_eksisting', 'drainase_buruk', 'drainase_tidak_tersedia', 'kualitas_drainase_buruk', 'sistem_air_limbah_buruk', 'sarana_pengelolaan_air_limbah_buruk', 'sarana_sampah_buruk', 'sistem_pengelolaan_sampah_buruk',  'prasarana_proteksi_kebakaran_tidak_tersedia',
        'sarana_proteksi_kebakaran_tidak_tersedia', 'nilai_kumuh', 'tingkat_kumuh', 
        'status_penguasaan_lahan', 'kesesuaian_rtr', 'legalitas_lahan', 'nilai_strategis_lokasi','kependudukan', 'kondisi_sosial', 'nilai_pl', 'tingkat_pl', 'klasifikasi', 'prioritas', 'image_one', 'image_two',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }

    public function houseDataStatus()
    {
        return $this->hasOne(HouseDataStatus::class, 'id');
    }

    public function percentage()
    {
        return $this->hasOne(Percentage::class, 'id');
    }

    public function evaluation()
    {
        return $this->hasOne(evaluation::class, 'id');
    }
}
