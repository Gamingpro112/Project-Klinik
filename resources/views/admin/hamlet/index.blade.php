@extends('layouts.admin.dashboard')
@section('title', 'Data Dusun Website Sistem Informasi Pencatatan Kawasan Kumuh Provsu')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-4">
      <div class="card-body mt-1">
        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kecamatan</th>
              <th>Nama Desa</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              @php
                $i = 1;
              @endphp
              @foreach ($villages as $village)
                <tr>
                  <th>{{ $i++ }}</th>
                  <td>{{  $village->district->name }}</td>
                  <td>{{ $village->name }}</td>
                  <td>
                    <a href="{{ route('admin.hamlet.show', $village->id) }}" class="btn btn-success"><i class="fas fa-info"></i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection