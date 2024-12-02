<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Berat Badan Ideal</title>
    <!-- Memuat Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Kalkulator Berat Badan Ideal</h2>
        
        <!-- Form dengan Bootstrap -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="berat" class="form-label">Berat Badan (kg):</label>
                <input type="number" class="form-control" name="berat" id="berat" step="0.1" required>
            </div>

            <div class="mb-3">
                <label for="tinggi" class="form-label">Tinggi Badan (cm):</label>
                <input type="number" class="form-control" name="tinggi" id="tinggi" step="0.1" required>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Hitung</button>
            </div>
        </form>

        <!-- PHP Code untuk menghitung BMI -->
        <?php
        if (isset($_POST['submit'])) {
            $berat = $_POST['berat'];
            $tinggi = $_POST['tinggi'];
            
            // Mengubah tinggi dari cm ke meter
            $tinggi = $tinggi / 100;
            
            // Menghitung BMI
            $bmi = $berat / ($tinggi * $tinggi);
            
            // Menentukan status berat badan
            if ($bmi < 18.5) {
                $status = "Kurus";
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                $status = "Normal";
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                $status = "Berat Badan Berlebih";
            } else {
                $status = "Obesitas";
            }
            
            // Menampilkan hasil dalam card Bootstrap
            echo '<div class="card mt-4">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Hasil:</h5>';
            echo '<p class="card-text">BMI Anda adalah ' . number_format($bmi, 2) . '</p>';
            echo '<p class="card-text">Status berat badan: ' . $status . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- Memuat Bootstrap JS dan dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>