<!DOCTYPE html>
<html>
<head>
    <title>Kartu Belanja Siswa</title>
</head>
<body>
    <h2>Kartu Belanja Siswa</h2>
    <form method="post" action="">
        <label> Nama Siswa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kelas:</label><br>
        <select name="KELAS" required>
        <option value ="">pilih </option>
        <option value="10">X</option>
        <option value=11">XI</option>
        <option value="12">XII</option>
        </select><br><br>

        <label>NIS:</label><br>
        <input type="text" name="nis" required><br><br>

        <label for="tanggal">Tanggal Belanja:</label><br>
        <input type="date" name="tanggal" id="tanggal" required><br><br>

        <label>Nama Barang:</label><br>
        <input type="text" name="nama barang" required><br><br>

        <label>Jenis:</label><br>
        <select name="jenis" required>
        <option value ="">pilih </option>
        <option value="mam">Makanan</option>
        <option value="skc"> Skincare</option>
        <option value="muh">Minuman</option>
        <option value = "dll" > Barang Lainnya</option>
        </select><br><br>

        <label>Total Barang :</label><br>
        <input type="number" name="barang" required><br><br>

        <label>Total Belanja (Rp):</label><br>
        <input type="text" name="total" required><br><br>

        <input type="submit" name="submit" value="Simpan Transaksi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nis = $_POST['nis'];
        $tanggal = $_POST['tanggal'];
        $barang = $_POST['barang'];
        $jenis = $_POST['jenis'];
        $total = $_POST['total'];

        echo "<h3>Data Kartu Belanja Siswa:</h3>";
        echo "Nama: $nama<br>";
        echo "Kelas: $kelas<br>";
        echo "NIS: $nis<br>";
        echo "Tanggal Belanja: <strong>" . htmlspecialchars($tanggal) . "</strong><br>";
        echo "Nama Barang: $barang<br>";
        echo "Jenis: $jenis<br>";
        echo "Total Barang: $total<br>";
    }
    ?>
</body>
</body>
</html>