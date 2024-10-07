<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
            foreach ($murid as $key => $value){
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
        foreach ($murid as $key => $value){
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
    </div>


    
</body>
</html>