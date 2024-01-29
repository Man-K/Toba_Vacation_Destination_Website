@extends('layouts.main')
@section('content')
<section class="contact-page-section">
    <div class="container">
        <div class="people-info-wrap">
            <h2>Edit Info Event</h2>
            <form action="{{ route('tambahevent.update', $tambahevent->id) }}" method="post" enctype="multipart/form-data">
                @method("PATCH")
                @csrf
                <input type="text" name="nama_event"  placeholder="Masukkan Nama Hotel*" class="input- subject " value="{{ $tambahevent->nama_event }}">
                    @error('nama_event')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Hotel*" class="input- subject" value="{{ $tambahevent->deskripsi }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="text" name="lokasi"  placeholder="Masukkan Lokasi Hotel*" class="input- subject" value="{{ $tambahevent->lokasi }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="file" name="gambar" placeholder="Masukkan Gambar Hotel*" class="input- subject">{{ $tambahevent->gambar }}
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                <input type="date" name="tanggal"  placeholder="Masukkan tanggal*" class="input- subject" value="{{ $tambahevent->tanggal }}">
                    @error('tanggal')
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