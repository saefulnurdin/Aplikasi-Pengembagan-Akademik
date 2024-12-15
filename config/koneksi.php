<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaran";

// Konekso Database
$conn = mysqli_connect($server, $user, $password, $nama_database) or die(mysqli_error($conn));

