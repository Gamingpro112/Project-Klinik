@extends('layouts.admin.dashboard')
@section('title', 'Detail Data Kawasan Kumuh Website Sistem Informasi Pencatatan Kawasan Kumuh Provsu')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-4">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5>Detail Data Kawasan Kumuh</h5>
        </div>
      </div>
      <div class="card-body">
        <h6 class="text-center">Lokasi Kawasan</h6>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Penanggung Jawab</th>
              <th>Provinsi</th>
            </tr>
            <tr>
              <td>{{ $houseData->user->name }}</td>
              <td>{{ $houseData->province->name }}</td>
            </tr>
            <tr>
              <th>Kabupaten/Kota</th>
              <th>Kecamatan</th>
            </tr>
            <tr>
              <td>{{ $houseData->city->name }}</td>
              <td>{{ $houseData->district->name }}</td>
            </tr>
            <tr>
              <th>Kelurahan/Desa</th>
              <th>Koordinat (Lintang)</th>
            </tr>
            <tr>
              <td>{{ $houseData->village->name }}</td>
              <td>{{ $houseData->lintang }}</td>
            </tr>
            <tr>
              <th>Koordinat (Bujur)</th>
              <th>KMZ</th>
            </tr>
            <tr>
              <td>{{ $houseData->bujur }}</td>
              <td>
                <iframe src="https://www.google.com/maps/d/embed?mid={{ $houseData->kmz }}" width="100%" height="350px"></iframe>
              </td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h6 class="text-center">Data Kawasan</h6>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Nama Kawasan</th>
              <th>Luas (Ha)</th>
            </tr>
            <tr>
              <td>{{ $houseData->nama }}</td>
              <td>{{ $houseData->luas }}</td>
            </tr>
            <tr>
              <th>Lingkup Administratip</th>
              <th>Jumlah Bangunan (Unit)</th>
            </tr>
            <tr>
              <td>{{ $houseData->dusun }}</td>
              <td>{{ $houseData->jumlah_bangunan }}</td>
            </tr>
            <tr>
              <th>Jumlah Penduduk (Jiwa)</th>
              <th>Luas Wilayah (Ha)</th>
            </tr>
            <tr>
              <td>{{ $houseData->jumlah_penduduk }}</td>
              <td>{{ $houseData->luas_wilayah }}</td>
            </tr>
            <tr>
              <th>Kepadatan Penduduk (Jiwa/Ha)</th>
              <th>Tingkat Kepadatan Penduduk</th>
            </tr>
            <tr>
              <td>{{ $houseData->kepadatan_penduduk }}</td>
              <td>{{ $houseData->tingkat_kepadatan_penduduk }}</td>
            </tr>
            <tr>
              <th colspan="2">Jumlah KK</th>
            </tr>
            <tr>
              <td colspan="2">{{ $houseData->jumlah_kk }}</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h6 class="text-center">Kondisi Gedung</h6>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Ketidakteraturan Bangunan (Unit)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->ketidakteraturan_bangunan }}</td>
              <td>{{ $houseData->percentage->ketidakteraturan_bangunan_persentasi }}</td>
              <td>{{ $houseData->evaluation->ketidakteraturan_bangunan_evaluasi }}</td>
            </tr>
            <tr>
              <th>Tingkat Kepadatan Bangunan (Ha)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->tingkat_kepadatan_bangunan }}</td>
              <td>{{ $houseData->percentage->tingkat_kepadatan_bangunan_persentasi }}</td>
              <td>{{ $houseData->evaluation->tingkat_kepadatan_bangunan_evaluasi }}</td>
            </tr>
            <tr>
              <th>Ketidaksesuaian Bangunan (Unit)</th>
              <th>Percentase</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->ketidaksesuaian_bangunan }}</td>
              <td>{{ $houseData->percentage->ketidaksesuaian_bangunan_persentasi }}</td>
              <td>{{ $houseData->evaluation->ketidaksesuaian_bangunan_evaluasi }}</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h6 class="text-center">Kondisi Lingkungan</h6>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Panjang Jalan Ideal (Meter)</th>
              <th colspan="2">Panjang Jalan Eksisting (Meter)</th>
            </tr>
            <tr>
              <td>{{ $houseData->panjang_jalan_ideal }}</td>
              <td colspan="2">{{ $houseData->panjang_jalan_eksisting }}</td>
            </tr>
            <tr>
              <th>Jaringan Jalan Lingkungan Tidak Melayani Seluruh Lingkungan Perumahan atau Permukiman (Meter)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->jalan_tidak_melayani_seluruh_lingkungan }}</td>
              <td>{{ $houseData->percentage->jalan_tidak_melayani_seluruh_lingkungan_persentase}}</td>
              <td>{{ $houseData->evaluation->jalan_tidak_melayani_seluruh_lingkungan_evaluasi }}</td>
            </tr>
            <tr>
              <th>Kualitas Permukaan Jalan Permukiman Yang Buruk (Meter)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->kualitas_jalan_buruk }}</td>
              <td>{{ $houseData->percentage->kualitas_jalan_buruk_persentase }}</td>
              <td>{{ $houseData->evaluation->kualitas_jalan_buruk_evaluasi }}</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h6 class="text-center">Kondisi Penyediaan Air Minum</h6>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Akses Air Minum Tidak Tersedia (KK)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->akses_air_minum_tidak_tersedia }}</td>
              <td>{{ $houseData->percentage->akses_air_minum_tidak_tersedia_persentase }}</td>
              <td>{{ $houseData->evaluation->akses_air_minum_tidak_tersedia_evaluasi }}</td>
            </tr>
            <tr>
              <th>Kebutuhan Air Minum Minimal Individu Tidak Terpenuhi (KK)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <td>{{ $houseData->kebutuhan_air_minum_tidak_terpenuhi }}</td>
              <td>{{ $houseData->percentage->kebutuhan_air_minum_tidak_terpenuhi_persentase }}</td>
              <td>{{ $houseData->evaluation->kebutuhan_air_minum_tidak_terpenuhi_evaluasi }}</td>
          </tbody>
        </table>
        <hr>
        <h6 class="text-center">Kondisi Drainase Lingkungan</h6>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Panjang Drainase Ideal (Meter)</th>
              <th colspan="2">Panjang Drainase Eksisting (Meter)</th>
            </tr>
            <tr>
              <td>{{ $houseData->panjang_drainase_ideal }}</td>
              <td colspan="2">{{ $houseData->panjang_drainase_eksisting }}</td>
            </tr>
            <tr>
              <th>Drainase Tidak Mampu Mengalirkan Limpahan Air Hujan (Ha)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->drainase_buruk }}</td>
              <td>{{ $houseData->percentage->drainase_buruk_persentase }}</td>
              <td>{{ $houseData->evaluation->drainase_buruk_evaluasi }}</td>
            </tr>
            <tr>
              <th>Drainase Lingkungan Tidak Tersedia (Meter)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->drainase_tidak_tersedia }}</td>
              <td>{{ $houseData->percentage->drainase_tidak_tersedia_persentase }}</td>
              <td>{{ $houseData->evaluation->drainase_tidak_tersedia_evaluasi }}</td>
            </tr>
            <tr>
              <th>Kualitas Konstruksi Drainase Lingkungan Buruk (Meter)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->kualitas_drainase_buruk }}</td>
              <td>{{ $houseData->percentage->kualitas_drainase_buruk_persentase }}</td>
              <td>{{ $houseData->evaluation->kualitas_drainase_buruk_evaluasi }}</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h6 class="text-center">Kondisi Pengelolaan Air Limbah</h6>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Sistem Pengelolaan Air Limbah Tidak Memenuhi Persyaratan Teknis (KK)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->sistem_air_limbah_buruk }}</td>
              <td>{{ $houseData->percentage->sistem_air_limbah_buruk_persentase }}</td>
              <td>{{ $houseData->evaluation->sistem_air_limbah_buruk_evaluasi }}</td>
            </tr>
            <tr>
              <th>Prasarana dan Sarana Pengelolaan Air Limbah Tidak Memenuhi Persyaratan Teknis (Ha)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->sarana_pengelolaan_air_limbah_buruk }}</td>
              <td>{{ $houseData->percentage->sarana_pengelolaan_air_limbah_buruk_persentase }}</td>
              <td>{{ $houseData->evaluation->sarana_pengelolaan_air_limbah_buruk_evaluasi }}</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h6 class="text-center">Kondisi Pengelolaan Persampahan</h6>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Prasarana dan Sarana Persampahan Tidak Memenuhi Dengan Persyaratan Teknis (KK)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->sarana_sampah_buruk }}</td>
              <td>{{ $houseData->percentage->sarana_sampah_buruk_persentase }}</td>
              <td>{{ $houseData->evaluation->sarana_sampah_buruk_evaluasi }}</td>
            </tr>
            <tr>
              <th>Sistem Pengelolaan Persampahan Tidak Memenuhi Persyaratan Teknis (Ha)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->sistem_pengelolaan_sampah_buruk }}</td>
              <td>{{ $houseData->percentage->sistem_pengelolaan_sampah_buruk_persentase }}</td>
              <td>{{ $houseData->evaluation->sistem_pengelolaan_sampah_buruk_evaluasi }}</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h6 class="text-center">Kondisi Protekse Kebakaran</h6>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Prasarana Proteksi Kebakaran Tidak Tersedia (Unit)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->prasarana_proteksi_kebakaran_tidak_tersedia }}</td>
              <td>{{ $houseData->percentage->prasarana_proteksi_kebakaran_tidak_tersedia_persentase }}</td>
              <td>{{ $houseData->evaluation->prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi }}</td>
            </tr>
            <tr>
              <th>Sarana Proteksi Kebakaran Tidak Tersedia (Unit)</th>
              <th>Persentasi</th>
              <th>Skor</th>
            </tr>
            <tr>
              <td>{{ $houseData->sarana_proteksi_kebakaran_tidak_tersedia }}</td>
              <td>{{ $houseData->percentage->sarana_proteksi_kebakaran_tidak_tersedia_persentase }}</td>
              <td>{{ $houseData->evaluation->sarana_proteksi_kebakaran_tidak_tersedia_evaluasi }}</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Nilai Kumuh</th>
              <th>Tingkat Kumuh</th>
            </tr>
            <tr>
              <td>{{ $houseData->nilai_kumuh }}</td>
              <td>{{ $houseData->tingkat_kumuh }}</td>
            </tr>
            <tr>
              <th>Kejelasan Status Penguasaan Lahan</th>
              <th>Kesesuaian RTR</th>
            </tr>
            <tr>
              <td>{{ $houseData->status_penguasaan_lahan }}</td>
              <td>{{ $houseData->kesesuaian_rtr }}</td>
            </tr>
            <tr>
              <th>Status Legalitas Lahan</th>
              <th>Nilai Strategis Lokasi</th>
            </tr>
            <tr>
              <td>{{ $houseData->legalitas_lahan }}</td>
              <td>{{ $houseData->nilai_strategis_lokasi }}</td>
            </tr>
            <tr>
              <th>Kependudukan</th>
              <th>Kondisi, Sosial, Ekonomi, dan Budaya</th>
            </tr>
            <tr>
              <td>{{ $houseData->kependudukan }}</td>
              <td>{{ $houseData->kondisi_sosial }}</td>
            </tr>
            <tr>
              <th>Nilai Pl</th>
              <th>Tingkat Pl</th>
            </tr>
            <tr>
              <td>{{ $houseData->nilai_pl }}</td>
              <td>{{ $houseData->tingkat_pl }}</td>
            </tr>
            <tr>
              <th>Klasifikasi</th>
              <th>Skala Prioritas</th>
            </tr>
            <tr>
              <td>{{ $houseData->klasifikasi }}</td>
              <td>{{ $houseData->prioritas }}</td>
            </tr>
            <tr>
              <th>Foto Pertama</th>
              <th>Foto Kedua</th>
            </tr>
            <tr>
              <td>
                <img src="{{ url('storage/foto', $houseData->image_one) }}" alt="Foto Pertama" width="250px">
              </td>
              <td>
                <img src="{{ url('storage/foto', $houseData->image_two) }}" alt="Foto Kedua" width="250px">
              </td>
            </tr>
          </tbody>
        </table>
        <div class="d-flex justify-content-end">
          <a href="{{ route('admin.house.data') }}" class="btn btn-secondary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection