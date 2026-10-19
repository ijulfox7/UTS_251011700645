@extends('layouts.app')

@section('title', 'Daftar Buku - Galeri Buku')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Galeri Buku</h1>
        <p class="text-muted">
            Ayo temukan buku menarik untuk menemani waktu membacamu.
            Membaca dapat membuatmu lebih pintar, kreatif, dan imajinatif, 
            juga dengan membaca, kita bisa menjelajahi dunia tanpa harus meninggalkan rumah.
        </p>
    </div>
        <div class="row mb-4 justify-content-center">
            <div class="col-md-6">
                <form action="{{ url('/') }}" method="GET" class="input-group shadow-sm">
                    <input type="text" name="search" class="form-control" placeholder="Cari judul buku atau penulis..." value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Cari</button>
                        @if(request('search'))
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary">Reset</a>
                        @endif
                </form>
             </div>
         </div>
    <div class="row g-4">
        @forelse ($buku as $buku)
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <div class="card h-100 shadow-sm border-0">
                    <img
                        src="{{ asset('images/' . $buku->images) }}"
                        alt="{{ $buku->judul_buku }}"
                        class="card-img-top"
                        style="height: 280px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <span class="badge text-bg-secondary align-self-start mb-2">
                            {{ $buku->genre }}
                        </span>
                        <h5 class="card-title fw-bold">
                            {{ $buku->judul_buku }}
                        </h5>
                        <p class="text-muted mb-2">
                            {{ $buku->penulis }}
                        </p>
                        <p class="fw-bold text-primary">
                            Rp {{ number_format($buku->harga, 0, ',', '.') }}
                        </p>
                        <p class="card-text text-muted">
                            {{ \Illuminate\Support\Str::limit(
                                $buku->summary, 90
                            ) }}
                        </p>
                        <a
                            href="{{ route('buku.show', $buku->id) }}"
                            class="btn btn-dark mt-auto">
                            Lihat Detail
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>Belum ada data buku.</p>
            </div>
        @endforelse
    </div>

</div>
@endsection