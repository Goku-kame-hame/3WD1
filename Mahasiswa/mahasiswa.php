<?php

class Mahasiswa {
    // Properties
    private $nim;
    private $nama;
    private $nilai;

    // Constructor
    public function __construct($nim, $nama, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    // Method untuk menentukan status kelulusan
    public function statusKelulusan() {
        if ($this->nilai < 70) {
            return "Gagal";
        } else {
            return "Lulus";
        }
    }

    // Method untuk menampilkan informasi mahasiswa
    public function Keterangan() {
        return "NIM saya adalah: $this->nim, Nama saya adalah: $this->nama, Nilai saya adalah: $this->nilai, Status kelulusan: " . $this->statusKelulusan();
    }
}

?>