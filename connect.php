<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "mahasiswa";

try {
  $conn = new PDO("mysql:host=localhost;dbname=mahasiswa", "username", "");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `akademik` (`id`, `NAME`, `DATE`, `PRODI`, `NIM`) VALUES (NULL, '', '', '', '')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>