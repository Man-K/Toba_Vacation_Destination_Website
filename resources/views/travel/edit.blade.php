@extends('layouts.main')
@section('content')
<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>Edit Info Travel</h2>
            <form action="{{ route('tambahtravel.update', $tambahtravel->id) }}" method="post" enctype="multipart/form-data">
                @method("PATCH")
                @csrf
                <input type="text" name="nama_travel"  placeholder="Masukkan Nama Hotel*" class="input- subject " value="{{ $tambahtravel->nama_travel }}">
                    @error('nama_travel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Hotel*" class="input- subject" value="{{ $tambahtravel->deskripsi }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="lokasi"  placeholder="Masukkan Lokasi Hotel*" class="input- subject" value="{{ $tambahtravel->lokasi }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="file" name="gambar" placeholder="Masukkan Gambar Hotel*" class="input- subject">{{ $tambahtravel->gambar }}
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="submit" value="Update">
            </form>
        </div>
    </div>
</section>
@endsection