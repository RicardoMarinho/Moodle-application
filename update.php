
        <?php
        include('config/init.php');
        if (isset($_SESSION['userID'])) {

          $id = $_GET['id'];
          $estado = $_GET['estado'];

          $stmt = $conn->prepare("UPDATE t_notificacoes SET estado = ? WHERE id = ?");
          $stmt->execute(array($estado, $id));

          header("Location: " . $_SERVER['HTTP_REFERER']);
        } else header("Location: index.php");
        ?>