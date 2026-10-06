@extends('layouts.main') //pewarisan memanggil semua 
@section('title', 'Daftar Mahasisa') 
@section('content')
    <h2>Daftar Mahasiswa</h2>

    {{--komponen Alert--}}
    <x-alert type="success" message="Data Mahasiswa Berhasil dimuat."/>

    @foreach($students as $student) //ulang setiap variabel.ad pengecekan 
        @include('partials.student-card',['student' =>$student])
    @endforeach
@endsection 