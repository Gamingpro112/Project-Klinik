@extends('layouts.admin.dashboard')
@section('title', 'Tambah Data Kawasan Kumuh Website Sistem Informasi Pencatatan Kawasan Kumuh Provsu')
@section('content')
@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ url('assets/css/mystyle.css') }}">
@endpush
<div class="row">
  <div class="col-12">
    <div class="card mt-4">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5>Tambah Data Kawasan Kumuh</h5>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('admin.house.data.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <h6>Lokasi Kawasan</h6>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="province">Provinsi</label>
              <select name="province" id="province" class="form-control @error('province') is-invalid @enderror" @readonly(true)>
                <option value="{{ $province->id }}">{{ $province->name }}</option>
              </select>
              @error('province')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="city">Kabupaten/Kota</label>
              <select name="city" id="city" class="form-control @error('city') is-invalid @enderror">
                <option>--Pilih Kabupaten/Kota--</option>
                @foreach ($cities as $city)
                  <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
              </select>
              @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="district">Kecamatan</label>
              <select name="district" id="district" class="form-control @error('district') is-invalid @enderror">
                <option>--Pilih Kecamatan--</option>
              </select>
              @error('district')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="village">Desa</label>
              <select name="village" id="village" class="form-control @error('village') is-invalid @enderror">
                <option>--Pilih Desa--</option>
              </select>
              @error('village')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="lintang">Titik Koordinat (Lintang)</label>
              <input type="text" name="lintang" class="form-control @error('lintang') is-invalid @enderror" id="lintang" placeholder="koordinat (lintang)" value="{{ old('lintang') }}">
              @error('lintang')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="bujur">Titik Koordinat (Bujur)</label>
              <input type="text" name="bujur" class="form-control @error('bujur') is-invalid @enderror" id="bujur" placeholder="koordinat (bujur)" value="{{ old('bujur') }}">
              @error('bujur')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kmz">Link KMZ</label>
              <input type="text" name="kmz" class="form-control @error('kmz') is-invalid @enderror" id="kmz" placeholder="link kmz" value="{{ old('kmz') }}">
              @error('kmz')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <button type="button" class="btn btn-success my-0 py-0" onclick="checkKmz()">Lihat Maps KMZ</button>
          </div>
          <hr>
          <iframe width="100%" height="480" id="maps-kmz"></iframe>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nama">Nama Kawasan Kumuh</label>
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama perumahan" value="{{ old('nama') }}">
              @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="luas">Luas (Ha)</label>
              <input type="text" name="luas" class="form-control @error('luas') is-invalid @enderror" id="luas" placeholder="luas" value="{{ old('luas') }}">
              @error('luas')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="dusun">Lingkup Administratif</label>
              <select class="form-control @error('dusun') is-invalid @enderror" name="dusun[]" multiple="multiple" id="dusun">
                <option value="1">Dusun 1</option>
                <option value="2">Dusun 2</option>
                <option value="3">Dusun 3</option>
                <option value="4">Dusun 4</option>
              </select>
              @error('dusun')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="jumlah_bangunan">Jumlah Bangunan (Unit)</label>
              <input type="number" name="jumlah_bangunan" class="form-control @error('jumlah_bangunan') is-invalid @enderror" id="jumlah_bangunan" placeholder="jumlah bangunan" value="{{ old('jumlah_bangunan') }}">
              @error('jumlah_bangunan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="jumlah_jiwa">Jumlah Penduduk (Jiwa)</label>
              <input type="number" name="jumlah_jiwa" class="form-control @error('jumlah_jiwa') is-invalid @enderror" id="jumlah_jiwa" placeholder="jumlah penduduk" value="{{ old('jumlah_jiwa') }}">
              @error('jumlah_jiwa')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="luas_wilayah">Luas wilayah (Ha)</label>
              <input type="text" name="luas_wilayah" class="form-control @error('luas_wilayah') is-invalid @enderror" id="luas_wilayah" placeholder="luas wilayah" value="{{ old('luas_wilayah') }}">
              @error('luas_wilayah')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kepadatan_penduduk">Kepadatan Penduduk (Jiwa/Ha)</label>
              <input type="number" name="kepadatan_penduduk" class="form-control @error('kepadatan_penduduk') is-invalid @enderror" id="kepadatan_penduduk" placeholder="kepadatan penduduk" @readonly(true) value="{{ old('kepadatan_penduduk') }}">
              @error('kepadatan_penduduk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="tingkat_kepadatan_penduduk">Tingkat Kepadatan Penduduk</label>
              <input type="text" name="tingkat_kepadatan_penduduk" class="form-control @error('tingkat_kepadatan_penduduk') is-invalid @enderror" id="tingkat_kepadatan_penduduk" placeholder="tingkat kepadatan penduduk" @readonly(true) value="{{ old('tingkat_kepadatan_penduduk') }}">
              @error('tingkat_kepadatan_penduduk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="jumlah_kk">Jumlah KK</label>
              <input type="number" name="jumlah_kk" class="form-control @error('jumlah_kk') is-invalid @enderror" id="jumlah_kk" placeholder="jumlah bangunan" value="{{ old('jumlah_kk') }}">
              @error('jumlah_kk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h6>Kondisi Awal</h6>
            </div>
            <div class="col-md-3">
              <h6>Persentasi</h6>
            </div>
            <div class="col-md-3">
              <h6>Skor</h6>
            </div>
          </div>
          <hr>
          <h6 class="text-center">Kondisi Bangunan Gedung</h6>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="ketidakteraturan_bangunan">Ketidakteraturan Bangunan (Unit)</label>
              <input type="text" name="ketidakteraturan_bangunan" class="form-control @error('ketidakteraturan_bangunan') is-invalid @enderror" id="ketidakteraturan_bangunan" placeholder="ketidakteraturan bangunan" value="{{ old('ketidakteraturan_bangunan') }}">
              @error('ketidakteraturan_bangunan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="ketidakteraturan_bangunan_persentasi"></label>
              <input type="text" name="ketidakteraturan_bangunan_persentasi" class="form-control @error('ketidakteraturan_bangunan_persentasi') is-invalid @enderror" id="ketidakteraturan_bangunan_persentasi" placeholder="%" @readonly(true) value="{{ old('ketidakteraturan_bangunan_persentasi') }}">
              @error('ketidakteraturan_bangunan_persentasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="ketidakteraturan_bangunan_evaluasi"></label>
              <input type="number" name="ketidakteraturan_bangunan_evaluasi" class="form-control @error('ketidakteraturan_bangunan_evaluasi') is-invalid @enderror" id="ketidakteraturan_bangunan_evaluasi" placeholder="0" @readonly(true) value="{{ old('ketidakteraturan_bangunan_evaluasi') }}">
              @error('ketidakteraturan_bangunan_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tingkat_kepadatan_bangunan">Tingkat Kepadatan Bangunan (Ha)</label>
              <input type="text" name="tingkat_kepadatan_bangunan" class="form-control @error('tingkat_kepadatan_bangunan') is-invalid @enderror" id="tingkat_kepadatan_bangunan" placeholder="tingkat kepadatan bangunan" value="{{ old('tingkat_kepadatan_bangunan') }}">
              @error('tingkat_kepadatan_bangunan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="tingkat_kepadatan_bangunan_persentasi"></label>
              <input type="text" name="tingkat_kepadatan_bangunan_persentasi" class="form-control @error('tingkat_kepadatan_bangunan_persentasi') is-invalid @enderror" id="tingkat_kepadatan_bangunan_persentasi" placeholder="%" @readonly(true) value="{{ old('tingkat_kepadatan_bangunan_persentasi') }}">
              @error('tingkat_kepadatan_bangunan_persentasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="tingkat_kepadatan_bangunan_evaluasi"></label>
              <input type="number" name="tingkat_kepadatan_bangunan_evaluasi" class="form-control @error('tingkat_kepadatan_bangunan_evaluasi') is-invalid @enderror" id="tingkat_kepadatan_bangunan_evaluasi" placeholder="0" @readonly(true) value="{{ old('tingkat_kepadatan_bangunan_evaluasi') }}">
              @error('tingkat_kepadatan_bangunan_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="ketidaksesuaian_bangunan">Ketidaksesuaian Bangunan (Unit)</label>
              <input type="text" name="ketidaksesuaian_bangunan" class="form-control @error('ketidaksesuaian_bangunan') is-invalid @enderror" id="ketidaksesuaian_bangunan" placeholder="ketidaksesuaian bangunan" value="{{ old('ketidaksesuaian_bangunan') }}">
              @error('ketidaksesuaian_bangunan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="ketidaksesuaian_bangunan_persentasi"></label>
              <input type="text" name="ketidaksesuaian_bangunan_persentasi" class="form-control @error('ketidaksesuaian_bangunan_persentasi') is-invalid @enderror" id="ketidaksesuaian_bangunan_persentasi" placeholder="%" @readonly(true) value="{{ old('ketidaksesuaian_bangunan_persentasi') }}">
              @error('ketidaksesuaian_bangunan_persentasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="ketidaksesuaian_bangunan_evaluasi"></label>
              <input type="number" name="ketidaksesuaian_bangunan_evaluasi" class="form-control @error('ketidaksesuaian_bangunan_evaluasi') is-invalid @enderror" id="ketidaksesuaian_bangunan_evaluasi" placeholder="0" @readonly(true) value="{{ old('ketidaksesuaian_bangunan_evaluasi') }}">
              @error('ketidaksesuaian_bangunan_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <hr>
          <h6 class="text-center">Kondisi Jalan Lingkungan</h6>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="panjang_jalan_ideal">Panjang Jalan Ideal (Meter)</label>
              <input type="text" name="panjang_jalan_ideal" class="form-control @error('panjang_jalan_ideal') is-invalid @enderror" id="panjang_jalan_ideal" placeholder="Panjang Jalan Ideal" value="{{ old('panjang_jalan_ideal') }}">
              @error('panjang_jalan_ideal')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="panjang_jalan_eksisting">Panjang Jalan Eksisting (Meter)</label>
              <input type="text" name="panjang_jalan_eksisting" class="form-control @error('panjang_jalan_eksisting') is-invalid @enderror" id="panjang_jalan_eksisting" placeholder="panjang jalan eksisting" value="{{ old('panjang_jalan_eksisting') }}">
              @error('panjang_jalan_eksisting')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="jalan_tidak_melayani_seluruh_lingkungan">Jaringan Jalan Lingkungan Tidak Melayani Seluruh Lingkungan Perumahan atau Permukiman (Meter)</label>
              <input type="text" name="jalan_tidak_melayani_seluruh_lingkungan" class="form-control @error('jalan_tidak_melayani_seluruh_lingkungan') is-invalid @enderror" id="jalan_tidak_melayani_seluruh_lingkungan" placeholder="jalan tidak melayani seluruh lingkungan" @readonly(true) value="{{ old('jalan_tidak_melayani_seluruh_lingkungan') }}">
              @error('jalan_tidak_melayani_seluruh_lingkungan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="jalan_tidak_melayani_seluruh_lingkungan_persentase"></label>
              <input type="text" name="jalan_tidak_melayani_seluruh_lingkungan_persentase" class="form-control @error('jalan_tidak_melayani_seluruh_lingkungan_persentase') is-invalid @enderror" id="jalan_tidak_melayani_seluruh_lingkungan_persentase" placeholder="%" @readonly(true) value="{{ old('jalan_tidak_melayani_seluruh_lingkungan_persentase') }}">
              @error('jalan_tidak_melayani_seluruh_lingkungan_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="jalan_tidak_melayani_seluruh_lingkungan_evaluasi"></label>
              <input type="number" name="jalan_tidak_melayani_seluruh_lingkungan_evaluasi" class="form-control @error('jalan_tidak_melayani_seluruh_lingkungan_evaluasi') is-invalid @enderror" id="jalan_tidak_melayani_seluruh_lingkungan_evaluasi" placeholder="0" @readonly(true) value="{{ old('jalan_tidak_melayani_seluruh_lingkungan_evaluasi') }}">
              @error('jalan_tidak_melayani_seluruh_lingkungan_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kualitas_jalan_buruk">Kualitas Permukaan Jalan Lingkungan Yang Buruk (Meter)</label>
              <input type="text" name="kualitas_jalan_buruk" class="form-control @error('kualitas_jalan_buruk') is-invalid @enderror" id="kualitas_jalan_buruk" placeholder="kualitas jalan buruk" value="{{ old('kualitas_jalan_buruk') }}">
              @error('kualitas_jalan_buruk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="kualitas_jalan_buruk"></label>
              <input type="text" name="kualitas_jalan_buruk_persentase" class="form-control @error('kualitas_jalan_buruk_persentase') is-invalid @enderror" id="kualitas_jalan_buruk_persentase" placeholder="%" @readonly(true) value="{{ old('kualitas_jalan_buruk_persentase') }}">
              @error('kualitas_jalan_buruk_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="kualitas_jalan_buruk_evaluasi"></label>
              <input type="number" name="kualitas_jalan_buruk_evaluasi" class="form-control @error('kualitas_jalan_buruk_evaluasi') is-invalid @enderror" id="kualitas_jalan_buruk_evaluasi" placeholder="0" @readonly(true) value="{{ old('kualitas_jalan_buruk_evaluasi') }}">
              @error('kualitas_jalan_buruk_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <hr>
          <h6 class="text-center">Kondisi Penyediaan Air Minum</h6>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="akses_air_minum_tidak_tersedia">Akses Air Minum Tidak Tersedia (KK)</label>
              <input type="text" name="akses_air_minum_tidak_tersedia" class="form-control @error('akses_air_minum_tidak_tersedia') is-invalid @enderror" id="akses_air_minum_tidak_tersedia" placeholder="akses air minum tidak tersedia" value="{{ old('akses_air_minum_tidak_tersedia') }}">
              @error('akses_air_minum_tidak_tersedia')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="akses_air_minum_tidak_tersedia_persentase"></label>
              <input type="text" name="akses_air_minum_tidak_tersedia_persentase" class="form-control @error('akses_air_minum_tidak_tersedia_persentase') is-invalid @enderror" id="akses_air_minum_tidak_tersedia_persentase" placeholder="%" @readonly(true) value="{{ old('akses_air_minum_tidak_tersedia_persentase') }}">
              @error('akses_air_minum_tidak_tersedia_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="akses_air_minum_tidak_tersedia_evaluasi"></label>
              <input type="number" name="akses_air_minum_tidak_tersedia_evaluasi" class="form-control @error('akses_air_minum_tidak_tersedia_evaluasi') is-invalid @enderror" id="akses_air_minum_tidak_tersedia_evaluasi" placeholder="0" @readonly(true) value="{{ old('akses_air_minum_tidak_tersedia_evaluasi') }}">
              @error('akses_air_minum_tidak_tersedia_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kebutuhan_air_minum_tidak_terpenuhi">Kebutuhan Air Minum Minimal Individu Tidak Terpenuhi (KK)</label>
              <input type="text" name="kebutuhan_air_minum_tidak_terpenuhi" class="form-control @error('kebutuhan_air_minum_tidak_terpenuhi') is-invalid @enderror" id="kebutuhan_air_minum_tidak_terpenuhi" placeholder="kebutuan air minum minimal individu tidak terpenuhi" value="{{ old('kebutuhan_air_minum_tidak_terpenuhi') }}">
              @error('kebutuhan_air_minum_tidak_terpenuhi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="kebutuhan_air_minum_tidak_terpenuhi_persentase"></label>
              <input type="text" name="kebutuhan_air_minum_tidak_terpenuhi_persentase" class="form-control @error('kebutuhan_air_minum_tidak_terpenuhi_persentase') is-invalid @enderror" id="kebutuhan_air_minum_tidak_terpenuhi_persentase" placeholder="%" @readonly(true) value="{{ old('kebutuhan_air_minum_tidak_terpenuhi_persentase') }}">
              @error('kebutuhan_air_minum_tidak_terpenuhi_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="kebutuhan_air_minum_tidak_terpenuhi_evaluasi"></label>
              <input type="number" name="kebutuhan_air_minum_tidak_terpenuhi_evaluasi" class="form-control @error('kebutuhan_air_minum_tidak_terpenuhi_evaluasi') is-invalid @enderror" id="kebutuhan_air_minum_tidak_terpenuhi_evaluasi" placeholder="0" @readonly(true) value="{{ old('kebutuhan_air_minum_tidak_terpenuhi_evaluasi') }}">
              @error('kebutuhan_air_minum_tidak_terpenuhi_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <hr>
          <h6 class="text-center">Kondisi Drainase Lingkungan</h6>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="panjang_drainase_ideal">Panjang Drainase Ideal (Meter)</label>
              <input type="text" name="panjang_drainase_ideal" class="form-control @error('panjang_drainase_ideal') is-invalid @enderror" id="panjang_drainase_ideal" placeholder="panjang drainase ideal" value="{{ old('panjang_drainase_ideal') }}">
              @error('panjang_drainase_ideal')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="panjang_drainase_eksisting">Panjang Saluran Drainase Eksisting (Meter)</label>
              <input type="text" name="panjang_drainase_eksisting" class="form-control @error('panjang_drainase_eksisting') is-invalid @enderror" id="panjang_drainase_eksisting" placeholder="panjang saluran darinase eksisting" value="{{ old('panjang_drainase_eksisting') }}">
              @error('panjang_drainase_eksisting')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="drainase_buruk">Drainase Tidak Mampu Mengalirkan Limpahan Air Hujan (Ha)</label>
              <input type="text" name="drainase_buruk" class="form-control @error('drainase_buruk') is-invalid @enderror" id="drainase_buruk" placeholder="drainase tidak mampu mengalirkan limpahan air hujan" value="{{ old('drainase_buruk') }}">
              @error('drainase_buruk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="drainase_buruk_persentase"></label>
              <input type="text" name="drainase_buruk_persentase" class="form-control @error('drainase_buruk_persentase') is-invalid @enderror" id="drainase_buruk_persentase" placeholder="%" @readonly(true) value="{{ old('drainase_buruk_persentase') }}">
              @error('drainase_buruk_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="drainase_buruk_evaluasi"></label>
              <input type="number" name="drainase_buruk_evaluasi" class="form-control @error('drainase_buruk_evaluasi') is-invalid @enderror" id="drainase_buruk_evaluasi" placeholder="0" @readonly(true) value="{{ old('drainase_buruk_evaluasi') }}">
              @error('drainase_buruk_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="drainase_tidak_tersedia">Drainase Lingkungan Tidak Tersedia (Meter)</label>
              <input type="text" name="drainase_tidak_tersedia" class="form-control @error('drainase_tidak_tersedia') is-invalid @enderror" id="drainase_tidak_tersedia" placeholder="drainase lingkungan tidak tersedia" @readonly(true) value="{{ old('drainase_tidak_tersedia') }}">
              @error('drainase_tidak_tersedia')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="drainase_tidak_tersedia_persentase"></label>
              <input type="text" name="drainase_tidak_tersedia_persentase" class="form-control @error('drainase_tidak_tersedia_persentase') is-invalid @enderror" id="drainase_tidak_tersedia_persentase" placeholder="%" @readonly(true) value="{{ old('drainase_tidak_tersedia_persentase') }}">
              @error('drainase_tidak_tersedia_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="drainase_tidak_tersedia_evaluasi"></label>
              <input type="number" name="drainase_tidak_tersedia_evaluasi" class="form-control @error('drainase_tidak_tersedia_evaluasi') is-invalid @enderror" id="drainase_tidak_tersedia_evaluasi" placeholder="0" @readonly(true) value="{{ old('drainase_tidak_tersedia_evaluasi') }}">
              @error('drainase_tidak_tersedia_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kualitas_drainase_buruk">Kualitas Konstruksi Drainase Lingkungan Buruk (Meter)</label>
              <input type="text" name="kualitas_drainase_buruk" class="form-control @error('kualitas_drainase_buruk') is-invalid @enderror" id="kualitas_drainase_buruk" placeholder="kualitas konstruksi drainase buruk" value="{{ old('kualitas_drainase_buruk') }}">
              @error('kualitas_drainase_buruk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="kualitas_drainase_buruk_persentase"></label>
              <input type="text" name="kualitas_drainase_buruk_persentase" class="form-control @error('kualitas_drainase_buruk_persentase') is-invalid @enderror" id="kualitas_drainase_buruk_persentase" placeholder="%" @readonly(true) value="{{ old('kualitas_drainase_buruk_persentase') }}">
              @error('kualitas_drainase_buruk_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="kualitas_drainase_buruk_evaluasi"></label>
              <input type="number" name="kualitas_drainase_buruk_evaluasi" class="form-control @error('kualitas_drainase_buruk_evaluasi') is-invalid @enderror" id="kualitas_drainase_buruk_evaluasi" placeholder="0" @readonly(true) value="{{ old('kualitas_drainase_buruk_evaluasi') }}">
              @error('kualitas_drainase_buruk_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <hr>
          <h6 class="text-center">Kondisi Pengelolaan Air Limbah</h6>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="sistem_air_limbah_buruk">Sistem Pengelolaan Air Limbah Tidak Memenuhi Persyaratan Teknis (KK)</label>
              <input type="text" name="sistem_air_limbah_buruk" class="form-control @error('sistem_air_limbah_buruk') is-invalid @enderror" id="sistem_air_limbah_buruk" placeholder="sistem pengelolaan air limbah tidak memenuhi persyaratan teknis" value="{{ old('sistem_air_limbah_buruk') }}">
              @error('sistem_air_limbah_buruk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sistem_air_limbah_buruk_persentase"></label>
              <input type="text" name="sistem_air_limbah_buruk_persentase" class="form-control @error('sistem_air_limbah_buruk_persentase') is-invalid @enderror" id="sistem_air_limbah_buruk_persentase" placeholder="%" @readonly(true) value="{{ old('sistem_air_limbah_buruk_persentase') }}">
              @error('sistem_air_limbah_buruk_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sistem_air_limbah_buruk_evaluasi"></label>
              <input type="number" name="sistem_air_limbah_buruk_evaluasi" class="form-control @error('sistem_air_limbah_buruk_evaluasi') is-invalid @enderror" id="sistem_air_limbah_buruk_evaluasi" placeholder="0" @readonly(true) value="{{ old('sistem_air_limbah_buruk_evaluasi') }}">
              @error('sistem_air_limbah_buruk_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="sarana_pengelolaan_air_limbah_buruk">Prasarana dan Sarana Pengelolaan Air Limbah Tidak Memenuhi Persyaratan Teknis (KK)</label>
              <input type="text" name="sarana_pengelolaan_air_limbah_buruk" class="form-control @error('sarana_pengelolaan_air_limbah_buruk') is-invalid @enderror" id="sarana_pengelolaan_air_limbah_buruk" placeholder="prasarana dan sarana pengelolaan air limbah tidak memenuhi persyaratan teknis" value="{{ old('sarana_pengelolaan_air_limbah_buruk') }}">
              @error('sarana_pengelolaan_air_limbah_buruk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sarana_pengelolaan_air_limbah_buruk_persentase"></label>
              <input type="text" name="sarana_pengelolaan_air_limbah_buruk_persentase" class="form-control @error('sarana_pengelolaan_air_limbah_buruk_persentase') is-invalid @enderror" id="sarana_pengelolaan_air_limbah_buruk_persentase" placeholder="%" @readonly(true) value="{{ old('sarana_pengelolaan_air_limbah_buruk_persentase') }}">
              @error('sarana_pengelolaan_air_limbah_buruk_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sarana_pengelolaan_air_limbah_buruk_evaluasi"></label>
              <input type="number" name="sarana_pengelolaan_air_limbah_buruk_evaluasi" class="form-control @error('sarana_pengelolaan_air_limbah_buruk_evaluasi') is-invalid @enderror" id="sarana_pengelolaan_air_limbah_buruk_evaluasi" placeholder="0" @readonly(true) value="{{ old('sarana_pengelolaan_air_limbah_buruk_evaluasi') }}">
              @error('sarana_pengelolaan_air_limbah_buruk_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <hr>
          <h6 class="text-center">Kondisi Pengelolaan Persampahan</h6>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="sarana_sampah_buruk">Prasarana dan Sarana Persampahan Tidak Memenuhi Dengan Persyaratan Teknis (KK)</label>
              <input type="text" name="sarana_sampah_buruk" class="form-control @error('sarana_sampah_buruk') is-invalid @enderror" id="sarana_sampah_buruk" placeholder="prasarana dan sarana persampahan tidak memenuhi persyaratan teknis" value="{{ old('sarana_sampah_buruk') }}">
              @error('sarana_sampah_buruk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sarana_sampah_buruk_persentase"></label>
              <input type="text" name="sarana_sampah_buruk_persentase" class="form-control @error('sarana_sampah_buruk_persentase') is-invalid @enderror" id="sarana_sampah_buruk_persentase" placeholder="%" @readonly(true) value="{{ old('sarana_sampah_buruk_persentase') }}">
              @error('sarana_sampah_buruk_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sarana_sampah_buruk_evaluasi"></label>
              <input type="number" name="sarana_sampah_buruk_evaluasi" class="form-control @error('sarana_sampah_buruk_evaluasi') is-invalid @enderror" id="sarana_sampah_buruk_evaluasi" placeholder="0" @readonly(true) value="{{ old('sarana_sampah_buruk_evaluasi') }}">
              @error('sarana_sampah_buruk_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="sistem_pengelolaan_sampah_buruk">Sistem Pengelolaan Persampahan Tidak Memenuhi Persyaratan Teknis (KK)</label>
              <input type="text" name="sistem_pengelolaan_sampah_buruk" class="form-control @error('sistem_pengelolaan_sampah_buruk') is-invalid @enderror" id="sistem_pengelolaan_sampah_buruk" placeholder="sistem pengelolaan persampahan tidak memenuhi persyaratan teknis" value="{{ old('sistem_pengelolaan_sampah_buruk') }}">
              @error('sistem_pengelolaan_sampah_buruk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sistem_pengelolaan_sampah_buruk_persentase"></label>
              <input type="text" name="sistem_pengelolaan_sampah_buruk_persentase" class="form-control @error('sistem_pengelolaan_sampah_buruk_persentase') is-invalid @enderror" id="sistem_pengelolaan_sampah_buruk_persentase" placeholder="%" @readonly(true) value="{{ old('sistem_pengelolaan_sampah_buruk_persentase') }}">
              @error('sistem_pengelolaan_sampah_buruk_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sistem_pengelolaan_sampah_buruk_evaluasi"></label>
              <input type="number" name="sistem_pengelolaan_sampah_buruk_evaluasi" class="form-control @error('sistem_pengelolaan_sampah_buruk_evaluasi') is-invalid @enderror" id="sistem_pengelolaan_sampah_buruk_evaluasi" placeholder="0" @readonly(true) value="{{ old('sistem_pengelolaan_sampah_buruk_evaluasi') }}">
              @error('sistem_pengelolaan_sampah_buruk_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <hr>
          <h6 class="text-center">Kondisi Proteksi Kebakaran</h6>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="prasarana_proteksi_kebakaran_tidak_tersedia">Prasarana Proteksi Kebakaran Tidak Tersedia (Unit)</label>
              <input type="text" name="prasarana_proteksi_kebakaran_tidak_tersedia" class="form-control @error('prasarana_proteksi_kebakaran_tidak_tersedia') is-invalid @enderror" id="prasarana_proteksi_kebakaran_tidak_tersedia" placeholder="prasarana proteksi kebakarang tidak tersedia" value="{{ old('prasarana_proteksi_kebakaran_tidak_tersedia') }}">
              @error('prasarana_proteksi_kebakaran_tidak_tersedia')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="prasarana_proteksi_kebakaran_tidak_tersedia_persentase"></label>
              <input type="text" name="prasarana_proteksi_kebakaran_tidak_tersedia_persentase" class="form-control @error('prasarana_proteksi_kebakaran_tidak_tersedia_persentase') is-invalid @enderror" id="prasarana_proteksi_kebakaran_tidak_tersedia_persentase" placeholder="%" @readonly(true) value="{{ old('prasarana_proteksi_kebakaran_tidak_tersedia_persentase') }}">
              @error('prasarana_proteksi_kebakaran_tidak_tersedia_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi"></label>
              <input type="number" name="prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi" class="form-control @error('prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi') is-invalid @enderror" id="prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi" placeholder="0" @readonly(true) value="{{ old('prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi') }}">
              @error('prasarana_proteksi_kebakaran_tidak_tersedia_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="sarana_proteksi_kebakaran_tidak_tersedia">Sarana Proteksi Kebakaran Tidak Tersedia (Unit)</label>
              <input type="text" name="sarana_proteksi_kebakaran_tidak_tersedia" class="form-control @error('sarana_proteksi_kebakaran_tidak_tersedia') is-invalid @enderror" id="sarana_proteksi_kebakaran_tidak_tersedia" placeholder="sarana proteksi kebakarang tidak tersedia" value="{{ old('sarana_proteksi_kebakaran_tidak_tersedia') }}">
              @error('sarana_proteksi_kebakaran_tidak_tersedia')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sarana_proteksi_kebakaran_tidak_tersedia_persentase"></label>
              <input type="text" name="sarana_proteksi_kebakaran_tidak_tersedia_persentase" class="form-control @error('sarana_proteksi_kebakaran_tidak_tersedia_persentase') is-invalid @enderror" id="sarana_proteksi_kebakaran_tidak_tersedia_persentase" placeholder="%" @readonly(true) value="{{ old('sarana_proteksi_kebakaran_tidak_tersedia_persentase') }}">
              @error('sarana_proteksi_kebakaran_tidak_tersedia_persentase')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-3">
              <label for="sarana_proteksi_kebakaran_tidak_tersedia_evaluasi"></label>
              <input type="number" name="sarana_proteksi_kebakaran_tidak_tersedia_evaluasi" class="form-control @error('sarana_proteksi_kebakaran_tidak_tersedia_evaluasi') is-invalid @enderror" id="sarana_proteksi_kebakaran_tidak_tersedia_evaluasi" placeholder="0" @readonly(true) value="{{ old('sarana_proteksi_kebakaran_tidak_tersedia_evaluasi') }}">
              @error('sarana_proteksi_kebakaran_tidak_tersedia_evaluasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nilai_kumuh">Nilai Kumuh</label>
              <input type="number" name="nilai_kumuh" class="form-control @error('nilai_kumuh') is-invalid @enderror" id="nilai_kumuh" placeholder="nilai kumuh" @readonly(true) value="{{ old('nilai_kumuh') }}">
              @error('nilai_kumuh')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="tingkat_kumuh">Tingkat Kumuh</label>
              <input type="text" name="tingkat_kumuh" class="form-control @error('tingkat_kumuh') is-invalid @enderror" id="tingkat_kumuh" placeholder="tingkat kumuh" @readonly(true) value="{{ old('tingkat_kumuh') }}">
              @error('tingkat_kumuh')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="status_penguasaan_lahan">Kejelasan Status Penguasaan Lahan</label>
              <select name="status_penguasaan_lahan" id="status_penguasaan_lahan" class="form-control @error('status_penguasaan_lahan') is-invalid @enderror">
                <option>--Pilih Kejelasan Status Penguasaan--</option>
                <option value="+">(+)</option>
                <option value="-">(-)</option>
              </select>
              @error('status_penguasaan_lahan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="kesesuaian_rtr">Kesesuaian RTR</label>
              <select name="kesesuaian_rtr" id="kesesuaian_rtr" class="form-control @error('kesesuaian_rtr') is-invalid @enderror">
                <option>--Pilih Kesesuaian RTR--</option>
                <option value="+">(+)</option>
                <option value="-">(-)</option>
              </select>
              @error('kesesuaian_rtr')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="legalitas_lahan">Status Legalitas Lahan</label>
              <select name="legalitas_lahan" id="legalitas_lahan" class="form-control @error('legalitas_lahan') is-invalid @enderror">
                <option>--Pilih Legalitas Lahan--</option>
                <option value="legal">Legal</option>
                <option value="Non-legal">Non-Legal</option>
              </select>
              @error('legalitas_lahan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="nilai_strategis_lokasi">Nilai Strategis Lokasi</label>
              <input type="number" name="nilai_strategis_lokasi" class="form-control @error('nilai_strategis_lokasi') is-invalid @enderror" id="nilai_strategis_lokasi" placeholder="nilai strategis lokasi" value="{{ old('nilai_strategis_lokasi') }}">
              @error('nilai_strategis_lokasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kependudukan">Kependudukan</label>
              <input type="number" name="kependudukan" class="form-control @error('kependudukan') is-invalid @enderror" id="kependudukan" placeholder="kependudukan" @readonly(true) value="{{ old('kependudukan') }}">
              @error('kependudukan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="kondisi_sosial">Kondisi Sosial, Ekonomi, dan Budaya</label>
              <input type="number" name="kondisi_sosial" class="form-control @error('kondisi_sosial') is-invalid @enderror" id="kondisi_sosial" placeholder="kondisi sosial" value="{{ old('kondisi_sosial') }}">
              @error('kondisi_sosial')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nilai_pl">Nilai PL</label>
              <input type="number" name="nilai_pl" class="form-control @error('nilai_pl') is-invalid @enderror" id="nilai_pl" placeholder="nilai pl" @readonly(true) value="{{ old('nilai_pl') }}">
              @error('nilai_pl')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="tingkat_pl">Tingkat PL</label>
              <input type="text" name="tingkat_pl" class="form-control @error('tingkat_pl') is-invalid @enderror" id="tingkat_pl" placeholder="tingkat pl" @readonly(true) value="{{ old('tingkat_pl') }}">
              @error('tingkat_pl')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="klasifikasi">Klasifikasi</label>
              <input type="text" name="klasifikasi" class="form-control @error('klasifikasi') is-invalid @enderror" id="klasifikasi" placeholder="klasifikasi" value="{{ old('klasifikasi') }}">
              @error('klasifikasi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="prioritas">Skala Prioritas</label>
              <input type="number" name="prioritas" class="form-control @error('prioritas') is-invalid @enderror" id="prioritas" placeholder="skala priotitas" value="{{ old('prioritas') }}">
              @error('prioritas')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="image_one">Foto Pertama</label>
              <input type="file" name="image_one" class="form-control @error('image_one') is-invalid @enderror" id="image_one" placeholder="image_one" value="{{ old('image_one') }}">
              @error('image_one')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="image_two">Foto Kedua</label>
              <input type="file" name="image_two" class="form-control @error('image_two') is-invalid @enderror" id="image_two" placeholder="skala priotitas" value="{{ old('image_two') }}">
              @error('image_two')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <a href="{{ route('admin.house.data') }}" class="btn btn-secondary mr-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah Data Kawasan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@push('scripts')
  {{-- Axios --}}
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  {{-- Ajax --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script>
    $(function() {
        $('#city').on('change', function() {
            axios.post('{{ route('district') }}', {id: $(this).val()})
            .then(function(response) {
                $('#district').empty();
                $('#district').append(new Option('--Pilih Kecamatan--'))
                $.each(response.data, function(id, name) {
                    $('#district').append(new Option(name, id));
                });
            });
        });
    });
    $(function() {
        $('#district').on('change', function() {
            axios.post('{{ route('village') }}', {id: $(this).val()})
            .then(function(response) {
                $('#village').empty();
                $('#village').append(new Option('--Pilih Desa--'))
                $.each(response.data, function(id, name) {
                    $('#village').append(new Option(name, id));
                });
            });
        });
    });
  </script>
  <script src="{{ url('assets/js/myscript.js') }}"></script>
@endpush
@endsection