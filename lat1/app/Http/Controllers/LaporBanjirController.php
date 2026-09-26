<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('banjir.banjir');
    }

    public function proses(Request $request)
    {
        $namaPelapor = $request->input('namaPelapor');
        $lokasi = $request->input('lokasi');
        $tinggiAir = $request->input('tinggiAir');

        return view('konfirmasi', [
            'namaPelapor' => $namaPelapor,
            'lokasi' => $lokasi,
            'tinggiAir' => $tinggiAir
        ]);
    }
}