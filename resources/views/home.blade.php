@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-4 col-12 mb-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalUsers }}</h3>
                <p>Jumlah Pengguna</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-12 mb-4">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $activeUsers }}</h3>
                <p>Pengguna Aktif</p>
            </div>
        </div>
    </div>
</div>
@endsection
