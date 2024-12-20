<?php
session_start();
$receita = $_POST['receitaId'];
$mensagem = $_POST['mensagem'];
$email = $_POST['email'];
$aceito = !empty($_POST['aceito']) ? true : false;

if(!$aceito) $email = 'Anónimo';

require('includes/connections.php');

$sql = 'INSERT INTO comentarios SET email = :email, mensagem = :mensagem, receitaId = :receitaId';
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':mensagem', $mensagem);
$stmt->bindValue(':receitaId', $receita);
$stmt->execute();

if($stmt && $stmt->rowCount() == 1) $_SESSION['comentario=ok'];
  header('Location: receita.php?id=' .$receita);
die();
?>