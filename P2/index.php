<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tugas Pemrograman Web Lanjut</title>
</head>
<body>

<?php
// 1. ARRAY NEGARA ASIA
$negaraAsia = [
    "Indonesia" => "Jakarta",
    "India" => "New Delhi",
    "Jepang" => "Tokyo",
    "Cina" => "Beijing",
    "Malaysia" => "Kuala Lumpur",
    "Filipina" => "Manila",
    "KoreaUtara" => "Pyongyang",
    "KoreaSelatan" => "Seoul",
    "Iran" => "Teheran",
    "Irak" => "Baghdad",
    "Vietnam" => "Hanoi",
    "Thailand" => "Bangkok"
];
?>

<h2>1. Negara dan Ibukotanya</h2>
<?php
$no = 1;
foreach ($negaraAsia as $negara => $ibukota) {
    echo $no . ". " . $negara . " ibukotanya " . $ibukota . "<br>";
    $no++;
}
?>

<hr>

<?php
// 2. ARRAY SUHU UDARA
$suhuUdara = [29,35,38,31,34,36,39,33,34,40,35,32,37,34,31,36,33,39,30,33,41];

// a. Rata-rata suhu
$rataRata = array_sum($suhuUdara) / count($suhuUdara);

// b. 5 suhu paling rendah
sort($suhuUdara);
$terendah = array_slice($suhuUdara, 0, 5);

// c. 5 suhu paling tinggi
rsort($suhuUdara);
$tertinggi = array_slice($suhuUdara, 0, 5);
?>

<h2>2. Data Suhu Udara</h2>
<?php
echo "Rata-rata suhu adalah " . round($rataRata, 2) . "<br>";
echo "5 suhu paling rendah adalah " . implode(", ", $terendah) . "<br>";
echo "5 suhu paling tinggi adalah " . implode(", ", $tertinggi) . "<br>";
?>

<hr>

<?php
// 3. KONVERSI MATA UANG KE RUPIAH
$rate = [
    'usd' => 14367,
    'jpy' => 1192,
    'cny' => 2262,
    'krw' => 11.87,
    'myr' => 3416,
    'sgd' => 10621,
    'gbp' => 19074,
    'eur' => 15891
];

function konversiRupiah($jumlah, $mataUang, $rate) {
    if (isset($rate[$mataUang])) {
        $hasil = $jumlah * $rate[$mataUang];
        return number_format($hasil, 0, ',', '.');
    } else {
        return "Mata uang tidak ditemukan";
    }
}
?>

<h2>3. Konversi Mata Uang ke Rupiah</h2>
<?php
echo "8 usd dikonversi menjadi Rp " . konversiRupiah(8, 'usd', $rate) . "<br>";
echo "7 jpy dikonversi menjadi Rp " . konversiRupiah(7, 'jpy', $rate) . "<br>";
echo "5 cny dikonversi menjadi Rp " . konversiRupiah(5, 'cny', $rate) . "<br>";
echo "1000 krw dikonversi menjadi Rp " . konversiRupiah(1000, 'krw', $rate) . "<br>";
echo "3 eur dikonversi menjadi Rp " . konversiRupiah(3, 'eur', $rate) . "<br>";
?>

</body>
</html>
