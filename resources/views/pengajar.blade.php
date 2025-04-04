@extends('layouts.app')

@section('title', 'Pengajar')

@section('content')
<div style="background: linear-gradient(to right, #2ecc71, #3498db); min-height: 100vh; padding-top: 80px; padding-bottom: 50px;">
    <div class="container">
        <h1 class="text-center text-white">Daftar Pengajar</h1>

        <div class="row mt-5 justify-content-center">
            @php
                $pengajar = [
                    ['nama' => 'Ir. Huzain Azis, S.Kom., M.Cs., MTA.', 'nidn' => '0920098801', 'gambar' => 'HA.png'],
                    ['nama' => 'Dr.Ir. Dolly Indra, S.Kom., M.MSI. MTA', 'nidn' => '0428077401', 'gambar' => 'DI.png'],
                    ['nama' => 'Muhammad Arfah Asis, S.Kom., MT', 'nidn' => '0909029203', 'gambar' => 'MAA.png']
                ];
            @endphp

            @foreach ($pengajar as $dosen)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/{{ $dosen['gambar'] }}" class="card-img-top" alt="Foto Pengajar">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $dosen['nama'] }}</h5>
                        <p class="card-text">NIDN: {{ $dosen['nidn'] }}</p>
                        <!-- Ikon Love dan Teks Like -->
                        <div class="like-section mt-3" style="cursor: pointer;">
                            <span class="like-icon fs-4 d-block" data-nidn="{{ $dosen['nidn'] }}">♡</span>
                            <small class="text-muted">Like</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Script Like -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const likes = {};

        document.querySelectorAll('.like-icon').forEach(icon => {
            icon.addEventListener('click', function () {
                const nidn = this.getAttribute('data-nidn');
                likes[nidn] = !likes[nidn];
                this.textContent = likes[nidn] ? '❤️' : '♡';
            });
        });
    });
</script>
@endsection
