
        <?php
        include('config/init.php');
        if (isset($_SESSION['userID'])) {

          $id = $_GET['id'];

          $stmt = $conn->prepare("DELETE FROM t_notificacoes WHERE id = ?");
          $stmt->execute(array($id));

          $_SESSION['message'] = "Eliminado";
          header("Location: " . $_SERVER['HTTP_REFERER']);
        } else header("Location: index.php");
        ?>