<?php
$id     =$_POST['id'];
$nim    =$_POST['nim'];
$nama   =$_POST['nama'];
$jk     =$_POST['jk'];
$hobi   =$_POST['hobi'];

// query SQL untuk update data
$query="UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis kelamin=$jk', hobi='$hobi'";
mysqli_query($koneksi, $query);

// Putri Maulidya Yasshiro 14117022
