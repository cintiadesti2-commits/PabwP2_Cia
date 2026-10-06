@extends('layouts.app')
@section('title', 'Daftar Laporan')
@section('content')
    <h2>Daftar Laporan Banjir</h2>
    <p>Status genangan: kurang dari 30 cm = <strong>Waspada</strong>, 30&ndash;70 cm = <strong>Siaga</strong>, lebih dari 70 cm = <strong>Awas</strong>.</p>

    @forelse ($laporan as $item)
        @include('partials.laporan-card', ['laporan' => $item])
    @empty
        <p>Belum ada laporan banjir.</p>
    @endforelse

    <a href="{{ route('banjir.create') }}" class="btn">Buat Laporan Baru</a>
@endsection