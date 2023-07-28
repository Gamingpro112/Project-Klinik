@extends('layouts.admin.dashboard')
@section('title', 'Edit Data Dusun Website Sistem Informasi Pencatatan Kawasan Kumuh Provsu')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-4">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5>Edit Data Dusun</h5>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('admin.hamlet.update', $hamlet->id) }}" method="post">
          @csrf
          @method('put')
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="village">Nama Desa</label>
              <input type="village" name="village" class="form-control @error('village') is-invalid @enderror" id="village" placeholder="Email" value="{{ $hamlet->village->name }}" @readonly(true)>
              @error('village')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="name">Nama Dusun</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="input nama dusun" value="{{ $hamlet->name }}">
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <a href="{{ route('admin.hamlet.show', $hamlet->village->id) }}" class="btn btn-secondary mr-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Edit Data Dusun</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection