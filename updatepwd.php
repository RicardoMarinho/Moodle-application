<?php
include('config/init.php');
$pwd1 = $_POST['password1'];
$id = $_POST['userID'];

$stmt = $conn->prepare("UPDATE t_login SET password = ? WHERE utilizador_fk=?");
$result = $stmt->execute(array(md5($password), $id));
if ($result !== false) {
    $_SESSION['message'] = "Password atualizada com sucesso!";
    header ('Location: index.php');
  } else {
    $_SESSION['error_message'] = "Password update failed!";
    header ('Location: index.php');
  }
?>