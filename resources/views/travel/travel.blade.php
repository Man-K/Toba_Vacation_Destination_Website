@extends('layouts.main')

@section('title')
    <title>Toba Vacation Destination | Travel</title>
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
@section('travel1')
    <div class="container">
        <h2>Travel in Toba</h2>
    </div>
@endsection

@section('travel2')
    <div class="container">
        @if(Auth::user())
            <h2 class="d-flex mx-4 ">
                <a href="{{ route('tambahtravel.create') }}"><i class="bi bi-plus"></i><strong>Tambah Data Travel</strong></a>
            </h2>
        @endif
        <div class="grid" id="cGrid">
            <!-- TRAVEL -->
            @foreach ($travel as $item)
            <div class="grid-item travel" data-category="travel">
                <div class="img-wrap">
                    <img src="travel/{{ $item->gambar }}" alt="courses picture">
                </div>
                <a href="#" class="learn-desining-banner-course">{{ $item->nama_travel }}
                    >>></a>
                <div class="box-body">
                    <p>{{ $item->deskripsi }}</p>
                    <section>
                        <p><span>Lokasi:</span> {{ $item->lokasi }}</p>
                    </section>
                    @if(Auth::user())
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('tambahtravel.edit', $item->id) }}" class="btn btn-sm btn-info shadow mx-1">Edit</a>
                        <form class="mx-1" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tambahtravel.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
            {{-- <div class="grid-item travel" data-category="travel">
                <div class="img-wrap">
                    <img src="images/travel-a1.jpg" alt="courses picture">
                </div>
                <a href="#" class="learn-desining-banner-course">Becak
                    >>></a>
                <div class="box-body">
                    <p>becak merupakan transportasi yang sering digunakan di daerah toba ini dikarenakan belum adanya  ojek dan becak juga telah digunakan sejak lama sebagai kendaraan untuk bepergian ke berbagai tempat</p>
                    <section>
                        <p><span>Lokasi:</span> Balige</p>
                        
                    </section>
                </div>
            </div>

            <div class="grid-item travel" data-category="travel">
                <div class="img-wrap">
                    <img src="images/travel-a2.jpg" alt="courses picture">
                </div>
                <a href="#" class="learn-desining-banner-course">Angkot >>></a>
                <div class="box-body">
                    <p>Angkot  adalah transportasi yang sering digunakan oleh masyarakat jika ingin bepergian untuk jarak yang lebih jauh daripada becak dikarenakan ongkos atau biaya yang dikeluarkan akan lebih murah</p>
                    <section>
                        <p><span>Lokasi:</span>Balige</p>
                        
                    </section>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
