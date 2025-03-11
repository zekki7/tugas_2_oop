<?php
include "Mahasiswa.php";
include "MahasiswaTransfer.php";
include "Matakuliah.php";

$matkul_1 = new Matakuliah();
$matkul_2 = new Matakuliah();

$daftar_nilai = [
    "1"=> ["sks" => 2, "nilai" => "A"],
    "2"=> ["sks" => 3, "nilai" => "B"],
    "3"=> ["sks" => 2, "nilai" => "C"],
];

$mahasiswa_1 = new MahasiswaTransfer($daftar_nilai);

$matkul_1->setData("A11.12345", "Pemrograman Berbasis Web");
$matkul_2->setData("A11.12346", "Pemrograman Web Lanjut");

$mahasiswa_1->setData("A11.2023.14989", "Zekki Maulana", [$matkul_1, $matkul_2], "2004-04-14");

echo "<pre>";
print_r($mahasiswa_1->getData());
echo "</pre>";