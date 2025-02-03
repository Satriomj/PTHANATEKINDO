@extends('layouts.admin.app')

@section('title', 'Tambah Pengguna')

@section('content')
<div class="container">
    <h2>Tambah Pengguna</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="user_email" id="user_email"  class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="user_fullname" id="user_fullname" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="d-flex mt-3">
            <button type="submit" class="btn btn-primary me-2">Simpan</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
