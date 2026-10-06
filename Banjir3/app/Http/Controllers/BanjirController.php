<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class BanjirController extends Controller
{
    // contoh laporan (prototipe, belum memakai database)
    private function dataLaporan(): array
    {
        return [
            ['nama_pelapor' => 'Aqila Rahma', 'lokasi' => 'Kp. Cieunteung, Baleendah', 'tinggi' => 20],
            ['nama_pelapor' => 'Rakha Rifan', 'lokasi' => 'Desa Citeureup, Dayeuhkolot','tinggi' => 45],
            ['nama_pelapor' => 'Novrian Latihf', 'lokasi' => 'Perumahan Bojongsoang Indah','tinggi' => 70],
            ['nama_pelapor' => 'Ardiansyah', 'lokasi' => 'Kp. Andir, Baleendah','tinggi' => 95],
            ['nama_pelapor' => 'Ade Putra',  'lokasi' => 'Jl. Raya Majalaya','tinggi' => 30],
        ];
    }

    // Halaman form pelaporan (GET)
    public function create()
    {
        return view('banjir.form');
    }

    // Menerima data form (POST), lalu menampilkan halaman konfirmasi
    public function store(Request $request)
    {
        $laporan = $request->validate([
            'nama_pelapor' => 'required|string|max:100',
            'lokasi'       => 'required|string|max:150',
            'tinggi'       => 'required|integer|min:0',
        ], [
            'nama_pelapor.required' => 'Nama pelapor wajib diisi.',
            'lokasi.required'       => 'Lokasi kejadian wajib diisi.',
            'tinggi.required'       => 'Tinggi genangan wajib diisi.',
            'tinggi.integer'        => 'Tinggi genangan harus berupa angka (cm).',
            'tinggi.min'            => 'Tinggi genangan tidak boleh negatif.',
        ]);

        return view('banjir.konfirmasi', compact('laporan'));
    }

    // Halaman daftar laporan (GET)
    public function index()
    {
        $laporan = $this->dataLaporan();

        return view('banjir.index', compact('laporan'));
    }
}