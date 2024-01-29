@extends('layouts.main')
@section('content')
<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>Edit Info Hotel</h2>
            <form action="{{ route('tambahhotel.update', $tambahhotel->id) }}" method="post" enctype="multipart/form-data">
                @method("PATCH")
                @csrf
                <input type="text" name="nama_hotel"  placeholder="Masukkan Nama Hotel*" class="input- subject " value="{{ $tambahhotel->nama_hotel }}">
                    @error('nama_hotel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Hotel*" class="input- subject" value="{{ $tambahhotel->deskripsi }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="lokasi"  placeholder="Masukkan Lokasi Hotel*" class="input- subject" value="{{ $tambahhotel->lokasi }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="tempat"  placeholder="Masukkan Nama Kota*" class="input- subject" value="{{ $tambahhotel->tempat }}">
                    @error('tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="file" name="gambar" placeholder="Masukkan Gambar Hotel*" class="input- subject">{{ $tambahhotel->gambar }}
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="keterangan"  placeholder="Masukkan Keterangan*" class="input- subject" value="{{ $tambahhotel->keterangan }}">
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