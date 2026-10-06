@extends('layouts.app')
@section('title', 'Konfirmasi Laporan')
@section('content')
    <h2>Konfirmasi Laporan</h2>

    {{-- Komponen Blade --}}
    <x-alert type="success" message="Laporan banjir berhasil dikirim. Terima kasih atas laporan Anda!" />

    <p>Berikut data yang telah Anda kirim:</p>

    {{--Partial--}}
    @include('partials.laporan-card', ['laporan' => $laporan])

    <a href="{{ route('banjir.create') }}" class="btn">Buat Laporan Baru</a>
    <a href="{{ route('banjir.index') }}" class="btn outline">Lihat Daftar Laporan</a>
@endsection