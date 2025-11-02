<?php
// Membuat konstanta DOSEN_PENGAMPU menggunakan define()
define("DOSEN_PENGAMPU", "Yohanes Setiawan Japriadi, M.Kom.");

/*
    Membuat konstanta MATAKULIAH menggunakan const.
    Konstanta ini menyimpan nama mata kuliah yang diajar oleh dosen pengampu.
*/
const MATAKULIAH = "Pemrograman Web Dasar";

// Menampilkan nama dosen pengampu
echo "Dosen_Pengampu: " . DOSEN_PENGAMPU . "<br>"; 

// Menampilkan nama mata kuliah
echo "Matakuliah: " . MATAKULIAH; 
?>