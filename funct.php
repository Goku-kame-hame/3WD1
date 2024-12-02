<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
    function angka(float $first, float $last){
        $total = $first + $last;
        echo "The sum of $first and $last is $total <br>";
    }

    angka("100", "100");
    angka(4, 4);
    angka(true, false);
    angka(1.5, 2.5);
    
    function say(){
        echo "hello selamat datang<br>";
    }
    say();


    function sapa($nama, $gender) {
        if ($gender == "laki-laki") {
            $sapa = "Hi bro";
        } else if ($gender == "perempuan") {
            $sapa = "Hi sis";
        } 
    
        // Mencetak pesan sapaan dan informasi nama serta gender
        echo $sapa . ", nama saya adalah " . $nama . ", dan saya adalah " . $gender . ".<br>";
    }
    
    // Contoh penggunaan
    sapa("fathon", "laki-laki");
    sapa("salwa", "perempuan");


    function genap($bilangan) {
        if ($bilangan %2== 0) {
            return "bilangan ini genap <br>";
        } else {
            return "bilangan ini ganjil<br>";
        }
        
    }
    
    // Contoh penggunaan
    echo genap(8);
    
    echo genap( 7);  


?>
</body>

</html>