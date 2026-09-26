<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Laporan</title>
</head>

<body>

    <h1>LAPORAN BERHASIL</h1>

    <p>Data laporan banjir berhasil diproses.</p>

    <hr>

    <p>
        <strong>Nama Pelapor:</strong>
        {{ $namaPelapor }}
    </p>

    <p>
        <strong>Lokasi:</strong>
        {{ $lokasi }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $tinggiAir }} cm
    </p>

    <br>

    <a href="{{ route('banjir.form') }}">
        Kembali ke Form
    </a>

</body>
</html>