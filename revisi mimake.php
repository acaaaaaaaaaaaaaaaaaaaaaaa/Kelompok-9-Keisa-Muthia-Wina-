<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Siswa Belanja</title>
</head>
<body>
    <h2>Transaksi Siswa Belanja</h2>
    <form method="post" action="">
        <label>Nama Siswa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kelas:</label><br>
        <select name="kelas" required>
            <option value="">Pilih</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select><br><br>

        <label for="tanggal">Tanggal Belanja:</label><br>
        <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly><br><br>

        <!-- Barang 1 -->
        Barang 1:
        <select name="barang1">
            <option value="0">Pilih Barang</option>
            <option value="Roti Bakar-5000">Roti Bakar - Rp5.000</option>
            <option value="Susu UHT-6000">Susu UHT - Rp6.000</option>
            <option value="Pensil 2B-2000">Pensil 2B - Rp2.000</option>
            <option value="Buku Tulis-3500">Buku Tulis - Rp3.500</option>
            <option value="Minuman Botol-4000">Minuman Botol - Rp4.000</option>
        </select>
        Jumlah: <input type="number" name="jumlah1" min="1" value="1"><br><br>

        <!-- Barang 2 -->
        Barang 2:
        <select name="barang2">
            <option value="0">Pilih Barang</option>
            <option value="Roti Bakar-5000">Roti Bakar - Rp5.000</option>
            <option value="Susu UHT-6000">Susu UHT - Rp6.000</option>
            <option value="Pensil 2B-2000">Pensil 2B - Rp2.000</option>
            <option value="Buku Tulis-3500">Buku Tulis - Rp3.500</option>
            <option value="Minuman Botol-4000">Minuman Botol - Rp4.000</option>
        </select>
        Jumlah: <input type="number" name="jumlah2" min="1" value="1"><br><br>

        <!-- Barang 3 -->
        Barang 3:
        <select name="barang3">
            <option value="0">Pilih Barang</option>
            <option value="Roti Bakar-5000">Roti Bakar - Rp5.000</option>
            <option value="Susu UHT-6000">Susu UHT - Rp6.000</option>
            <option value="Pensil 2B-2000">Pensil 2B - Rp2.000</option>
            <option value="Buku Tulis-3500">Buku Tulis - Rp3.500</option>
            <option value="Minuman Botol-4000">Minuman Botol - Rp4.000</option>
        </select>
        Jumlah: <input type="number" name="jumlah3" min="1" value="1"><br><br>

        <legend>Metode Pembayaran</legend>
        <input type="radio" name="metode" value="Tunai" required> Tunai<br>
        <input type="radio" name="metode" value="Saldo Digital"> Saldo Digital Sekolah<br>
        <input type="radio" name="metode" value="Kartu Siswa"> Kartu Siswa<br><br>

        <input type="submit" name="submit" value="Kirim Transaksi">
    </form>

<?php
if (isset($_POST['submit'])) {
    $nama    = $_POST['nama'];
    $kelas   = $_POST['kelas'];
    $tanggal = $_POST['tanggal'];
    $metode  = $_POST['metode'];

    // Ambil data barang
    $barangs = [];
    for ($i = 1; $i <= 3; $i++) {
        $barangInput = $_POST["barang$i"];
        $jumlah      = $_POST["jumlah$i"];

        if ($barangInput != "0") {
            list($namaBarang, $harga) = explode("-", $barangInput);
            $total = $harga * $jumlah;
            $barangs[] = [
                'nama' => $namaBarang,
                'harga' => $harga,
                'jumlah' => $jumlah,
                'total' => $total
            ];
        }
    }

    // Hitung total semua
    $grandTotal = array_sum(array_column($barangs, 'total'));

    // Tampilkan hasil dalam tabel
    echo "<h3>Hasil Transaksi Belanja Siswa</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>
            <tr>
                <th>Nama Siswa</th>
                <td>$nama</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>$kelas</td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td>$tanggal</td>
            </tr>
            <tr>
                <th>Metode Pembayaran</th>
                <td>$metode</td>
            </tr>
          </table><br>";

    echo "<table border='1' cellpadding='5' cellspacing='0'>
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>";

    $no = 1;
    foreach ($barangs as $b) {
        echo "<tr>
                <td>$no</td>
                <td>{$b['nama']}</td>
                <td>Rp" . number_format($b['harga'], 0, ',', '.') . "</td>
                <td>{$b['jumlah']}</td>
                <td>Rp" . number_format($b['total'], 0, ',', '.') . "</td>
              </tr>";
        $no++;
    }

    echo "<tr>
            <th colspan='4'>Grand Total</th>
            <th>Rp" . number_format($grandTotal, 0, ',', '.') . "</th>
          </tr>";
    echo "</table>";
}
?>
</body>
</html>
