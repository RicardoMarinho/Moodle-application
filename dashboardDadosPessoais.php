<?php
session_start();
if (isset($_SESSION['utilizador'])) {
  include('templates/head.html');
  include('templates/sidebar.html');
  include('templates/navbar.php');
  ?>
  <!DOCTYPE HTML>
  <html>

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
   
   /* Texto entre painel */

    hr.style-four {
    padding: 0;
    border: none;
    border-top: medium double #333;
    color: #333;
    text-align: center;
    }
    hr.style-four:after {
    content: "Dados Alteráveis";
    display: inline-block;
    position: relative;
    top: -0.7em;
    font-size: 1.5em;
    padding: 0 0.25em;
    background: white;
    }

  </style>

  <body>

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
          <li class="d-flex align-items-center username"><span><strong><?php echo $_SESSION['utilizador']; ?></strong></span></li>
          <li class="d-flex align-items-center"><span class="avatar current"><img src="images/perfil/simbolologin.png" class="userpicture" width="50" height="50" role="presentation" aria-hidden="true"></span></li>
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
                <a onclick="mostraInteresses()" class="w3-bar-item w3-button"><i class="fas fa-heartbeat" aria-hidden="true"></i> Foto de Perfil </a>
              </form>
              <?php
              include('db_connect.php');
              $stmt = $conn->prepare("SELECT u.nome, u.dtNasc, m.endereco, cp.codigo, ct.telemovel, ct.telemovel2, ct.telefone, ct.email 
              FROM t_utilizador as u JOIN t_morada as m ON u.morada_fk=m.id JOIN t_cp as cp ON cp.id=m.codigo_fk JOIN t_contactos as ct ON ct.id=u.id WHERE u.id=?");
              $stmt->execute(array($_SESSION['userID']));
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
              foreach ($results as $row) ?>

                <form class="dadosform" id="meusDados" style="display:block;" method="post" enctype="multipart/form-data" action="updatedadospessoais.php"> 
                <br>
                <label for="fname">Nome</label><br>
                <input type="textform" value="<?php echo $row['nome']; ?>" id="nome" class="boxform large" name="firstname" placeholder="Meu nome..." readonly><br>               

                <label for="fname">Data de Nascimento</label><br>
                <input type="date" value="<?php echo $row['dtNasc']; ?>" class="boxform" id="dataNasc" style="width:200px; name="dataNascimento" placeholder="dd/mm/aaaa" value="<? php ?>" readonly><br>                
                <br>   
                <hr class="style-four">
                <br>   
                <label for="fname">Morada</label><br>
                <input type="textform" value="<?php echo $row['endereco']; ?>" id="endereco" class="boxform large" style="background-color: #EFF2FB" name="endereco" placeholder="Morada..." ><br>

                <label for="fname">Codigo Postal</label><br>
                <input type="textform" value="<?php echo $row['codigo']; ?>" class="boxform" id="endereco" style="width:200px; background-color: #EFF2FB" name="codigopostal" placeholder="Código Postal..." required pattern="\d{4}-\d{3}"><br>
                <table style="width:100%">
                <tr>
                <td>
                <label for="fname">Telemóvel</label><br>
                <input type="tel" value="<?php echo $row['telemovel']; ?>" class="boxform" id="telemovel" style="width:200px; background-color: #EFF2FB" name="telemovel" placeholder="Telemóvel.." pattern="[0-9]{9}" required><br>
                </td>
                <td>
                <label for="fname">Telemóvel 2</label><br>
                <input type="tel" value="<?php echo $row['telemovel2']; ?>" pattern="[0-9]{9}" class="boxform" id="telemovel2" style="width:200px; background-color: #EFF2FB" name="telemovel2" placeholder="Telemóvel 2.."><br>
                </td>
                <td>
                <label for="fname">Telefone</label><br>
                <input type="tel" value="<?php echo $row['telefone']; ?>" pattern="[0-9]{9}" class="boxform" id="telefone" style="width:200px; background-color: #EFF2FB" name="telefone" placeholder="Telefone.."><br>
                </td>
                </table>
                <label for="fname">Endereço Electónico</label><br>
                <input type="email" value="<?php echo $row['email']; ?>" class="boxform" id="user" style="width:500px; background-color: #EFF2FB" name="email" placeholder="Email.."><br><br>

                <input type="submit" name="atualiza" value="Atualizar">          

              </form>


              <form class="dadosform" id="useremail" style="display:none;" method="post" enctype="multipart/form-data"  action="updatepalavra.php">
                <label for="fname">Palavra Passe atual</label><br>
                <input type="password" class="boxform" id="user" style="width:300px; background-color: #EFF2FB" name="pwdatual" placeholder="Palavra Passe Atual.."><br><br>

                <label for="fname">Nova Palavra Passe</label><br>
                <input type="password" class="boxform" id="user" style="width:300px; background-color: #EFF2FB" name="pwdnova" placeholder="Nova Password.."><br><br>

                <label for="fname">Verificação Palavra Passe</label><br>
                <input type="password" class="boxform" id="user" style="width:300px; background-color: #EFF2FB" name="pwdnova2" placeholder="ValidarPassword.."><br><br>
                
                <input type="submit" value="Atualizar palavra passe">
              </form>


              <form class="md-form" id="meusinteresses" action="upload.php" style="display:none;">
                <img class="minhafoto" src="images/perfil/perfilricardo.png" height="150" width="130" alt="Image preview...">
                <input type="file" onchange="seletorDeImagem()"><br><br>   
              </form>
          </section>

        </section>
      </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/mdbootstrap/js/mdb.min.css"></script>
    <script src="https://use.fontawesome.com/00df0b3ac0.js"></script>
  </body>

  </html>
<?php
} else header("Location: index.php");
?>