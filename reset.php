<?php
include('config/init.php');

$email = $_POST['email'];
$stmt = $conn->prepare("SELECT u.id FROM t_utilizador as u JOIN 
t_contactos as c ON u.contacto_fk=c.id WHERE c.email = ?");
$stmt->execute(array($email));
$row = $stmt->fetch(PDO::FETCH_BOTH);
if ($row) {
    $_SESSION['userID'] = $row['id'];
    header('Location:temp_newpass.php');
} else {
    $_SESSION['message'] = "Email";
    header("Location: ". $_SERVER['HTTP_REFERER']);
}
?>