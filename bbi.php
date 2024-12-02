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
                <label for="berat" class="form-label">Tinggi Badan (cm):</label>
                <input type="number" class="form-control" name="tinggi" id="tinggi" step="0.1" required>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin:</label>
                <select class="form-select" name="gender" id="gender" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="pria">Laki-laki</option>
                    <option value="wanita">Perempuan</option>
                </select>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Hitung</button>
            </div>
        </form>
    

        <!-- PHP Code untuk menghitung berat badan ideal -->
        <?php
        if (isset($_POST['submit'])) {
            $tinggi = $_POST['tinggi'];
            $gender = $_POST['gender'];

            // Menghitung berat badan ideal berdasarkan gender
            if ($gender == "pria") {
                $ideal_weight = ($tinggi - 100) - (0.1 * ($tinggi - 100)); 
                $status = "Berat badan ideal untuk pria";
            } elseif ($gender == "wanita") {
                $ideal_weight = ($tinggi - 100) - (0.15 * ($tinggi - 100));
                $status = "Berat badan ideal untuk wanita";
            } else {
                $ideal_weight = "Tidak valid"; 
                $status = "Silakan pilih jenis kelamin.";
            }

            // Menampilkan hasil dalam card Bootstrap
            echo '<div class="card mt-4">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Hasil:</h5>';
            echo '<p class="card-text">' . $status . ': ' . number_format($ideal_weight, 2) . ' kg</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- Memuat Bootstrap JS dan dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>