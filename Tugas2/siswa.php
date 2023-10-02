<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Ambil data dari form
    $nama = $_POST["nama"];
    $matpel = $_POST["matpel"];
    $nilai = $_POST["nilai"];


    // Hitung grade
    if ($nilai >= 90) {
        $grade = "A";
    }elseif ($nilai >= 80) {
        $grade = "B";
    }elseif ($nilai >= 70) {
        $grade = "C";
    }elseif ($nilai >= 60) {
        $grade = "D";
    }else {
        $grade = "E";
    }

    // Hitung predikat berdasarkan grade
    switch ($grade) {
        case "A":
            $predikat = "Sangat Baik";
            break;
        case "B":
            $predikat = "Baik";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "E":
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "Tidak Valid";
    }

    // Keterangan Lulus
    $keterangan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

    // Tampilkan hasil
    echo "<h2>Hasil Inputan:</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Mata Pelajaran: $matpel</p>";
    echo "<p>Nilai: $nilai</p>";
    echo "<p>Keterangan: $keterangan</p>";
    echo "<p>Grade: $grade</p>";
    echo "<p>Predikat: $predikat</p>";

    // Kembali kehalaman sebelumnya
    echo '<a href="index.php"><button>Kembali ke Form Sebelumnya</button></a>';
} 
else 
{
    echo "Akses di tolak";
}

?>