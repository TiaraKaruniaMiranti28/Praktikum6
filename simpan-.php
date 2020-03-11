<?php
include("koneksi-.php");
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];
$sql = "INSERT INTO buku_tamu(nama, email, isi)
		VALUES ('$nama','$email','$isi')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location: bukutamu-.php');
?>