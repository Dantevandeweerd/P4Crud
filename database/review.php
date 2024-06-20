<?php

include ('../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $onderwerp = $_POST['onderwerp'];
    $bericht = $_POST['bericht'];

    $stmt = $conn->prepare("SELECT user_id FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        $user_id = $user['user_id'];
    } 

    $sql ="INSERT INTO reviews(user_id, onderwerp, bericht) VALUES (:user_id, :onderwerp, :bericht)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':onderwerp', $onderwerp);
    $stmt->bindParam(':bericht', $bericht);
    $stmt->execute();

}

