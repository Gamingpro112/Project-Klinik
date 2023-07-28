@extends('layouts.admin.dashboard')
@section('title', 'Edit Data User Website Sistem Informasi Pencatatan Kawasan Kumuh Provsu')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-4">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5>Edit Data Pengguna Website</h5>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('user.update', $user->uuid) }}" method="post">
          @csrf
          @method('put')
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="nama" value="{{ $user->name }}">
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ $user->email }}">
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ $user->username }}">
              @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="rule">Rule Account</label>
              <select class="form-control @error('rule') is-invalid @enderror" name="rule" id="rule">
                <option>--Pilih Rule--</option>
                @foreach ($rules as $rule)
                  @if ($rule == $user->getRoleNames()[0])
                    <option value="{{ $rule }}" selected>{{ $rule }}</option>
                  @else
                    <option value="{{ $rule }}">{{ $rule }}</option>
                  @endif
                @endforeach
              </select>
              @error('rule')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <a href="{{ route('user') }}" class="btn btn-secondary mr-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Edit Data Pengguna</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection