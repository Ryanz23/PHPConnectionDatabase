<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";
$port = 3306;

try {
  $conn = new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO `akademik` (`name`, `prodi`, `nim`) VALUES ('Mizz', 'TI', '123')";
  // untuk mengeksekusi query
  $result = $conn->exec($sql);

  if ($result) {
    echo "New record created successfully";
  } else {
    echo "failed insert to db";
  }
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// tutup koneksi
$conn = null;
