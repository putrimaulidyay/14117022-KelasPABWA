<?php
include 'koneksi.php';

// menyimpan data id ke dalam variabel
$id     =$_GET['id'];

//query SQL untuk menghapus data
$query="DELETE from mahasiswa where id='$id'";
mysqli_query($koneksi, $query);

// Putri Maulidya Yasshiro 14117022
