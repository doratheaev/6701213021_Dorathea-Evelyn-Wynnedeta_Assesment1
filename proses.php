<?php
if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operasi'])) {
  $angka1 = $_POST['angka1'];
  $angka2 = $_POST['angka2'];
  $operator = $_POST['operator'];
  
  if ($operator == '+') {
    $hasil = $angka1 + $angka2;
  } else if ($operator == '-') {
    $hasil = $angka1 - $angka2;
  } else if ($operator == '*') {
    $hasil = $angka1 * $angka2;
  } else if ($operator == '/') {
    $hasil = $angka1 / $angka2;
  } else {
    $hasil = "Operator tidak valid";
  }
  
  echo "Hasil operasi $angka1 $operator $angka2 = $hasil";
}
?>