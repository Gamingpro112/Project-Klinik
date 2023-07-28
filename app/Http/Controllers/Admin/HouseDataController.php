<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HouseDataRequest;
use App\Http\Requests\UpdateHouseDataRequest;
use App\Models\City;
use App\Models\District;
use App\Models\evaluation;
use App\Models\HouseData;
use App\Models\HouseDataStatus;
use App\Models\Percentage;
use App\Models\Province;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HouseDataController extends Controller
{
    public function index()
    {
        $houseDatas = HouseData::orderBy('id', 'desc')->get();
        return view('admin.house-data.index', compact('houseDatas'));
    }

    public function create()
    {
        $province = Province::first();
        $cities = City::all();
        return view('admin.house-data.create', compact('province', 'cities'));
    }

    public function store(HouseDataRequest $houseDataRequest)
    {
        $validated = $houseDataRequest->validated();

        $imageExtensionOne = $houseDataRequest->file('image_one')->getClientOriginalExtension();
        $imageNameOne = 'image-one' . '-' . rand() . '.' . $imageExtensionOne;
        $pathImageOne = $houseDataRequest->file('image_one')->storeAs('foto', $imageNameOne, 'public');

        $imageExtensionTwo = $houseDataRequest->file('image_two')->getClientOriginalExtension();
        $imageNameTwo = 'image-two' . '-' . rand() . '.' . $imageExtensionTwo;
        $pathImageTwo = $houseDataRequest->file('image_two')->storeAs('foto', $imageNameTwo, 'public');
        
        $houseData = HouseData::create([
            'uuid' => Str::uuid(),
            'user_id' => Auth::user()->id,
            'province_id' => $validated['province'],
            'city_id' => $validated['city'],
            'district_id' => $validated['district'],
            'village_id' => $validated['village'],
            'lintang' => $validated['lintang'],
            'bujur' => $validated['bujur'],
            'kmz' => $validated['kmz'],
            'nama' => $validated['nama'],
            'luas' => $validated['luas'],
            'dusun' => json_encode($validated['dusun']),
            'jumlah_bangunan' => $validated['jumlah_bangunan'],
            'jumlah_jiwa' => $validated['jumlah_jiwa'],
            'luas_wilayah' => $validated['luas_wilayah'],
            'kepadatan_penduduk' => $validated['kepadatan_penduduk'],
            'tingkat_kepadatan_penduduk' => $validated['tingkat_kepadatan_penduduk'],
            'jumlah_kk' => $validated['jumlah_kk'],
            'ketidakteraturan_bangunan' => $validated['ketidakteraturan_bangunan'],
            'tingkat_kepadatan_bangunan' => $validated['tingkat_kepadatan_bangunan'],
            'ketidaksesuaian_bangunan' => $validated['ketidaksesuaian_bangunan'],
            'panjang_jalan_ideal' => $validated['panjang_jalan_ideal'],
            'panjang_jalan_eksisting' => $validated['panjang_jalan_eksisting'],
            'jalan_tidak_melayani_seluruh_lingkungan' => $validated['jalan_tidak_melayani_seluruh_lingkungan'],
            'kualitas_jalan_buruk' => $validated['kualitas_jalan_buruk'],
            'akses_air_minum_tidak_tersedia' => $validated['akses_air_minum_tidak_tersedia'],
            'kebutuhan_air_minum_tidak_terpenuhi' => $validated['kebutuhan_air_minum_tidak_terpenuhi'],
            'panjang_drainase_ideal' => $validated['panjang_drainase_ideal'],
            'panjang_drainase_eksisting' => $validated['panjang_drainase_eksisting'],
            'drainase_buruk' => $validated['drainase_buruk'],
            'drainase_tidak_tersedia' => $validated['drainase_tidak_tersedia'],
            'kualitas_drainase_buruk' => $validated['kualitas_drainase_buruk'],
            'sistem_air_limbah_buruk' => $validated['sistem_air_limbah_buruk'],
            'sarana_pengelolaan_air_limbah_buruk' => $validated['sarana_pengelolaan_air_limbah_buruk'],
            'sarana_sampah_buruk' => $validated['sarana_sampah_buruk'],
            'sistem_pengelolaan_sampah_buruk' => $validated['sistem_pengelolaan_sampah_buruk'],
            'prasarana_proteksi_kebakaran_tidak_tersedia' => $validated['prasarana_proteksi_kebakaran_tidak_tersedia'],
            'sarana_proteksi_kebakaran_tidak_tersedia' => $validated['sarana_proteksi_kebakaran_tidak_tersedia'],
            'nilai_kumuh' => $validated['nilai_kumuh'],
            'tingkat_kumuh' => $validated['tingkat_kumuh'],
            'status_penguasaan_lahan' => $validated['status_penguasaan_lahan'],
            'kesesuaian_rtr' => $validated['kesesuaian_rtr'],
            'legalitas_lahan' => $validated['legalitas_lahan'],
            'nilai_strategis_lokasi' => $validated['nilai_strategis_lokasi'],
            'kependudukan' => $validated['kependudukan'],
            'kondisi_sosial' => $validated['kondisi_sosial'],
            'nilai_pl' => $validated['nilai_pl'],
            'tingkat_pl' => $validated['tingkat_pl'],
            'klasifikasi' => $validated['klasifikasi'],
            'prioritas' => $validated['prioritas'],
            'image_one' => $imageNameOne,
            'image_two' => $imageNameTwo,
        ]);

        $percentage = Percentage::create([
            'uuid' => Str::uuid(),
            'house_data_id' => $houseData->id,
            'ketidakteraturan_bangunan_persentasi' => $validated['ketidakteraturan_bangunan_persentasi'],
            'tingkat_kepadatan_bangunan_persentasi' => $validated['tingkat_kepadatan_bangunan_persentasi'],
            'ketidaksesuaian_bangunan_persentasi' => $validated['ketidaksesuaian_bangunan_persentasi'],
            'jalan_tidak_melayani_seluruh_lingkungan_persentase' => $validated['jalan_tidak_melayani_seluruh_lingkungan_persentase'],
            'kualitas_jalan_buruk_persentase' => $validated['kualitas_jalan_buruk_persentase'],
            'akses_air_minum_tidak_tersedia_persentase' => $validated['akses_air_minum_tidak_tersedia_persentase'],
            'kebutuhan_air_minum_tidak_terpenuhi_persentase' => $validated['kebutuhan_air_minum_tidak_terpenuhi_persentase'],
            'drainase_buruk_persentase' => $validated['drainase_buruk_persentase'],
            'drainase_tidak_tersedia_persentase' => $validated['drainase_tidak_tersedia_persentase'],
            'kualitas_drainase_buruk_persentase' => $validated['kualitas_drainase_buruk_persentase'],
            'sistem_air_limbah_buruk_persentase' => $validated['sistem_air_limbah_buruk_persentase'],
            'sarana_pengelolaan_air_limbah_buruk_persentase' => $validated['sarana_pengelolaan_air_limbah_buruk_persentase'],
            'sarana_sampah_buruk_persentase' => $validated['sarana_sampah_buruk_persentase'],
            'sistem_pengelolaan_sampah_buruk_persentase' => $validated['sistem_pengelolaan_sampah_buruk_persentase'],
            'prasarana_proteksi_kebakaran_tidak_tersedia_persentase' => $validated['prasarana_proteksi_kebakaran_tidak_tersedia_persentase'],
            'sarana_proteksi_kebakaran_tidak_tersedia_persentase' => $validated['sarana_proteksi_kebakaran_tidak_tersedia_persentase'],
        ]);

        $evaliation = evaluation::create([
            'uuid' => Str::uuid(),
            'house_data_id' => $houseData->id,
            'ketidakteraturan_bangunan_evaluasi' => $validated['ketidakteraturan_bangunan_evaluasi'],
            'tingkat_kepadatan_bangunan_evaluasi' => $validated['tingkat_kepadatan_bangunan_evaluasi'],
            'ketidaksesuaian_bangunan_evaluasi' => $validated['ketidaksesuaian_bangunan_evaluasi'],
            'jalan_tidak_melayani_seluruh_lingkungan_evaluasi' => $validated['jalan_tidak_melayani_seluruh_lingkungan_evaluasi'],
            'kualitas_jalan_buruk_evaluasi' => $validated['kualitas_jalan_buruk_evaluasi'],
            'akses_air_minum_tidak_tersedia_evaluasi' => $validated['akses_air_minum_tidak_tersedia_evaluasi'],
            'kebutuhan_air_minum_tidak_terpenuhi_evaluasi' => $validated['kebutuhan_air_minum_tidak_terpenuhi_evaluasi'],
            'drainase_buruk_evaluasi' => $validated['drainase_buruk_evaluasi'],
            'drainase_tidak_tersedia_evaluasi' => $validated['drainase_tidak_tersedia_evaluasi'],
            'kualitas_drainase_buruk_evaluasi' => $validated['kualitas_drainase_buruk_evaluasi'],
            'sistem_air_limbah_buruk_evaluasi' => $validated['sistem_air_limbah_buruk_evaluasi'],
            'sarana_pengelolaan_air_limbah_buruk_evaluasi' => $validated['sarana_pengelolaan_air_limbah_buruk_evaluasi'],
            'sarana_sampah_buruk_evaluasi' => $validated['sarana_sampah_buruk_evaluasi'],
            'sistem_pengelolaan_sampah_buruk_evaluasi' => $validated['sistem_pengelolaan_sampah_buruk_evaluasi'],
            'prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi' => $validated['prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi'],
            'sarana_proteksi_kebakaran_tidak_tersedia_evaluasi' => $validated['sarana_proteksi_kebakaran_tidak_tersedia_evaluasi'],
        ]);

        $status = HouseDataStatus::create([
            'uuid' => Str::uuid(),
            'house_data_id' => Auth::user()->id,
            'status' => 'non-active',
        ]);

        return redirect()->route('admin.house.data')->with('status', 'Data Kawasan Kumuh Berhasil di Tambahkan');
    }

    public function show($uuid)
    {
        $houseData = HouseData::where('uuid', $uuid)->first();
        return view('admin.house-data.show', compact('houseData'));
    }

    public function edit($uuid)
    {
        $province = Province::first();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();
        $houseData = HouseData::where('uuid', $uuid)->first();
        $hamlets = ['1', '2', '3', '4'];
        $result = array_intersect($hamlets, json_decode($houseData->dusun));
        $landStatuses = ['+', '-'];
        $rtrSuitabilities = ['+', '-'];
        $landLegalities = ['legal', 'Non-legal'];

        return view('admin.house-data.edit', compact('houseData', 'province', 'cities', 'districts', 'villages', 'hamlets', 'result', 'landStatuses', 'rtrSuitabilities', 'landLegalities'));
    }

    public function update(UpdateHouseDataRequest $updateHouseDataRequest, $uuid)
    {
        $houseData = HouseData::where('uuid', $uuid)->first();
        $validated = $updateHouseDataRequest->validated();
        
        if(is_null($updateHouseDataRequest->file('image_one'))) {
            $imageNameOne = $houseData->image_one;
        } else {
            if(Storage::exists('foto', $houseData->image_one)) {
                Storage::delete('foto/' . $houseData->image_one);
            }
            $imageExtensionOne = $updateHouseDataRequest->file('image_one')->getClientOriginalExtension();
            $imageNameOne = 'image_one' . '-' . rand() . '.' . $imageExtensionOne;
            $pathImageOne = $updateHouseDataRequest->file('image_one')->storeAs('foto', $imageNameOne, 'public');
        }

        if(is_null($updateHouseDataRequest->file('image_two'))) {
            $imageNameTwo = $houseData->image_two;
        } else {
            if(Storage::exists('foto', $houseData->image_two)) {
                Storage::delete('foto/' . $houseData->image_two);
            }
            $imageExtensionTwo = $updateHouseDataRequest->file('image_two')->getClientOriginalExtension();
            $imageNameTwo = 'image_two' . '-' . rand() . '.' . $imageExtensionTwo;
            $pathImageTwo = $updateHouseDataRequest->file('image_two')->storeAs('foto', $imageNameTwo, 'public');
        }

        $houseData->update([
            'city_id' => $validated['city'],
            'district_id' => $validated['district'],
            'village_id' => $validated['village'],
            'lintang' => $validated['lintang'],
            'bujur' => $validated['bujur'],
            'kmz' => $validated['kmz'],
            'nama' => $validated['nama'],
            'luas' => $validated['luas'],
            'dusun' => json_encode($validated['dusun']),
            'jumlah_bangunan' => $validated['jumlah_bangunan'],
            'jumlah_jiwa' => $validated['jumlah_jiwa'],
            'luas_wilayah' => $validated['luas_wilayah'],
            'kepadatan_penduduk' => $validated['kepadatan_penduduk'],
            'tingkat_kepadatan_penduduk' => $validated['tingkat_kepadatan_penduduk'],
            'jumlah_kk' => $validated['jumlah_kk'],
            'ketidakteraturan_bangunan' => $validated['ketidakteraturan_bangunan'],
            'tingkat_kepadatan_bangunan' => $validated['tingkat_kepadatan_bangunan'],
            'ketidaksesuaian_bangunan' => $validated['ketidaksesuaian_bangunan'],
            'panjang_jalan_ideal' => $validated['panjang_jalan_ideal'],
            'panjang_jalan_eksisting' => $validated['panjang_jalan_eksisting'],
            'jalan_tidak_melayani_seluruh_lingkungan' => $validated['jalan_tidak_melayani_seluruh_lingkungan'],
            'kualitas_jalan_buruk' => $validated['kualitas_jalan_buruk'],
            'akses_air_minum_tidak_tersedia' => $validated['akses_air_minum_tidak_tersedia'],
            'kebutuhan_air_minum_tidak_terpenuhi' => $validated['kebutuhan_air_minum_tidak_terpenuhi'],
            'panjang_drainase_ideal' => $validated['panjang_drainase_ideal'],
            'panjang_drainase_eksisting' => $validated['panjang_drainase_eksisting'],
            'drainase_buruk' => $validated['drainase_buruk'],
            'drainase_tidak_tersedia' => $validated['drainase_tidak_tersedia'],
            'kualitas_drainase_buruk' => $validated['kualitas_drainase_buruk'],
            'sistem_air_limbah_buruk' => $validated['sistem_air_limbah_buruk'],
            'sarana_pengelolaan_air_limbah_buruk' => $validated['sarana_pengelolaan_air_limbah_buruk'],
            'sarana_sampah_buruk' => $validated['sarana_sampah_buruk'],
            'sistem_pengelolaan_sampah_buruk' => $validated['sistem_pengelolaan_sampah_buruk'],
            'prasarana_proteksi_kebakaran_tidak_tersedia' => $validated['prasarana_proteksi_kebakaran_tidak_tersedia'],
            'sarana_proteksi_kebakaran_tidak_tersedia' => $validated['sarana_proteksi_kebakaran_tidak_tersedia'],
            'nilai_kumuh' => $validated['nilai_kumuh'],
            'tingkat_kumuh' => $validated['tingkat_kumuh'],
            'status_penguasaan_lahan' => $validated['status_penguasaan_lahan'],
            'kesesuaian_rtr' => $validated['kesesuaian_rtr'],
            'legalitas_lahan' => $validated['legalitas_lahan'],
            'nilai_strategis_lokasi' => $validated['nilai_strategis_lokasi'],
            'kependudukan' => $validated['kependudukan'],
            'kondisi_sosial' => $validated['kondisi_sosial'],
            'nilai_pl' => $validated['nilai_pl'],
            'tingkat_pl' => $validated['tingkat_pl'],
            'klasifikasi' => $validated['klasifikasi'],
            'prioritas' => $validated['prioritas'],
            'image_one' => $imageNameOne,
            'image_two' => $imageNameTwo,
        ]);

        $houseData->percentage->update([
            'ketidakteraturan_bangunan_persentasi' => $validated['ketidakteraturan_bangunan_persentasi'],
            'tingkat_kepadatan_bangunan_persentasi' => $validated['tingkat_kepadatan_bangunan_persentasi'],
            'ketidaksesuaian_bangunan_persentasi' => $validated['ketidaksesuaian_bangunan_persentasi'],
            'jalan_tidak_melayani_seluruh_lingkungan_persentase' => $validated['jalan_tidak_melayani_seluruh_lingkungan_persentase'],
            'kualitas_jalan_buruk_persentase' => $validated['kualitas_jalan_buruk_persentase'],
            'akses_air_minum_tidak_tersedia_persentase' => $validated['akses_air_minum_tidak_tersedia_persentase'],
            'kebutuhan_air_minum_tidak_terpenuhi_persentase' => $validated['kebutuhan_air_minum_tidak_terpenuhi_persentase'],
            'drainase_buruk_persentase' => $validated['drainase_buruk_persentase'],
            'drainase_tidak_tersedia_persentase' => $validated['drainase_tidak_tersedia_persentase'],
            'kualitas_drainase_buruk_persentase' => $validated['kualitas_drainase_buruk_persentase'],
            'sistem_air_limbah_buruk_persentase' => $validated['sistem_air_limbah_buruk_persentase'],
            'sarana_pengelolaan_air_limbah_buruk_persentase' => $validated['sarana_pengelolaan_air_limbah_buruk_persentase'],
            'sarana_sampah_buruk_persentase' => $validated['sarana_sampah_buruk_persentase'],
            'sistem_pengelolaan_sampah_buruk_persentase' => $validated['sistem_pengelolaan_sampah_buruk_persentase'],
            'prasarana_proteksi_kebakaran_tidak_tersedia_persentase' => $validated['prasarana_proteksi_kebakaran_tidak_tersedia_persentase'],
            'sarana_proteksi_kebakaran_tidak_tersedia_persentase' => $validated['sarana_proteksi_kebakaran_tidak_tersedia_persentase'],
        ]);

        $houseData->evaluation->update([
            'ketidakteraturan_bangunan_evaluasi' => $validated['ketidakteraturan_bangunan_evaluasi'],
            'tingkat_kepadatan_bangunan_evaluasi' => $validated['tingkat_kepadatan_bangunan_evaluasi'],
            'ketidaksesuaian_bangunan_evaluasi' => $validated['ketidaksesuaian_bangunan_evaluasi'],
            'jalan_tidak_melayani_seluruh_lingkungan_evaluasi' => $validated['jalan_tidak_melayani_seluruh_lingkungan_evaluasi'],
            'kualitas_jalan_buruk_evaluasi' => $validated['kualitas_jalan_buruk_evaluasi'],
            'akses_air_minum_tidak_tersedia_evaluasi' => $validated['akses_air_minum_tidak_tersedia_evaluasi'],
            'kebutuhan_air_minum_tidak_terpenuhi_evaluasi' => $validated['kebutuhan_air_minum_tidak_terpenuhi_evaluasi'],
            'drainase_buruk_evaluasi' => $validated['drainase_buruk_evaluasi'],
            'drainase_tidak_tersedia_evaluasi' => $validated['drainase_tidak_tersedia_evaluasi'],
            'kualitas_drainase_buruk_evaluasi' => $validated['kualitas_drainase_buruk_evaluasi'],
            'sistem_air_limbah_buruk_evaluasi' => $validated['sistem_air_limbah_buruk_evaluasi'],
            'sarana_pengelolaan_air_limbah_buruk_evaluasi' => $validated['sarana_pengelolaan_air_limbah_buruk_evaluasi'],
            'sarana_sampah_buruk_evaluasi' => $validated['sarana_sampah_buruk_evaluasi'],
            'sistem_pengelolaan_sampah_buruk_evaluasi' => $validated['sistem_pengelolaan_sampah_buruk_evaluasi'],
            'prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi' => $validated['prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi'],
            'sarana_proteksi_kebakaran_tidak_tersedia_evaluasi' => $validated['sarana_proteksi_kebakaran_tidak_tersedia_evaluasi'],
        ]);

        return redirect()->route('admin.house.data')->with('status', 'Data Kawasan Kumuh Berhasil di Edit');
    }

    public function destroy($uuid)
    {
        $houseData = HouseData::where('uuid', $uuid)->first();
        $houseData->percentage->delete();
        $houseData->evaluation->delete();
        $houseData->houseDataStatus->delete();
        $houseData->delete();

        return redirect()->route('admin.house.data')->with('status', 'Data Kawasan Kumuh Berhasil di Hapus');
    }
}
