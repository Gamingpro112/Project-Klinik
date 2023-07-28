@extends('layouts.admin.dashboard')
@section('title', 'Edit Password User Website Sistem Informasi Pencatatan Kawasan Kumuh Provsu')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mt-4">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5>Edit Password Pengguna Website</h5>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('user.update.password', $user->uuid) }}" method="post">
          @csrf
          @method('put')
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="old_password">Password Sebelumnya</label>
              <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" placeholder="password sebelumnya">
              @error('old_password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="new_password">Password Baru</label>
              <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" placeholder="password baru">
              @error('new_password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          @if (session('status'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('status') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('user') }}" class="btn btn-secondary mr-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Edit Password Pengguna</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection