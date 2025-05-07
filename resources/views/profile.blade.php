@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Profile Pengguna
            </div>
            <div class="card-body">
                @if(isset($username))
                    <h4 class="card-title">Selamat datang di Gudang Tani, {{ $username }}!</h4>
                @endif

                <div class="mt-4">
                    <h5>Informasi Akun</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Username: {{ $username }}</li>
                        <li class="list-group-item">Email: {{ $username }}@gmail.com</li>
                        <li class="list-group-item">Bergabung sejak: {{ now()->format('d F Y') }}</li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="{{ route('login') }}" class="btn btn-outline-danger">Keluar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
