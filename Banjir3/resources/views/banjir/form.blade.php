@extends('layouts.app')
@section('title', 'Form Pelaporan')
@section('content')
    <h2>Form Pelaporan Banjir</h2>
    <p>Laporkan kejadian banjir di wilayah Anda agar BPBD dapat segera menindaklanjuti.</p>

    @if ($errors->any())
        <x-alert type="error" message="Data belum lengkap atau salah. Periksa kembali isian Anda." />
    @endif

    <form action="{{ route('banjir.store') }}" method="POST" class="card">
        @csrf

        <label for="nama_pelapor">Nama Pelapor</label>
        <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" placeholder="Contoh: Budi Santoso">
        @error('nama_pelapor')
            <div class="error-text">{{ $message }}</div>
        @enderror

        <label for="lokasi">Lokasi Kejadian</label>
        <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="Contoh: Kp. Cieunteung, Baleendah">
        @error('lokasi')
            <div class="error-text">{{ $message }}</div>
        @enderror

        <label for="tinggi">Tinggi Genangan Air (cm)</label>
        <input type="number" id="tinggi" name="tinggi" value="{{ old('tinggi') }}" min="0" placeholder="Contoh: 50">
        @error('tinggi')
            <div class="error-text">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn">Kirim Laporan</button>
    </form>
@endsection