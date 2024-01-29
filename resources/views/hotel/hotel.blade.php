@extends('layouts.main')

@section('title')
    <title>Toba Vacation Destination | Hotel</title>
@endsection

{{-- Carousel --}}
@section('content')
    <div class="banner">
        <div class="owl-four owl-carousel" itemprop="image">
            <img src="{{ asset('images/page-banner.png') }}" alt="Image of Bannner">
            <img src="{{ asset('images/page-banner2.jpg') }}" alt="Image of Bannner">
            <img src="{{ asset('images/page-banner3.jpg') }}" alt="Image of Bannner">
        </div>
        <div class="container" itemprop="description">
            <h1>Selamat Datang di Toba Vacation Destination</h1>
            <h3>Bersama Kami Manjakan Mata di Toba</h3>
        </div>
        <div id="owl-four-nav" class="owl-nav"></div>
    </div>
@endsection

<!-- Banner Close -->
@section('hotel1')
    <div class="container">
        <h2>Hotel in Toba</h2>
    </div>
@endsection

@section('hotel2')
    <div class="container">
        @if(Auth::user())
            <h2 class="d-flex mx-4 ">
                <a href="{{ route('tambahhotel.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Tambah Data Hotel</a>
            </h2>
        @endif
        <div class="grid" id="cGrid">
            <!-- HOTEL -->
            @foreach ($hotel as $item)
            <div class="grid-item hotel" data-category="hotel">
                <div class="img-wrap">
                    <img src="hotel/{{ $item->gambar }}" alt="courses picture">
                </div>
                <a href="{{ $item->lokasi }}" class="learn-desining-banner-course">{{ $item->nama_hotel }}
                    >>></a>
                <div class="box-body">
                    <p>{{ $item->deskripsi }}</p>
                    <section>
                        <p><span> {{ $item->tempat }}</span></p>
                        <p><span>{{ $item->keterangan }}</span></p>
                    </section>
                    @if(Auth::user())
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('tambahhotel.edit', $item->id) }}" class="btn btn-sm btn-info shadow mx-1">Edit</a>
                        <form class="mx-1" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tambahhotel.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
