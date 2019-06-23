<?php
include('config/init.php');
$id = $_SESSION['userID'];
$pwda = md5($_POST['pwdatual']);
$pwd1 = $_POST['pwdnova'];
$pwd2 = $_POST['pwdnova2'];

  if ( $pwd1 <> $pwd2 ){
      $_SESSION['error_message'] = "Erro na atualização da Palavra Passe!";
      header ('Location: dashboardDadosPessoais.php');
  }
  else{
  $stmt = $conn->prepare("UPDATE t_login SET password = ? WHERE utilizador_fk=?");
  $result = $stmt->execute(array(md5($pwd1), $id));
  if ($result !== false) {
      $_SESSION['message'] = "Palavra Passe atualizada com sucesso!";
      header ('Location: index.php');
    } else {
      $_SESSION['error_message'] = "Erro na atualização da Palavra Passe!";
      header ('Location: dashboardDadosPessoais.php');
    }
  }

?>


