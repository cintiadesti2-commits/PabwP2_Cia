<?php
namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;

class laporController extends Controller
{
    // Menampilkan form input laporan
    public function form()
    {
        return view('form');
    }

    // Menyimpan data dari form ke database
    public function simpan(Request $request)
    {
        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return view('konfirmasi'); 
    }

    // Menampilkan daftar laporan dari database
    public function daftar()
    {
        $data = Laporan::all();
        return view('laporan', ['laporan' => $data]);
    }
}