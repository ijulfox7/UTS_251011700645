@extends('layouts.app')

@section('title', $buku->judul_buku . ' - Galeri Buku')

@section('content')
<div class="container py-5">
    <a href="{{ route('buku.index') }}"
       class="btn btn-outline-dark mb-4">
        &larr; Kembali ke Daftar Buku
    </a>
    <div class="card border-0 shadow-sm">
        <div class="row g-0">
            <div class="col-md-4">
                <img
                    src="{{ asset('images/' . $buku->images) }}"
                    alt="{{ $buku->judul_buku }}"
                    class="img-fluid rounded-start w-100"
                    style="height: 100%; min-height: 350px; object-fit: cover;">
            </div>

            <div class="col-md-8">
                <div class="card-body p-4 p-lg-5">
                    <span class="badge text-bg-secondary mb-3">
                        {{ $buku->genre }}
                    </span>
                    <h1 class="fw-bold mb-3">
                        {{ $buku->judul_buku }}
                    </h1>
                    <p class="text-muted">
                        Penulis: {{ $buku->penulis }}
                    </p>
                    <h3 class="text-primary fw-bold mb-4">
                        Rp {{ number_format($buku->harga, 0, ',', '.') }}
                    </h3>
                    <h5 class="fw-bold">Ringkasan Buku</h5>
                    <p class="text-secondary" style="line-height: 1.8;">
                        {{ $buku->summary }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection