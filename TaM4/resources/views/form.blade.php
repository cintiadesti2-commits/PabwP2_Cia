<!DOCTYPE html>
<html>
<head>
    <title>Form Lapor Banjir</title>
</head>
<body>
    <h2>Form Pelaporan Banjir</h2>
    <form action="/simpan" method="POST">
        @csrf
        <label>Nama Pelapor:</label><br>
        <input type="text" name="nama_pelapor" required><br><br>

        <label>Lokasi:</label><br>
        <input type="text" name="lokasi" required><br><br>

        <label>Tinggi Genangan (cm):</label><br>
        <input type="number" name="tinggi_genangan" required><br><br>

        <label>Tanggal Kejadian:</label><br>
        <input type="date" name="tanggal_kejadian" required><br><br>

        <button type="submit">Kirim Laporan</button>
    </form>
</body>
</html>