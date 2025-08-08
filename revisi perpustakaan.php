<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Buku Di Perpustakaan</title>
</head>
<body>
    <h2>Peminjaman Buku Di Perpustakaan</h2>
    <form method="post" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="tanggal">Tanggal Hari Ini:</label><br>
        <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly><br><br>
        
        <label>Kelas: </label><br>
        <select name="kelas" required>
            <option value="">Pilih</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select><br><br>

        <label>Jurusan: </label><br>
        <select name="jurusan" required>
            <option value="">Pilih</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="MPLB">MPLB</option>
            <option value="BD">BD</option>
            <option value="BR">BR</option>
            <option value="AKL">AKL</option>
            <option value="KL">KL</option>
            <option value="TO">TO</option>
            <option value="TM">TM</option>
            <option value="TL">TL</option>
            <option value="DKV">DKV</option>
        </select><br><br>

        <label>Judul Buku: </label><br>
        <input type="text" name="judul" required><br><br>

        <label>Jenis Buku:</label><br>
        <select name="buku" required>
            <option value="">Pilih</option>
            <option value="Pelajaran">Pelajaran</option>
            <option value="Pelajaran Produktif">Pelajaran Produktif</option>
            <option value="Novel">Novel All Genre</option>
            <option value="Komik">Komik</option>
            <option value="Umum">Umum</option>
        </select><br><br>

        <label>Waktu Peminjaman (hari): </label><br>
        <input type="number" name="waktu" min="1" required><br><br>

        <input type="submit" name="submit" value="Daftar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tanggal = $_POST['tanggal'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $judul = $_POST['judul'];
        $jenis = $_POST['buku'];
        $waktuPinjam = $_POST['waktu'];

        // Hitung tanggal pengembalian
        $tanggalPengembalian = date('Y-m-d', strtotime($tanggal . " + $waktuPinjam days"));

        echo "<h3>Data Peminjaman:</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>
                <tr>
                    <th>Tanggal Peminjaman</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Judul Buku</th>
                    <th>Jenis Buku</th>
                    <th>Waktu Peminjaman (hari)</th>
                    <th>Tanggal Pengembalian</th>
                </tr>
                <tr>
                    <td>$tanggal</td>
                    <td>$nama</td>
                    <td>$kelas</td>
                    <td>$jurusan</td>
                    <td>$judul</td>
                    <td>$jenis</td>
                    <td>{$waktuPinjam} Hari</td>
                    <td>$tanggalPengembalian</td>
                </tr>
              </table>";
    }
    ?>
</body>
</html>