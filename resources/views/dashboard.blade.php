@extends('layouts.app')

@section('content')
<h1>Dashboard Gudang Tani</h1>
@if(isset($username))
    <div class="alert alert-success">
        Selamat datang di Gudang Tani, <strong>{{ $username }}</strong>!
    </div>
@endif

<div class="row mt-4">
    <div class="col-md-6 mb-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Total Produk</h5>
                <p class="card-text display-4">{{ $totalProduk ?? 0 }}</p>
                <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}"
                   class="text-white">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title">Total Stok</h5>
                <p class="card-text display-4">{{ $totalStok ?? 0 }}</p>
                <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}"
                   class="text-white">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        Ringkasan Inventori
    </div>
    <div class="card-body">
        <p>Total produk tersedia: <strong>{{ $totalProduk }}</strong> jenis produk</p>
        <p>Total stok tersedia: <strong>{{ $totalStok }}</strong> unit</p>
    </div>
</div>
@endsection
