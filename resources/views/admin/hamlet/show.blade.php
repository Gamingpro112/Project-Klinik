@extends('layouts.admin.dashboard')
@section('title', 'Detail Data Dusun Website Sistem Informasi Pencatatan Kawasan Kumuh Provsu')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-4">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5>Detail Data Dusun</h5>
          <a href="{{ route('admin.hamlet.create', $village->id) }}" class="btn btn-primary">Tambah Dusun</a>
        </div>
      </div>
      @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('status') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <div class="card-body mt-1">
        <div class="table-responsive">
          <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
              <tr>
                <th>Nama Kecamatan</th>
                <th>Nama Desa</th>
                <th>Dusun</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{  $village->district->name }}</td>
                <td>{{ $village->name }}</td>
                <td>
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped dt-responsive nowrap" id="datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($village->hamlet as $hamlet)
                          <tr>
                            <td>{{ $hamlet->name }}</td>
                            <td>
                              <a href="{{ route('admin.hamlet.edit', $hamlet->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                              <form action="{{ route('admin.hamlet.delete', $hamlet->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-end">
          <a href="{{ route('admin.hamlet') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection