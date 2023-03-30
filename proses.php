<?php
$operasi = '+'; // contoh nilai variabel
$hasil = 0; // inisialisasi variabel hasil

switch ($operasi) {
    case '+':
        $hasil = $angka1 + $angka2; // melakukan operasi penjumlahan
        break;
    case '-':
        $hasil = $angka1 - $angka2; // melakukan operasi pengurangan
        break;
    case '*':
        $hasil = $angka1 * $angka2; // melakukan operasi perkalian
        break;
    case '/':
        $hasil = $angka1 / $angka2; // melakukan operasi pembagian
        break;
    default:
        echo "Operasi tidak valid"; // menampilkan pesan kesalahan jika pilihan tidak valid
        break;
    }

?>