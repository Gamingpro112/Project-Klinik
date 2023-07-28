<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHouseDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'province' => 'required|numeric|exists:provinces,id',
            'city' => 'required|numeric|exists:cities,id',
            'district' => 'required|numeric|exists:districts,id',
            'village' => 'required|numeric|exists:villages,id',
            'lintang' => 'required|string',
            'bujur' => 'required|string',
            'kmz' => 'required|string',
            'nama' => 'required|string',
            'luas' => 'required|string',
            'dusun' => 'required',
            'jumlah_bangunan' => 'required|numeric',
            'jumlah_jiwa' => 'required|numeric',
            'luas_wilayah' => 'required|string',
            'kepadatan_penduduk' => 'required|string',
            'tingkat_kepadatan_penduduk' => 'required|string',
            'jumlah_kk' => 'required|numeric',
            'ketidakteraturan_bangunan' => 'required|numeric',
            'ketidakteraturan_bangunan_persentasi' => 'required|string',
            'ketidakteraturan_bangunan_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'tingkat_kepadatan_bangunan' => 'required|numeric',
            'tingkat_kepadatan_bangunan_persentasi' => 'required|string',
            'tingkat_kepadatan_bangunan_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'ketidaksesuaian_bangunan' => 'required|numeric',
            'ketidaksesuaian_bangunan_persentasi' => 'required|string',
            'ketidaksesuaian_bangunan_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'panjang_jalan_ideal' => 'required|numeric',
            'panjang_jalan_eksisting' => 'required|numeric',
            'jalan_tidak_melayani_seluruh_lingkungan' => 'required|numeric',
            'jalan_tidak_melayani_seluruh_lingkungan_persentase' => 'required|string',
            'jalan_tidak_melayani_seluruh_lingkungan_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'kualitas_jalan_buruk' => 'required|numeric',
            'kualitas_jalan_buruk_persentase' => 'required|string',
            'kualitas_jalan_buruk_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'akses_air_minum_tidak_tersedia' => 'required|numeric',
            'akses_air_minum_tidak_tersedia_persentase' => 'required|string',
            'akses_air_minum_tidak_tersedia_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'kebutuhan_air_minum_tidak_terpenuhi' => 'required|numeric',
            'kebutuhan_air_minum_tidak_terpenuhi_persentase' => 'required|string',
            'kebutuhan_air_minum_tidak_terpenuhi_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'panjang_drainase_ideal' => 'required|numeric',
            'panjang_drainase_eksisting' => 'required|numeric',
            'drainase_buruk' => 'required|numeric',
            'drainase_buruk_persentase' => 'required|string',
            'drainase_buruk_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'drainase_tidak_tersedia' => 'required|numeric',
            'drainase_tidak_tersedia_persentase' => 'required|string',
            'drainase_tidak_tersedia_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'kualitas_drainase_buruk' => 'required|numeric',
            'kualitas_drainase_buruk_persentase' => 'required|string',
            'kualitas_drainase_buruk_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'sistem_air_limbah_buruk' => 'required|numeric',
            'sistem_air_limbah_buruk_persentase' => 'required|string',
            'sistem_air_limbah_buruk_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'sarana_pengelolaan_air_limbah_buruk' => 'required|numeric',
            'sarana_pengelolaan_air_limbah_buruk_persentase' => 'required|string',
            'sarana_pengelolaan_air_limbah_buruk_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'sarana_sampah_buruk' => 'required|numeric',
            'sarana_sampah_buruk_persentase' => 'required|string',
            'sarana_sampah_buruk_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'sistem_pengelolaan_sampah_buruk' => 'required|numeric',
            'sistem_pengelolaan_sampah_buruk_persentase' => 'required|string',
            'sistem_pengelolaan_sampah_buruk_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'prasarana_proteksi_kebakaran_tidak_tersedia' => 'required|numeric',
            'prasarana_proteksi_kebakaran_tidak_tersedia_persentase' => 'required|string',
            'prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'sarana_proteksi_kebakaran_tidak_tersedia' => 'required|numeric',
            'sarana_proteksi_kebakaran_tidak_tersedia_persentase' => 'required|string',
            'sarana_proteksi_kebakaran_tidak_tersedia_evaluasi' => 'required|numeric|in:0, 1, 3, 5',
            'nilai_kumuh' => 'required|numeric',
            'tingkat_kumuh' => 'required|string',
            'status_penguasaan_lahan' => 'required|string|in:+, -',
            'kesesuaian_rtr' => 'required|string',
            'legalitas_lahan' => 'required|string|in:legal, Non-legal',
            'nilai_strategis_lokasi' => 'required|numeric',
            'kependudukan' => 'required|numeric|in:1, 3, 5',
            'kondisi_sosial' => 'required|numeric', 
            'nilai_pl' => 'required|numeric',
            'tingkat_pl' => 'required|string',
            'klasifikasi' => 'required|string',
            'prioritas' => 'required|numeric',
            'image_one' => 'nullable|image:max:1048|mimes:jpg,jpeg,png',
            'image_two' => 'nullable|image:max:1048|mimes:jpg,jpeg,png',
        ];
    }
}
