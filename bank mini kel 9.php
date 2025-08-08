<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penyimpanan Uang Dan Tarik Tunai Secara Digital</title>
</head>
<body>
    <h2>Form Penyimpanan Uang Dan Tarik Tunai Secara Digital</h2>
    <form method="post" action="">
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required><br><br>
        <label>No.Rekening/Nasabah : </label><br>
        <input type="text" name="rekening" required><br><br>
        <label>Nama Pemilik Rekening/Penyetor:</label><br>
        <input type="text" name="pemilik" required><br><br>
        <label>Alamat Penyetor: </label><br>
        <input type="text" name="alamat" required><br><br>
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
            <option value="Lokal">Lokal</option>
            <option value="Antar Cabang">Antar Cabang</option>
        </select><br><br>
        <label>Keterangan:</label><br>
        <select name="keterangan" required>
            <option value="">Pilih</option>
            <option value="Tabungan">Tabungan</option>
            <option value="IPP">IPP</option>
            <option value="DSP">DSP</option>
            <option value="Pinjaman">Pinjaman</option>
        </select><br><br>
        <label>Jumlah Setor/Penarikan : </label><br>
        <input type="text" name="jumlah" required><br><br>
        <label>Terbilang : </label><br>
        <input type="text" name="terbilang" required><br><br>
        <label>Penggunaan Dana: </label><br>
        <span>*Di isi bagi yang memilih opsi penarikan, jika anda memilih opsi penyetoran cukup isi "-"</span><br>
        <input type="text" name="penggunaan" required><br><br>
        <label>Teller: </label><br>
        <input type="text" name="teller" required><br><br>
    <input type="submit" name="submit" value="Daftar">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $tanggal = $_POST['tanggal'];
        $rekening= $_POST['rekening'];
        $pemilik= $_POST['pemilik'];
        $alamat = $_POST['alamat'];
        $nasabah = $_POST['nasabah'];
        $penyetoran = $_POST['penyetoran'];
        $transaksi = $_POST['transaksi'];
        $keterangan = $_POST['keterangan'];
        $jumlah = $_POST['jumlah'];
        $terbilang = $_POST['terbilang'];
        $penggunaan = $_POST['penggunaan'];
        $teller = $_POST['teller'];

        echo "<h3>Data Penyetor:</h3>";
        echo "Tanggal yang dikirim: <strong>" . htmlspecialchars($tanggal) . "</strong><br>";
        echo "No Rekening/Nasabah: $rekening<br>";
        echo "Nama Pemilik Rekening/Penyetor: $pemilik<br>";
        echo "Alamat Penyetor: $alamat<br>";
        echo "Kelompok Nasabah: $nasabah<br>";
        echo "Jenis Penyetoran: $penyetoran<br>";
        echo "Jenis Transaksi: $transaksi<br>";
        echo "Keterangan : $keterangan<br>";
        echo "Jumlah Stor/Penarikan: $jumlah<br>";
        echo "Terbilang: $terbilang<br>";
        echo "Penggunaan Dana (Bagi Yang Memilih Opsi Penarikan): $penggunaan<br>";
        echo "Teller: $teller<br>";
    }
    ?>
    </body>
</html>