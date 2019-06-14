<?php
session_start();
if (isset($_SESSION['utilizador'])) {
  ?>
  <!DOCTYPE HTML>
  <html>

  <head>
    <meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ricardo Braz e Pedro Gomes" />
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico" />
    <script src="assets/js/funcoes.js"></script>
    <!--<link rel="stylesheet" href="assets\css\style.css" /> -->
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>O meu Perfil</title>
  </head>

  <style>
    /*dashboar formulario de dados*/

    .navbarform {
      top: 5px;
      position: relative;
      max-width: 100%;
      margin: 0 auto 15px;
      border-top-left-radius: 3px;
      border-top-right-radius: 3px;
      border-bottom-left-radius: 3px;
      border-bottom-right-radius: 3px;
      overflow: hidden;
      background-color: #83A3DB;
    }

    .navbarform a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 12px 25px;
      width: 33.3%;
      text-decoration: none;
      font-size: 20px;
    }

    .navbarform a:hover {
      background: #ddd;
      color: black;
    }

    .boxform,
    select {
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
  </style>

  <body>

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
      <div class="w3-bar-padd">
        <a href="dashboard.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-tachometer fa-fw" aria-hidden="true"></i>Painel de utilizador</a>
        <a href="dashboardDadosPessoais.php" class="w3-bar-item w3-button w3-bar-border w3-bar-active"><i class="icon fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Os meus dados</a>
        <a href="noticias.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-newspaper-o fa-fw" aria-hidden="true"></i>Noticias</a>
        <a href="calendario.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-calendar fa-fw" aria-hidden="true"></i>Calendário</a>
        <a href="dashboardtimeline.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-area-chart fa-fw" aria-hidden="true"></i>Cronograma do curso</a>
        <a href="dashboardnotificacoes.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-bell-o fa-fw" aria-hidden="true"></i>Notificações</a>
        <a href="ficheiros.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-folder-o fa-fw" aria-hidden="true"></i>Os meus ficheiros</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fas fa-lock fa-fw" aria-hidden="true"></i>Sair</a>
      </div>
    </div>
    <div id="page">
      <header id="page-header" class="row">
        <div class="col-12 pt-3 pb-3"></div>
      </header>
      <div class="fixed-top navbar navbar-expand">
        <div data-region="drawer-toggle" class="d-inline-block mr-3">
          <button id="openNav" onclick="w3_open()" aria-expanded="true" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
            <i class="icon fa fa-bars fa-fw " aria-hidden="true"></i><span class="sr-only">Side panel</span></button>
        </div>
        <a href="#" class="navbar-brand d-sm-inline atitle"><span class="site-name d-none d-md-inline">Moodle
            ISTEC</span></a>
        <div class="navbar-nav d-md-flex">
          <a class="dropdown-toggle nav-link link-vis" data-toggle="dropdown" href="#"><b>Português - Portugal
              (pt)</b></a>
          <ul class="dropdown-menu show">
            <li><a href="#" class="dropdown-item"><i class="sl-flag flag-pt"></i><span class="active">Português</span></a>
            </li>
            <li><a href="#" class="dropdown-item"><i class="sl-flag flag-usa"></i><span>English</span></a></li>
          </ul>
        </div>
        <ul class="nav navbar-nav ml-auto align-items-center">
          <div class="d-none d-lg-block">
            <div class="search-input-wrapper nav-link ">
              <form action="#" class="search-input-form">
                <input type="text" placeholder="Pesquisar.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
          <li class="d-flex align-items-center username"><span><strong>Ricardo Braz</strong></span></li>
          <li class="d-flex align-items-center"><span class="avatar current"><img src="images/perfilricardo.png" class="userpicture" width="50" height="50" role="presentation" aria-hidden="true"></span></li>
        </ul>
      </div>
      <div id="region-main-box" class="col-12">
        <section id="region-maindados" class="has-blocks mb-3 ml-dados">
          <section class="block block_myoverview  card mb-3">
            <div class="card-body p-3">
              <form class="navbarform">
                <a onclick="mostraDados()" class="w3-bar-item w3-button"><i class="fas fa-address-book" aria-hidden="true"></i> Os meus dados </a>
                <a onclick="mostraEmail()" class="w3-bar-item w3-button"><i class="fas fa-at" aria-hidden="true"></i>
                  Dados Login </a>
                <a onclick="mostraInteresses()" class="w3-bar-item w3-button"><i class="fas fa-heartbeat" aria-hidden="true"></i> Interesses </a>
              </form>
              <img class="minhafoto" src="images/perfil/perfilricardo.png" height="150" width="130" alt="Image preview...">
              <form class="md-form" action="upload.php">
                <div class="file-field">
                  <div class="btn btn-primary btn-sm float-left">
                    <span>Choose file</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your file">
                  </div>
                </div>
              </form>

              <?php
              include('db_connect.php');
              $stmt = $conn->prepare("SELECT u.nome, u.dtNasc, m.endereco, c.codigo FROM
                t_utilizador as u JOIN t_morada as m ON u.morada_fk=m.id JOIN t_cp as c ON c.id=m.codigo_fk
                WHERE u.id=?");
              $stmt->execute(array($_SESSION['userID']));
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
              foreach ($results as $row) ?>
              <form class="dadosform" id="meusDados" style="display:block;" method="post" enctype="multipart/form-data">
                <label for="fname">Nome</label><br>
                <input type="textform" value="<?php echo $row['nome']; ?>" id="nome" class="boxform large" style="background-color: #EFF2FB" name="firstname" placeholder="Meu nome..."><br>

                <label for="lname">Data de Nascimento</label><br>
                <input type="date" value="<?php echo $row['dtNasc']; ?>" class="boxform" id="dataNasc" style="width:200px; background-color: #EFF2FB" name="dataNascimento" placeholder="dd/mm/aaaa" value="<? php ?>"><br>

                <label for="lname">Morada</label><br>
                <input type="textform" value="<?php echo $row['endereco']; ?>" id="endereco" class="boxform large" style="background-color: #EFF2FB" name="lastname" placeholder="Morada..."><br>

                <label for="lname">Codigo Postal</label><br>
                <input type="textform" value="<?php echo $row['codigo']; ?>" class="boxform" id="endereco" style="background-color: #EFF2FB" name="lastname" placeholder="Código Postal..." required pattern="\d{4}-\d{3}">
              </form>
              <?

              ?>
              <form action="/action_page.php" class="dadosform" id="useremail" style="display:none;">
                <label for="fname">Username</label><br>
                <input type="textform" class="boxform" id="user" style="width:300px; background-color: #EFF2FB" name="username" placeholder="Username.."><br><br>

                <label for="fname">Palavra Passe</label><br>
                <input type="password" class="boxform" id="user" style="width:300px; background-color: #EFF2FB" name="username" placeholder="Password.."><br><br>

                <label for="fname">Endereço Electónico</label><br>
                <input type="email" class="boxform" id="user" style="width:500px; background-color: #EFF2FB" name="Emailadress" placeholder="Email.."><br><br>

                <input type="submit">

              </form>

              <form class="dadosform" class="boxform" id="meusinteresses" style="display:none;">
                <label for="fname">A definir</label><br>
                <input type="textform" class="boxform" id="user" style="width:250px; background-color: #EFF2FB" name="Adefenir" placeholder="A definir.."> <br>
              </form>
            </div>
          </section>

        </section>
      </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/00df0b3ac0.js"></script>
  </body>

  </html>
<?php
} else header("Location: index.php");
?>