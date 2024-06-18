<?php
include ('../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $onderwerp = $_POST['onderwerp'];
    $bericht = $_POST['bericht'];

    $sql = "INSERT INTO reviews (Email, onderwerp, bericht) VALUES (:email, :onderwerp, :bericht)";
    
}