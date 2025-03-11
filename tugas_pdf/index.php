<?php 
include "Mahasiswa.php"; 

$mahasiswaTI = new Mahasiswa(); 
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika'); 

$mahasiswaSI = new Mahasiswa(); 
$mahasiswaSI->setData('A11.2000.00001', 'Junior', 'Sistem Informasi'); 

$mahasiswaDKV = new Mahasiswa(); 
$mahasiswaDKV->setData('A14.2000.00001', 'Rizky', 'Desain Komunikasi Visual'); 

echo "<pre>";
print_r($mahasiswaTI->getData());
//echo "</pre>";
//echo "<pre>";
print_r($mahasiswaSI->getData());
//echo "</pre>";
//echo "<pre>";
print_r($mahasiswaDKV->getData());
echo "</pre>";