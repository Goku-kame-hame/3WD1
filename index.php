<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php
    $murid = [
        [
            "nim" => 1,
            "nama" => "Rayhan",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Tangerang"
        ],
        [
            "nim" => 2,
            "nama" => "Goku",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Cikarang"
        ],
        [
            "nim" => 3,
            "nama" => "Alip",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Bekasi"
        ],
        [
            "nim" => 4,
            "nama" => "Enjay",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Serang"
        ],
        [
            "nim" => 5,
            "nama" => "Fathon",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Karawang"
        ],
    ];
    ?>


    <table class="table table-bordered  ">
        <thead>
            <tr>
                <th scope="col">nim</th>
                <th scope="col">nama</th>
                <th scope="col">jenis kelamin</th>
                <th scope="col">kelas</th>
                <th scope="col">kota asal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($murid as $key => $value) {
                echo "<tr>
                    <th scope 'row'>" . $value['nim'] . "</th>
                    <td>" . $value['nama'] . "</td>
                    <td>" . $value['jenis kelamin'] . "</td>
                    <td>" . $value['kelas'] . "</td>
                    <td>" . $value['kota asal'] . "</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

    <div class="row ms-1">
        <?php
        foreach ($murid as $key => $value) {
            echo "
            <div class='col-2 mt-5 ms-5'>
                <div class='card' style='width: 18rem;'>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>nim : " . $value['nim'] . "</li>
                        <li class='list-group-item'>nama : " . $value['nama'] . "</li>
                        <li class='list-group-item'>jenis kelamin : " . $value['jenis kelamin'] . "</li>
                        <li class='list-group-item'>kelas : " . $value['kelas'] . "</li>
                        <li class='list-group-item'>kota asal : " . $value['kota asal'] . "</li>
                    </ul>
                </div>
            </div>
            ";
        }

        ?>

        <div class="container mt-5">
            <h1 class="text-center">ARITHMETIC OPERATION</h1>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="tinggi">Masukkan Tinggi Badan (cm):</label>
                    <input type="number" class="form-control" id="tinggi" name="tinggi" required>
                </div>
                <button type="submit" class="btn btn-primary">Hitung Berat Badan Ideal</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tinggi'])) {
                $tinggi = $_POST['tinggi'];
                $result = ($tinggi - 100) - (($tinggi - 100) * 0.1);
                echo "<div class='alert alert-info mt-3'>Berat badan idealnya: $result kg</div>";
            }
            ?>

            <form method="POST" action="">
                <h2 class="mt-5">Hitung Total Belanja</h2>
                <div class="form-group">
                    <label for="buah">Harga Buah (Rp):</label>
                    <input type="number" class="form-control" id="buah" name="buah" required>
                </div>
                <div class="form-group">
                    <label for="sayur">Harga Sayur (Rp):</label>
                    <input type="number" class="form-control" id="sayur" name="sayur" required>
                </div>
                <div class="form-group">
                    <label for="gula">Harga Gula (Rp):</label>
                    <input type="number" class="form-control" id="gula" name="gula" required>
                </div>
                <button type="submit" name="calculate" class="btn btn-primary">Hitung Total Setelah Diskon</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calculate'])) {
                $buah = $_POST['buah'];
                $sayur = $_POST['sayur'];
                $gula = $_POST['gula'];
                $diskon = 0.15;

                $jumlah = ($buah + $sayur + $gula) * $diskon;
                $akhir = ($buah + $sayur + $gula) - $jumlah;

                echo "<div class='alert alert-success mt-3'>Jumlah setelah diskon: Rp.$akhir</div>";
            }
            ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>