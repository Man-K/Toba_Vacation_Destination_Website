@extends('layouts.main')
@section('content')
<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>Edit Info Kuliner</h2>
            <form action="{{ route('tambahkuliner.update', $tambahkuliner->id) }}" method="post" enctype="multipart/form-data">
                @method("PATCH")
                @csrf
                <input type="text" name="nama_kuliner"  placeholder="Masukkan Nama Kuliner*" class="input- subject " value="{{ $tambahkuliner->nama_kuliner }}">
                    @error('nama_kuliner')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Kuliner*" class="input- subject" value="{{ $tambahkuliner->deskripsi }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="lokasi"  placeholder="Masukkan Lokasi Kuliner*" class="input- subject" value="{{ $tambahkuliner->lokasi }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="tempat"  placeholder="Masukkan Nama Kota*" class="input- subject" value="{{ $tambahkuliner->tempat }}">
                    @error('tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="file" name="gambar" placeholder="Masukkan Gambar Kuliner*" class="input- subject">{{ $tambahkuliner->gambar }}
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="keterangan"  placeholder="Masukkan Keterangan*" class="input- subject" value="{{ $tambahkuliner->keterangan }}">
                    @error('keterangan')
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