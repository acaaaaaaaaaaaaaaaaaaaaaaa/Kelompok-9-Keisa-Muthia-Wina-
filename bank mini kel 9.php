<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penyimpanan Uang Dan Tarik Tunai Secara Digital</title>
</head>
<body>
    <h2>Form Penyimpanan Uang Dan Tarik Tunai Secara Digital</h2>
    <form method="post" action="">
        <label for="tanggal">Tanggal:</label><br>
        <input type="date" name="tanggal" id="tanggal" required><br><br>

        <label>No.Rekening/Nasabah : </label><br>
        <input type="text" name="rekening" required><br><br>

        <label>Nama Pemilik Rekening/Penyetor:</label><br>
        <input type="text" name="pemilik" required><br><br>

        <label>Kelompok Nasabah:</label><br>
        <select name="nasabah" required>
            <option value="">Pilih</option>
            <option value="Siswa">Siswa</option>
            <option value="Guru">Guru</option>
            <option value="Umum">Umum</option>
        </select><br><br>

        <label>Jenis Penyetoran:</label><br>
        <select name="penyetoran" required>
            <option value="">Pilih</option>
            <option value="BANK MINI">BANK MINI</option>
            <option value="BPR-KU">BPR-KU</option>
        </select><br><br>

        <label>Jenis Transaksi:</label><br>
        <select name="transaksi" required>
            <option value="">Pilih</option>
            <option value="Penyetoran">Penyetoran</option>
            <option value="Penarikan">Penarikan</option>
        </select><br><br>

        <label>Keterangan:</label><br>
        <select name="keterangan" required>
            <option value="">Pilih</option>
            <option value="Tabungan">Tabungan</option>
        </select><br><br>

        <label>Jumlah Setor/Penarikan : </label><br>
        <input type="text" name="jumlah" required><br><br>

        <label>Penggunaan Dana: </label><br>
        <span>*Di isi bagi yang memilih opsi penarikan, jika anda memilih opsi penyetoran cukup isi "-"</span><br>
        <input type="text" name="penggunaan" required><br><br>

        <label>Teller:</label><br>
        <select name="teller" required>
            <option value="">Pilih</option>
            <option value="Teller 1">Teller 1</option>
            <option value="Teller 2">Teller 2</option>
            <option value="Teller 3">Teller 3</option>
        </select><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

<?php
function terbilang($angka) {
    $angka = abs($angka);
    $baca = ["", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas"];
    $hasil = "";

    if ($angka < 12) {
        $hasil = " " . $baca[$angka];
    } elseif ($angka < 20) {
        $hasil = terbilang($angka - 10) . " Belas";
    } elseif ($angka < 100) {
        $hasil = terbilang(floor($angka / 10)) . " Puluh" . terbilang($angka % 10);
    } elseif ($angka < 200) {
        $hasil = " Seratus" . terbilang($angka - 100);
    } elseif ($angka < 1000) {
        $hasil = terbilang(floor($angka / 100)) . " Ratus" . terbilang($angka % 100);
    } elseif ($angka < 2000) {
        $hasil = " Seribu" . terbilang($angka - 1000);
    } elseif ($angka < 1000000) {
        $hasil = terbilang(floor($angka / 1000)) . " Ribu" . terbilang($angka % 1000);
    } elseif ($angka < 1000000000) {
        $hasil = terbilang(floor($angka / 1000000)) . " Juta" . terbilang($angka % 1000000);
    }

    return $hasil;
}

if (isset($_POST['submit'])) {
    $tanggal = $_POST['tanggal'];
    $rekening = $_POST['rekening'];
    $pemilik = $_POST['pemilik'];
    $nasabah = $_POST['nasabah'];
    $penyetoran = $_POST['penyetoran'];
    $transaksi = $_POST['transaksi'];
    $keterangan = $_POST['keterangan'];
    $jumlah = preg_replace('/[^0-9]/', '', $_POST['jumlah']);
    $penggunaan = $_POST['penggunaan'];
    $teller = $_POST['teller'];

    $saldo_awal = 500000;

    if ($transaksi === "Penyetoran") {
        $saldo_akhir = $saldo_awal + $jumlah;
    } elseif ($transaksi === "Penarikan") {
        $saldo_akhir = $saldo_awal - $jumlah;
    } else {
        $saldo_akhir = $saldo_awal;
    }

    $terbilang_jumlah = terbilang($jumlah);
    $saldo_akhir_terbilang = terbilang($saldo_akhir);

    // Output tabel horizontal
    echo "<h3>Data Penyetor</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Tanggal</th>
            <th>No Rekening</th>
            <th>Nama Pemilik</th>
            <th>Kelompok Nasabah</th>
            <th>Jenis Penyetoran</th>
            <th>Jenis Transaksi</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Terbilang</th>
            <th>Penggunaan Dana</th>
            <th>Teller</th>
            <th>Saldo Awal</th>
            <th>Saldo Akhir</th>
          </tr>";

    echo "<tr>
            <td>" . htmlspecialchars($tanggal) . "</td>
            <td>$rekening</td>
            <td>$pemilik</td>
            <td>$nasabah</td>
            <td>$penyetoran</td>
            <td>$transaksi</td>
            <td>$keterangan</td>
            <td>Rp " . number_format($jumlah, 0, ',', '.') . "</td>
            <td>$terbilang_jumlah Rupiah</td>
            <td>$penggunaan</td>
            <td>$teller</td>
            <td>Rp " . number_format($saldo_awal, 0, ',', '.') . "</td>
            <td>Rp " . number_format($saldo_akhir, 0, ',', '.') . " <br> ($saldo_akhir_terbilang Rupiah)</td>
          </tr>";
    echo "</table>";
}
?>

</body>
</html>
