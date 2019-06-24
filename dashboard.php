<?php
session_start();
if (isset($_SESSION['utilizador'])) {
      include ('templates/headdash.html');
      include ('templates/sidebar.html');
      include ('templates/navbar.php');
      include ('templates/disciplinas.html');
      include ('templates/scripts.html');
} else header("Location: index.php");
?>