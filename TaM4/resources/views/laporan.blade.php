<!DOCTYPE html>
<html>
<head>
    <title>Daftar Laporan Banjir</title>
</head>
<body>
    <h2>Daftar Laporan Banjir</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Pelapor</th>
            <th>Lokasi</th>
            <th>Tinggi Genangan</th>
            <th>Tanggal Kejadian</th>
            <th>Status</th>
        </tr>
        @foreach ($laporan as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_pelapor }}</td>
            <td>{{ $item->lokasi }}</td>
            <td>{{ $item->tinggi_genangan }} cm</td>
            <td>{{ $item->tanggal_kejadian }}</td>
            <td>
                @if ($item->tinggi_genangan > 100)
                    Awas
                @elseif ($item->tinggi_genangan > 50)
                    Siaga
                @else
                    Waspada
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>