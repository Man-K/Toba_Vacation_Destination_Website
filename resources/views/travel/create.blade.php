@extends('layouts.main')
@section('content')
<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>Tambah Hotel</h2>
            <form action="{{ route('tambahtravel.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="nama_travel"  placeholder="Masukkan Nama Transportasi*" class="input- subject " value="{{ old('nama_travel') }}">
                    @error('nama_travel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Travel*" class="input- subject" value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="lokasi"  placeholder="Masukkan Lokasi Travel*" class="input- subject" value="{{ old('lokasi') }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="file" name="gambar" placeholder="Masukkan Gambar Hotel*" class="input- subject">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="submit" value="Tambah">
            </form>
        </div>
    </div>
</section>

@endsection