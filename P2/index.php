<?php
echo "<h2>1. User Defined Function</h2>";
function salam($nama) {
    echo "Halo, $nama! Selamat datang.<br>";
}
salam("Rusdi");

echo "<hr><h2>2. Pass-by-Value</h2>";
function tambahSatu($angka) {
    $angka++;
    echo "Di dalam fungsi: $angka<br>";
}
$nilai = 5;
tambahSatu($nilai);
echo "Di luar fungsi: $nilai<br>";

echo "<hr><h2>3. Pass-by-Reference</h2>";
function tambahSatuRef(&$angka) {
    $angka++;
    echo "Di dalam fungsi: $angka<br>";
}
$nilai = 5;
tambahSatuRef($nilai);
echo "Di luar fungsi: $nilai<br>";

echo "<hr><h2>4. String Function</h2>";
$kalimat = "Halo Dunia!";
echo "Kalimat asli: $kalimat<br>";
echo "Jumlah karakter: " . strlen($kalimat) . "<br>";
echo "Dibalik: " . strrev($kalimat) . "<br>";

echo "<hr><h2>5. Math Function</h2>";
echo "Nilai pi: " . pi() . "<br>";
echo "Akar kuadrat dari 25: " . sqrt(25) . "<br>";
echo "Pembulatan ke atas dari 4.2: " . ceil(4.2) . "<br>";

echo "<hr><h2>6. Date Function</h2>";
echo "Sekarang tanggal: " . date("Y-m-d") . "<br>";
echo "Jam: " . date("H:i:s") . "<br>";

echo "<hr><h2>7. Date from a String</h2>";
$tanggal = "2025-10-04";
$timestamp = strtotime($tanggal);
echo "Day: " . date("l, d F Y", $timestamp) . "<br>";

echo "<hr><h2>8. Indexed Array</h2>";
$buah = ["Apel", "Jeruk", "Mangga"];
echo "Isi array: ";
print_r($buah);
echo "<br>Elemen ke-2: " . $buah[1] . "<br>";

echo "<hr><h2>9. Associative Array</h2>";
$umur = ["Ana" => 21, "Budi" => 22, "Cici" => 20];
echo "Umur Ana: " . $umur["Ana"] . "<br>";
print_r($umur);

echo "<hr><h2>10. Two-Dimensional Array</h2>";
$nilai = [
    ["Ana", 90, 85],
    ["Budi", 80, 88],
    ["Cici", 95, 92]
];
echo $nilai[0][0] . " mendapat nilai " . $nilai[0][1] . "<br>";

echo "<hr><h2>11. Sorting Indexed Array</h2>";
$angka = [4, 2, 8, 1];
sort($angka);
echo "Setelah diurutkan: ";
print_r($angka);

echo "<hr><h2>12. Sorting Associative Array</h2>";
$umur = ["Ana" => 21, "Budi" => 19, "Cici" => 22];
asort($umur);
echo "Setelah diurutkan berdasarkan umur: ";
print_r($umur);
?>
