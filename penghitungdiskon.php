<?php
function hitungDiskon($jumlahBayar) {
    // Menentukan besar diskon berdasarkan jumlah bayar
    if ($jumlahBayar >= 500000) {
        $diskon = 50;
    } elseif ($jumlahBayar >= 100000) {
        $diskon = 10;
    } elseif ($jumlahBayar >= 50000) {
        $diskon = 5;
    } else {
        $diskon = 0;
    }
    
    // Menghitung total diskon dan total bayar setelah diskon
    $jumlahDiskon = $jumlahBayar * ($diskon / 100);
    $totalBayar = $jumlahBayar - $jumlahDiskon;
    
    // Menampilkan hasil
    echo "Jumlah bayar: Rp " . number_format($jumlahBayar, 0, ',', '.') . "<br>";
    echo "Diskon: " . $diskon . "%<br>";
    echo "Total diskon: Rp " . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
    echo "Total bayar setelah diskon: Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";
}
// Input jumlah bayar dari pengguna
if (isset($_POST['jumlah_bayar'])) {
    $jumlahBayar = floatval($_POST['jumlah_bayar']);
    hitungDiskon($jumlahBayar);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Diskon</title>
</head>
<body>
    <form method="post">
        <label for="jumlah_bayar">Masukkan jumlah bayar (Rp):</label>
        <input type="number" name="jumlah_bayar" id="jumlah_bayar" required>
        <button type="submit">Hitung Diskon</button>
    </form>
</body>
</html>