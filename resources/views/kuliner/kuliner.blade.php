@extends('layouts.main')

@section('title')
    <title>Toba Vacation Destination | Kuliner</title>
@endsection

<!-- Banner Close -->
@section('kuliner1')
    <div class="container">
        <h2>Kuliner in Toba</h2>
    </div>
@endsection

@section('kuliner2')
    <div class="container">
        @if(Auth::user())
            <h2 class="d-flex mx-4 ">
                <a href="{{ route('tambahkuliner.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Tambah Data Kuliner</a>
            </h2>
        @endif
        <div class="grid" id="cGrid">
            <!-- KULINER -->
            @foreach ($kuliner as $item)
            <div class="grid-item kuliner" data-category="kuliner">
                <div class="img-wrap">
                    <img src="kuliner/{{ $item->gambar }}" alt="courses picture">
                </div>
                <a href="{{ $item->lokasi }}" class="learn-desining-banner-course">{{ $item->nama_kuliner }}
                    >>></a>
                <div class="box-body">
                    <p>{{$item->deskripsi}}</p>
                    <section>
                        <p><span>{{ $item->tempat }}</span></p>
                        <p><span>{{ $item->keterangan }}</span></p>
                    </section>
                    @if(Auth::user())
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('tambahkuliner.edit', $item->id) }}" class="btn btn-sm btn-info shadow mx-1">Edit</a>
                        <form class="mx-1" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tambahkuliner.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach

            {{-- <div class="grid-item kuliner" data-category="kuliner">
                <div class="img-wrap">
                    <img src="images/kuliner-a2.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/C8M1dzM2t7fGT4Bt5" class="learn-desining-banner-course">Fly Over >>></a>
                <div class="box-body">
                    <p>fly over merupakan tempat makan yang banyak menyediakan makanan makanan khas daerah batak terutama toba rumah makan fly over juga memiliki tempat yang strategis dan dapat dikunjungi turis dan masyarakat dengan mudah</p>
                    <section>
                        <p><span>Lokasi:</span> laguboti</p>
                        <p><span>Buka:</span> 6am-12am m</p>
                    </section>
                </div>
            </div>

            <div class="grid-item kuliner" data-category="kuliner">
                <div class="img-wrap">
                    <img src="images/kuliner-a3.jpg" alt="courses picture">
                </div>
                <a href="https://goo.gl/maps/c5ja8yHgr4rGQFwJA" class="learn-desining-banner-course">Monalisa >>></a>
                <div class="box-body">
                    <p>rumah makan monalisa merupakan rumah makan yang menyediakan makanan makanan tradisional yang sering
                        di gemari oleh masyarakat maupun wisatawan yang datang ke daerah toba</p>
                    <section>
                        <p><span>Lokasi:</span>  Balige</p>
                        <p><span>Buka:</span> 6am-12am m</p>
                    </section>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
