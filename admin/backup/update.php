<?php 
// koneksi database
require 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_costumer = $_POST['id_costumer'];
$email_costumer = $_POST['email_costumer'];
 
// update data ke database
mysqli_query($koneksi,"update costumer set id_costumer='$id_costumer', 
email_costumer='$email_costumer' where id_costumer='$ic_costumer'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>