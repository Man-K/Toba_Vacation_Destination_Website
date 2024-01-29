@extends('layouts.main')
@section('content')
<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>Tambah Travel</h2>
            <form action="{{ route('tambahkuliner.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="nama_kuliner"  placeholder="Masukkan Nama Kuliner*" class="input- subject " value="{{ old('nama_kuliner') }}">
                    @error('nama_kuliner')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Kuliner*" class="input- subject" value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="lokasi"  placeholder="Masukkan Lokasi Kuliner*" class="input- subject" value="{{ old('lokasi') }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="tempat"  placeholder="Masukkan Nama Kota*" class="input- subject" value="{{ old('tempat') }}">
                    @error('tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="file" name="gambar" placeholder="Masukkan Gambar Kuliner*" class="input- subject">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="keterangan"  placeholder="Masukkan Keterangan*" class="input- subject" value="{{ old('keterangan') }}">
                    @error('keterangan')
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