<?php
session_start();
include ('../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $bevestig = $_POST['bevestig-wachtwoord'];

    if (!empty($email) && !empty($wachtwoord) && !empty($bevestig) && $wachtwoord === $bevestig) {
        // Kijkt of de email al bestaat
        $sql = "SELECT COUNT(*) FROM users WHERE Email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        header("Location: ../mijnd&aregister.php");
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            // Email bestaat al
            $_SESSION['error'] = "Dit e-mailadres is al geregistreerd.";
        } else {
            // Nieuwe user wordt toegevoegd
            $sql = "INSERT INTO users (Email, Wachtwoord) VALUES (:email, :wachtwoord)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':wachtwoord', $wachtwoord);
            header("Location: ../mijnd&aregister.php");
            $stmt->execute();

        }
    } else {
        $_SESSION['error'] = "Wachtwoord validatie mislukt of wachtwoord en bevestiging komen niet overeen.";
    }
}
