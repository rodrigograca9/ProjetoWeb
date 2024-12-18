<?php
require('includes/connections.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    $stmt = $dbh->prepare("SELECT * FROM newsletter WHERE email = :email");
    $stmt->execute([':email' => $email]);

    if ($stmt->rowCount() == 0) {
        $stmt = $dbh->prepare("INSERT INTO newsletter (email) VALUES (:email)");
        $stmt->execute([':email' => $email]);
        echo "Obrigado por subscrever a newsletter!";
    } else {
        echo "Este email já está subscrito.";
    }
    exit;
}
?>