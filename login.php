<?php
// começar ou retomar uma sessão
session_start();

// se vier um pedido para login
if (!empty($_POST)) {

    // estabelecer ligação com a base de dados
    $dsn = 'mysql:dbname=moodle;host=127.0.0.1';
    $user = 'root';
    $password = '';

    try {
        $conn = new PDO($dsn, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    // receber o pedido de login com segurança
    $username = $_POST['utilizador'];
    $password = $_POST['password'];

    // verificar o utilizador em questão (pretendemos obter uma única linha de registos)
    $stmt = $conn->prepare("SELECT u.nome, l.id FROM t_utilizador as u JOIN 
    t_login as l ON u.id=l.utilizador_fk WHERE l.username=? AND l.password=?");
    $stmt->execute(array($username, $password));
    $row = $stmt->fetch(PDO::FETCH_BOTH);
    if ($row) {
        session_start();
        $_SESSION['utilizador'] = $row['nome'];
        $_SESSION['userID'] = $row['id'];
        header('Location:dashboard.php');
    } else {
        $message = "Username/Password is wrong";
    }
}
