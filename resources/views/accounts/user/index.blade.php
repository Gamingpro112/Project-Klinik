@extends('layouts.admin.dashboard')
@section('title', 'Data User Website Sistem Informasi Pencatatan Kawasan Kumuh Provsu')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-4">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5>Data Pengguna Website</h5>
          <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Data Pengguna</a>
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
        <table id="datatable" class="table table-bordered dt-responsive nowrap"
          style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Username</th>
              <th>Profil</th>
              <th>SPT</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
            $i = 1;

            @endphp
            @foreach ($users as $user)

            <tr>
              <th>{{ $i++ }}</th>
              <th>{{ $user->name }}</th>
              <th>{{ $user->email }}</th>
              <th>{{ $user->username }}</th>
              <th>
                @if (!$user->profile)
                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ $user->name }}"
                  alt="Profil Pengguna" class="rounded-circle" width="70px">
                @else
                <img src="{{ url('storage/profile', $user->profile) }}" alt="Profil Pengguna">
                @endif
              </th>
              <th>
                <a href="{{ url('storage/spt', $user->spt) }}" target="_blank">{{ $user->spt }}</a>
              </th>
              <th>
                <a href="{{ route('user.edit', $user->uuid) }}" class="btn btn-info" disabled><i
                    class="fas fa-user-edit"></i></a>
                <a href="{{ route('user.edit.password', $user->uuid) }}" class="btn btn-success"><i
                    class="fas fa-key"></i></a>
                <form action="{{ route('user.delete', $user->uuid) }}" method="post" class="d-inline">
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