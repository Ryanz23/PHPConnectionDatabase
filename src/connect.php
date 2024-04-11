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

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['date']) && isset($_POST['prodi']) && isset($_POST['nim'])) {
      $name = $_POST['name'];
      $date_of_birth = $_POST['date'];
      $prodi = $_POST['prodi'];
      $nim = $_POST['nim'];

      // format date
      $date = new DateTimeImmutable($date_of_birth);
      $date_formated = $date->format("Y-m-d");

      $sql = "INSERT INTO akademik (name, date_of_birth, prodi, nim) VALUES (?, ?, ?, ?)";

      $pdo_statement = $conn->prepare($sql);
      // mengeksekusi sql prepare statement
      $pdo_statement->execute([$name, $date_formated, $prodi, $nim]);

      header("Location: /");
    }
  }
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// tutup koneksi
$conn = null;
