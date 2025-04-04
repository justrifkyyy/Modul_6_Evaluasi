@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-primary mt-5 mb-2">Kontak Kami</h1>
    <p class="text-center">Anda dapat menghubungi kami melalui email di web resmi kami dan juga melalui sosial media kami.</p>

    <!-- Formulir Kontak -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-4">
                <h4 class="text-center text-dark">Kirim Pesan</h4>
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" id="name" class="form-control" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea id="message" class="form-control" rows="4" placeholder="Tulis pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim</button>
                </form>
                <p id="successMessage" class="text-success text-center mt-3" style="display: none;">Pesan berhasil dikirim!</p>
            </div>
        </div>
    </div>

    <!-- Sosial Media -->
    <div class="text-center mt-4">
        <h5>Ikuti Kami di Sosial Media</h5>
        <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-outline-primary"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#" class="btn btn-outline-info"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#" class="btn btn-outline-danger"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
    </div>
</div>

<!-- JavaScript untuk Validasi dan Efek -->
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        document.getElementById('successMessage').style.display = 'block';
        setTimeout(() => {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000);
        this.reset();
    });
</script>
@endsection
