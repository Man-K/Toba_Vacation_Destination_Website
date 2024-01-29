@extends('layouts.main')

@section('title')
    <title>Toba Vacation Destination | Event</title>
@endsection

<!-- Banner Close -->
@section('event1')
    <div class="container">
        <h2>events in Toba</h2>
    </div>
@endsection

@section('event2')
    @if(Auth::user())
            <h2 class="d-flex mx-4 ">
                <a href="{{ route('tambahevent.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Tambah Data Event</a>
            </h2>
        @endif
    <div class="container">
        @foreach ($event as $item)
            <div class="event-wrap">
                <div class="img-wrap">
                    <img src="event/{{ $item->gambar }}" alt="event images">
                </div>
                <div class="details">
                    <a href="">
                        <h3>{{ $item->nama_event }}</h3>
                    </a>
                    <p>{{$item->deskripsi}}</p>

                    <h5><i class="far fa-clock"></i>{{ $item->tanggal }}</h5>
                    <h5><i class="fas fa-map-marker-alt"></i>{{ $item->lokasi }}</h5>
                </div>
                @if(Auth::user())
                <div class="d-flex justify-content-center">
                    <a href="{{ route('tambahevent.edit', $item->id) }}" class="btn btn-sm btn-info shadow mx-1">Edit</a>
                    <form class="mx-1" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tambahevent.destroy',$item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
                @endif
            </div>

        {{-- <div class="event-wrap">
            <div class="img-wrap">
                <img src="images/e2.png" alt="event images">
            </div>
            <div class="details">
                <a href="">
                    <h3>Festival Mengebang Solu Bolon</h3>
                </a>
                <p>Tradisi lomba mengelilingi Danau Toba menggunakan Solu Bolon atau Perahu Besar</p>

                <h5><i class="far fa-clock"></i> Dec 10,2019 </h5>
                <h5><i class="fas fa-map-marker-alt"></i> Parapat</h5>
            </div>
        </div>

        <div class="event-wrap">
            <div class="img-wrap">
                <img src="images/e3.png" alt="event images">
            </div>
            <div class="details">
                <a href="">
                    <h3>Festival Sigale-Gale</h3>
                </a>
                <p>Festival ini kita akan melihat sebuah pawai Boneka/Patung manusia khas Batak yang dibawa
                    berkeliling Desa oleh para pria.</p>

                <h5><i class="far fa-clock"></i> Mei 31,2019 </h5>
                <h5><i class="fas fa-map-marker-alt"></i> Kabupaten Samosir</h5>
            </div>
        </div>

        <div class="event-wrap">
            <div class="img-wrap">
                <img src="images/e4.jpg" alt="event images">
            </div>
            <div class="details">
                <a href="">
                    <h3>Karnaval Danau Toba</h3>
                </a>
                <p> Karnaval yang pernah diadakan untuk menyambut Hari Ulang Tahun Danau Toba dan Karnaval pernah dihadiri
                    oleh Presiden Jokowi</p>

                <h5><i class="far fa-clock"></i> Juli 03-05,2020 </h5>
                <h5><i class="fas fa-map-marker-alt"></i> Kota Balige</h5>
            </div>
        </div> --}}
    @endforeach
    </div>
@endsection

{{-- @section('event3')
    <div class="container">
        <a href="#" class="button">show more</a>
    </div>
@endsection --}}
