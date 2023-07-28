@extends('layouts.admin.dashboard')
@section('title', 'Data Kawasan Kumuh Website Sistem Informasi Pencatatan Kawasan Kumuh Provsu')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-4">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5>Data Kawasan Kumuh</h5>
          <a href="{{ route('admin.house.data.create') }}" class="btn btn-primary">Tambah Data Kawasan</a>
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
        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
              <th>No</th>
              <th>Operator</th>
              <th>Kabupaten</th>
              <th>Nama</th>
              <th>Luas</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              @php
                $i = 1;
              @endphp
              @foreach ($houseDatas as $houseData)
                <tr>
                  <th>{{ $i++ }}</th>
                  <th>{{ $houseData->user->name }}</th>
                  <th>{{ $houseData->city->name }}</th>
                  <th>{{ $houseData->nama }}</th>
                  <th>{{ $houseData->luas }}</th>
                  <th>{{ $houseData->houseDataStatus->status }}</th>
                  <th>
                    <a href="{{ route('admin.house.data.edit', $houseData->uuid) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                    <a href="{{ route('admin.house.data.show', $houseData->uuid) }}" class="btn btn-success"><i class="fas fa-info"></i></a>
                    <form action="{{ route('admin.house.data.delete', $houseData->uuid) }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                  </th>
                </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection