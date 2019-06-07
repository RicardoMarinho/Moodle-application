<?php
// começar ou retomar uma sessão
session_start();

// se vier um pedido para login
if (!empty($_POST)) {

    // estabelecer ligação com a base de dados
    $conn = new PDO("mysql:dbname=nome;host=localhost", "root", "");
    if ($conn->connect_error) {
        echo "Erro: " . $conn->connect_error;
    }

    // receber o pedido de login com segurança
    $username = $_POST['utilizador'];
    $password = $_POST['password'];

    // verificar o utilizador em questão (pretendemos obter uma única linha de registos)
    $stmt = $conn->prepare("SELECT u.nome FROM t_utilizador JOIN t_login ON u.id=l.utilizador_fk WHERE username = :LOGIN AND password = :PASSWORD");
    $stmt->bindParam(":LOGIN", $username);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt ->execute();
    $rows=mysqli_num_rows($stmt);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($rows == 1) {
        // o utilizador está correctamente validado
        // guardamos as suas informações numa sessão
        foreach ($results as $value) {
            # code...
            $_SESSION['utilizador']=$value['nome'];
        }
       
        header("Location: dashboard.php");
    } else {

        // falhou o login
        echo "<p>Utilizador ou password invalidos. <a href=\"ex1.php\">Tente novamente</a></p>";
    }
}
