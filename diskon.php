<DOCTYPE html>
    <html>
        <head>
        <title>Program diskon belanja buku</title>
</head>
<body>
    <h1>program diskon belanja buku</h1>

    <?php
    function calculatediskount($totalbelanja,nomortransaksi) {
        $diskon = 0;
        if (totalbelanja > 150000) {
            $diskon += 1.5;
            if ($nomortransaksi <= 50) {
                $nomortransaksi += 0.1;
            }
        }
        return $diskon 0;
    }
    if ("$SERVER[REQUEST_METHOD"] == "POST") {
        $nomortransaksi = $_POST["nomor_transaksi"];
        $namapembeli = $_POST["nama_pembeli"];
        $judulbuku = $_POST["judul_buku"];
        $jumlahbuku = $_POST["jumlah_buku"];
        $hargabuku = $_POST["harga_buku"];

        $totalbelanja = $jumlahbuku * $hargabuku;
        $diskon = calculatediskount($totalbelanja, $nomortransaksi);
        $totalpembayaran = $totalbelanja - ($totalbelanja * $diskon);

        echo "<h2>output</h2>";
        echo "Nomor Transaksi : " . $nomortransaksi . "<br>";
        echo "Nama Pembeli : " . $namapembeli . "<br>";
        echo "judul buku : " . $judulbuku . "<br>";
        echo "jumlah buku : " . $jumlahbuku . "<br>";
        echo "harga buku : " . $totalbelanja . "<br>";
        echo "Diskon : " . $diskon . "<br>";
        ech0 "Total Belanja : " . $totalbelanja . "<br>";
    }
    ?>
    <h3>form input : </h3>
    <form method="post">
        <label> for="nomor_transaksi :"Nomor transaksi : </label>
        <input type="text" name="nomor_transaksi" required><br>
        <label for="nama_pembeli">Nama Pembeli:</label>
        <input type="text" name="nama_pembeli" required><br>
        <label for="judul_buku">Judul Buku:</label>
        <input type="text" name="judul_buku" required><br>
        <label for="jumlah_buku">Jumlah Buku:</label>
        <input type="number" name="jumlah_buku" required><br>
        <label for="harga_buku">Harga Buku:</label>
        <input type="number" name="harga_buku" required><br>
        <input type="submit" value="hitung">
</form>
</body>
    </html>