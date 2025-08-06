<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Buku Di Perpustakaan</title>
</head>
<body>
    <h2>Peminjaman Buku Di Perpustakaan</h2>
    <form method="post" action="">
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required><br><br>

        <label>Nama Siswa/Siswi:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kelas: </label><br>
        <input type="text" name="kelas" required><br><br>

        <label>Jurusan: </label><br>
        <input type="text" name="jurusan" required><br><br>

        <label>NIS: </label><br>
        <input type="text" name="nis" required><br><br>

        <label>NISN: </label><br>
        <input type="text" name="nisn" required><br><br>

        <label>Judul Buku: </label><br>
        <input type="text" name="judul" required><br><br>

        <label>Jenis Buku:</label><br>
        <select name="buku" required>
            <option value="">Pilih</option>
            <option value="Pelajaran">Pelajaran</option>
            <option value="Pelajaran Produktif">Pelajaran Produktif</option>
            <option value="Novel">Novel All Genre</option>
            <option value="Umum">Umum</option>
        </select><br><br>

        <label>Waktu Peminjaman: </label><br>
        <input type="text" name="waktu" required><br><br>

    <input type="submit" name="submit" value="Daftar">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $tanggal = $_POST['tanggal'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $NIS = $_POST['nis'];
        $NISN= $_POST['nisn'];
        $judul = $_POST['judul'];
        $jenis = $_POST['buku'];

        echo "<h3>Data Peminjaman:</h3>";
        echo "Tanggal yang dikirim: <strong>" . htmlspecialchars($tanggal) . "</strong><br>";
        echo "Nama: $nama<br>";
        echo "Kelas: $kelas<br>";
        echo "Jurusan: $jurusan<br>";
        echo "NIS: $NIS<br>";
        echo "NISN: $NISN<br>";
        echo "Judul: $judul<br>";
        echo "Jenis: $jenis<br>";
    }
    ?>

    </body>
</html>