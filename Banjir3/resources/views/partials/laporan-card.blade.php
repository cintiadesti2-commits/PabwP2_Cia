<div class="card">
    <h3>{{ $laporan['nama_pelapor'] }}</h3>
    <p><strong>Lokasi kejadian:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Tinggi genangan:</strong> {{ $laporan['tinggi'] }} cm</p>

    {{-- Status genangan: < 30 Waspada, 30-70 Siaga, > 70 Awas --}}
    @if ($laporan['tinggi'] < 30)
        <p><strong>Status:</strong> <span class="badge waspada">Waspada</span></p>
    @elseif ($laporan['tinggi'] <= 70)
        <p><strong>Status:</strong> <span class="badge siaga">Siaga</span></p>
    @else
        <p><strong>Status:</strong> <span class="badge awas">Awas</span></p>
    @endif
</div>