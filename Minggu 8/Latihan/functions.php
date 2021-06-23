<?php


//menyambungkan file ini ke database

$sambung_ke_db = mysqli_connect("localhost", "root", "", "praktikum_minggu_8");


//menampilkan apakah ada error
//berarti nilai $simpanData adalah 'false'
//jika tidak ada, tidak akan menampilkan apapun
if (!$simpanData) {
    echo mysqli_error($sambung_ke_db);
}
