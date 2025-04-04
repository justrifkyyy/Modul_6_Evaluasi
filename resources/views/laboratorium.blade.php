@extends('layouts.app')

@section('title', 'Laboratorium')

@section('content')
    <div class="text-center mb-5">
        <h1 class="fw-bold">Laboratorium</h1>
        <p>Informasi mengenai laboratorium kami dan layanan yang kami tawarkan.</p>
    </div>

    @php
        $labs = [
            ['title' => 'Startup Laboratory', 'id' => 'Startup', 'images' => ['startup1.jpg', 'startup2.jpg', 'startup3.jpg'], 'text_left' => true],
            ['title' => 'IOT Laboratory', 'id' => 'Iot', 'images' => ['IoT (1).jpg', 'IoT (2).jpg', 'IoT (3).jpg'], 'text_left' => false],
            ['title' => 'Multimedia Laboratory', 'id' => 'Mulmed', 'images' => ['Mulmed (1).jpg', 'Mulmed (2).jpg', 'Mulmed (3).jpg', 'Mulmed (4).jpg', 'Mulmed (5).jpg'], 'text_left' => true],
            ['title' => 'Computer Vision Laboratory', 'id' => 'Comvis', 'images' => ['CV (1).jpg', 'CV (2).jpg'], 'text_left' => false],
            ['title' => 'Data Science Laboratory', 'id' => 'Ds', 'images' => ['DS (1).jpg', 'DS (2).jpg', 'DS (3).jpg', 'DS (4).jpg'], 'text_left' => true],
            ['title' => 'Micro Controller Laboratory', 'id' => 'Micro', 'images' => ['Micro (1).jpg', 'Micro (2).jpg', 'Micro (3).jpg', 'Micro (4).jpg', 'Micro (5).jpg'], 'text_left' => false],
            ['title' => 'Computer Network Laboratory', 'id' => 'Comnet', 'images' => ['Comnet 1.png', 'comnet 2.png', 'Comnet 3.png', 'Comnet 4.png'], 'text_left' => true],
        ];
    @endphp

    @foreach($labs as $lab)
        <div class="d-flex align-items-center justify-content-between flex-wrap mb-5 {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : '' }}">
            <div class="w-50 p-3">
                <h2 class="fs-1 fw-semibold">{{ $lab['title'] }}</h2>
            </div>
            <div id="carousel{{ $lab['id'] }}" class="carousel slide w-75" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($lab['images'] as $index => $img)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('images/' . $img) }}" class="d-block w-100" alt="{{ $lab['id'] }} photo {{ $index + 1 }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $lab['id'] }}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $lab['id'] }}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    @endforeach
@endsection
