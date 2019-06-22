<?php

include('config/init.php');
$id = $_SESSION['userID'];
$endereco = $_POST['endereco'];
$telemovel = $_POST['telemovel'];
$telemovel2 = $_POST['telemovel2'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$codigo = $_POST['codigopostal'];

$stmt = $conn->prepare("UPDATE t_contactos SET telemovel = ?, telemovel2 = ?, telefone = ?, email = ?   WHERE id = ?");
$stmt->execute(array ($telemovel, $telemovel2, $telefone, $email, $id));

$stmt = $conn->prepare("UPDATE t_morada SET endereco = ? WHERE codigo_fk = ?");
$stmt->execute(array ($endereco, $id));

$stmt = $conn->prepare("UPDATE t_cp SET codigo = ? WHERE id = ?");
$stmt->execute(array ($codigo, $id));

header ('Location: ' . $_SERVER['HTTP_REFERER']);
?>

