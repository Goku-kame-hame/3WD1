<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>

    <style>
        .product-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 kolom */
            gap: 20px; /* Jarak antar card */
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
        }
        .product-img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<h1>1. Penjumlahan Deret Angka Ganjil</h1>
<?php

$numbers = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
$sum = array_sum($numbers);
echo "Hasil penjumlahan deret: " . $sum;
?>

<hr>

<h1>2. Bilangan Pangkat 2 Kurang dari 100</h1>
<?php

$number = 1;
while (pow(2, $number) < 100) {
    echo pow(2, $number) . " ";
    $number++;
}
?>

<hr>

<h1>3. Cetak Bilangan dari 1 - 100 dengan "buzz", "flash", "flash buzz"</h1>
<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "flash buzz<br>";
    } elseif ($i % 3 == 0) {
        echo "buzz<br>";
    } elseif ($i % 5 == 0) {
        echo "flash<br>";
    } else {
        echo $i . "<br>";
    }
}
?>

<hr>

<h1>4. Daftar Menu Cafe</h1>
<div class="product-container">
<?php

$products = [
    [
        'nama' => 'Kopi Latte',
        'deskripsi' => 'Kopi dengan susu dan sedikit foam di atasnya.',
        'harga' => 30000,
        'gambar' => 'latte.jpeg'
    ],
    [
        'nama' => 'Teh Hijau',
        'deskripsi' => 'Teh hijau segar dengan aroma alami.',
        'harga' => 20000,
        'gambar' => 'Tehijo.jpeg'
    ],
    [
        'nama' => 'Kue Coklat',
        'deskripsi' => 'Kue coklat lembut dengan lapisan coklat di atasnya.',
        'harga' => 25000,
        'gambar' => 'kuecoklat.jpeg'
    ],
    [
        'nama' => 'Soda Jeruk',
        'deskripsi' => 'Minuman soda dengan rasa jeruk yang segar.',
        'harga' => 15000,
        'gambar' => 'sodajeruk.jpeg'
    ],
    [
        'nama' => 'Smoothie Mangga',
        'deskripsi' => 'Smoothie segar dengan mangga pilihan.',
        'harga' => 35000,
        'gambar' => 'mangosmoothies.jpeg'
    ],
    [
        'nama' => 'Roti Bakar',
        'deskripsi' => 'Roti bakar Coklat Dengan Strawberry.',
        'harga' => 20000,
        'gambar' => 'rotibakar.jpeg'
    ],
];


foreach ($products as $product) {
    echo '<div class="card">';
    echo '<img src="' . $product['gambar'] . '" class="product-img" alt="Gambar Produk">';
    echo '<h2>' . $product['nama'] . '</h2>';
    echo '<p>' . $product['deskripsi'] . '</p>';
    echo '<p>Harga: Rp' . number_format($product['harga'], 0, ',', '.') . '</p>';
    echo '</div>';
}
?>
</div>

</body>
</html>