<?php
include('config/init.php');
// receber o pedido de login com segurança
$username = $_POST['utilizador'];
$password = $_POST['password'];
// verificar o utilizador em questão (pretendemos obter uma única linha de registos)
$stmt = $conn->prepare("SELECT u.nome, l.id FROM t_utilizador as u JOIN 
    t_login as l ON u.id=l.utilizador_fk WHERE l.username=? AND l.password=?");
$stmt->execute(array($username, md5($password)));
$row = $stmt->fetch(PDO::FETCH_BOTH);
if ($row) {
    $_SESSION['utilizador'] = $row['nome'];
    $_SESSION['userID'] = $row['id'];
    
    header('Location:dashboard.php');
} else {
    $_SESSION['message'] = "Login";
    header("Location: ". $_SERVER['HTTP_REFERER']);
}
