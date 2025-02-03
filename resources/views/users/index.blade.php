@extends('layouts.admin.app')

@section('title', 'Master Pengguna')

@section('content')
<div class="container">
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah Pengguna</a>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $user->user_fullname }}</td>
                    <td>{{ $user->user_email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->user_id) }}" class="btn btn-warning btn-sm">Edit</a>            
                    <form action="{{ route('users.destroy', $user->user_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pengguna {{ $user->user_fullname }}?');"> 
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button> 
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
        </tfoot>
    </table>
</div>
@endsection
