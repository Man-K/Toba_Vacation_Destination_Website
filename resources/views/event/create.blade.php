@extends('layouts.main')
@section('content')
<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>Tambah Event</h2>
            <form action="{{ route('tambahevent.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="nama_event"  placeholder="Masukkan Nama Event*" class="input- subject " value="{{ old('nama_event') }}">
                    @error('nama_event')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Event*" class="input- subject" value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="lokasi"  placeholder="Masukkan Lokasi Event*" class="input- subject" value="{{ old('lokasi') }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="file" name="gambar" placeholder="Masukkan Gambar Event*" class="input- subject">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="date" name="tanggal"  placeholder="Masukkan Tanggal Event*" class="input- subject" value="{{ old('tanggal') }}">
                    @error('tanggal')
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