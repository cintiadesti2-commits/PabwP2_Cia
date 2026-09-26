<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LaporBanjir</title>
</head>

<body>

    <h1>LAPOR BANJIR</h1>

    <p>Form Pelaporan Kejadian Banjir</p>

    <form action="{{ route('banjir.proses') }}" method="POST">

        @csrf

        <label>Nama Pelapor</label>
        <br>
        <input type="text" name="namaPelapor" required>

        <br><br>

        <label>Lokasi Kejadian (Kecamatan/Desa)</label>
        <br>
        <input type="text" name="lokasi" required>

        <br><br>

        <label>Tinggi Genangan Air (cm)</label>
        <br>
        <input type="number" name="tinggiAir" required>

        <br><br>

        <button type="submit">Kirim Laporan</button>

    </form>

</body>
</html>