<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=d&a", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully";
} catch(PDOException $e) {
   // echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT Email, Wachtwoord FROM users");
$stmt->execute();

$result = $stmt->fetchALL();
