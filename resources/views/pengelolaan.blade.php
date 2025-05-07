@extends('layouts.app')

@section('content')
<h1>Pengelolaan Data</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="row mb-4">
    <div class="col-md-6">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title">Ringkasan Produk</h5>
                <p class="card-text">Total Produk: <strong>{{ count($data) }}</strong></p>
                <p class="card-text">Total Stok: <strong>{{ array_sum(array_column($data, 'stok')) }}</strong></p>
            </div>
        </div>
    </div>
</div>

<div class="card mt-2">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <span>Daftar Produk</span>
        <a href="{{ route('produk.create') }}" class="btn btn-light btn-sm">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga (Rp)</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td>{{ $item['stok'] }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $item['id']) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('produk.destroy', $item['id']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script></script>
@endsection
