@extends('layouts.main')
@section('content')
<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>Tambah Wisata Alam</h2>
            <form action="{{ route('tambahevent.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- <input type="text" name="nama_alam"  placeholder="Masukkan Nama Wisata Alam*" class="input- subject " value="{{ old('nama_alam') }}">
                    @error('nama_alam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Wisata Alam*" class="input- subject" value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="lokasi"  placeholder="Masukkan Lokasi Wisata Alam*" class="input- subject" value="{{ old('lokasi') }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="file" name="gambar" placeholder="Masukkan Gambar Wisata Alam*" class="input- subject">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                {{-- <input type="text" name="tempat"  placeholder="Masukkan Nama Kota*" class="input- subject" value="{{ old('tempat') }}">
                    @error('tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="keterangan"  placeholder="Masukkan Keterangan*" class="input- subject" value="{{ old('keterangan') }}">
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                <input type="submit" value="Tambah">
            </form>
        </div>
    </div>
</section>

@endsection