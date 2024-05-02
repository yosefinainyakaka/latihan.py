<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CV (CURICULUM VITAE)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.0;
        }
        h1, h2 {
            margin-bottom: 10px;
        }
        ul {
            list-style-type: none;
            padding: 0; 
        }
        ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
  <header>
    <img src="file.jpg" widht="250"  height="200">
    <div class="contact-information">
<?php
$cv_data = array(
    "nama" => "Yosefina Inya Kaka",
    "agama" => "kristen",
    "pendidikan terakhir" => "TAMAT SMK",
    "alamat" => "Jl. rembulan no.11",
    "email" => "yosefinainyakaka@gmail.com",
    "telepon" => "081234567890",
    "pendidikan" => array(
        array("institusi" => "DI KAMPUS INSTIKI ", "gelar" => "MAHASISWA", "tahun" => "2023-2024"),
        array("institusi" => "SMK ICEYA NDAHA", "gelar" => "ADIMINISTRASI PERKANTORAN", "tahun" => "2015-2018")
    ),
    "pengalaman_kerja" => array(
        array("posisi" => "STAFF BIASA ", "perusahaan" => "APOTIK", "tahun" => "2020-2024"),
    )
);

// Fungsi untuk menampilkan data pendidikan
function displayPendidikan($pendidikan) {
    echo "<h2>Pendidikan</h2>";
    echo "<ul>";
    foreach ($pendidikan as $edu) {
        echo "<li>" . $edu['gelar'] . " - " . $edu['institusi'] . " (" . $edu['tahun'] . ")</li>";
    }
    echo "</ul>";
}

// Fungsi untuk menampilkan data pengalaman kerja
function displayPengalamanKerja($pengalaman_kerja) {
    echo "<h2>Pengalaman Kerja</h2>";
    echo "<ul>";
    foreach ($pengalaman_kerja as $job) {
        echo "<li>" . $job['posisi'] . " di " . $job['perusahaan'] . " (" . $job['tahun'] . ")</li>";
    }
    echo "</ul>";
}

// Menampilkan data CV
echo "<h1>Curriculum Vitae</h1>";
echo "<p><strong>Nama:</strong> " . $cv_data['nama'] . "</p>";
echo "<p><strong>Agama:</strong> " . $cv_data['agama']  . "</p>";
echo "<p><strong>Pendidikan Terakhir:</strong> " . $cv_data['pendidikan terakhir'] . "</p>";
echo "<p><strong>Alamat:</strong> " . $cv_data['alamat'] . "</p>";
echo "<p><strong>Email:</strong> " . $cv_data['email'] . "</p>";
echo "<p><strong>Telepon:</strong> " . $cv_data['telepon'] . "</p>";
// Memanggil fungsi untuk menampilkan data pendidikan dan pengalaman kerja
displayPendidikan($cv_data['pendidikan']);
displayPengalamanKerja($cv_data['pengalaman_kerja']);
?>

</body>
</html>
