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
  <link rel="shortcut icon" type="image/png" href="images/simbolologin.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="assets/js/funcoes.js"></script>
  <link rel="stylesheet" href="assets\css\style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title>Notícias</title>
</head>

<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <div class="w3-bar-padd">
      <a href="dashboard.php" class="w3-bar-item w3-button w3-bar-border"><i
          class="icon fa fa-tachometer fa-fw" aria-hidden="true"></i>Painel de utilizador</a>
      <a href="dashboardDadosPessoais.html" class="w3-bar-item w3-button w3-bar-border"><i
          class="icon fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Os meus dados</a>
      <a href="noticias.php" class="w3-bar-item w3-button w3-bar-border  w3-bar-active"><i class="icon fa fa-newspaper-o fa-fw"
          aria-hidden="true"></i>Noticias</a>
      <a href="calendario.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-calendar fa-fw"
          aria-hidden="true"></i>Calendário</a>
      <a href="dashboardtimeline.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-area-chart fa-fw"
          aria-hidden="true"></i>Cronograma do curso</a>
      <a href="dashboardnotificacoes.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-bell-o fa-fw"
          aria-hidden="true"></i>Notificações</a>
      <a href="ficheiros.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-folder-o fa-fw"
          aria-hidden="true"></i>Os meus ficheiros</a>
      <a href="index.html" class="w3-bar-item w3-button w3-bar-border"><i class="icon fas fa-lock fa-fw"
          aria-hidden="true"></i>Sair</a>
    </div>
  </div>
  <div id="page">
    <header id="page-header" class="row">
      <div class="col-12 pt-3 pb-3"></div>
    </header>
    <div class="fixed-top navbar navbar-expand">
      <div data-region="drawer-toggle" class="d-inline-block mr-3">
        <button id="openNav" onclick="w3_open()" aria-expanded="true" aria-controls="nav-drawer" type="button"
          class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left"
          data-preference="drawer-open-nav">
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
      <section id="region-main" class="has-blocks mb-3 ml-3">
        <aside id="block-region-content" class="block-region" data-blockregion="content" data-droptarget="1">
          <section class=" block block_myoverview  card mb-3">
            <div class="card-body p-3">
              <h5 class="card-title d-inline">Notícias</h5>
              <div class="card-text content mt-3">
                <div class="block-myoverview block-cards">
                  <article>
                    <h2 style="color:black"> Entrega de trabalhos de Web e Multimédia II/Tecnologias da Internet II
                    </h2>
                    <p class="notInf">
                      <time>16-04-2019 - </time>
                      <a href="#" title="Ver todos os artigos de Web e Multimédia II/Tecnologias da Internet II"
                        style="color:blue">WEB MULT II E TEC INT II</a>
                    </p>
                    <p>Foram hoje publicadas as regras para o <a target="_blank"
                        href="docs/EnunciadoTrabalhoFinal.pdf">trabalho final</a> da disciplina de Web e Multimédia
                      II/Tecnologias da Internet II, Website dinâmico (PHP+JavaScript+MySQL). O prazo final de entrega
                      do trabalho está marcado para dia 14 de junho.
                    </p>
                    <p>Não esquecer que dia 26 de abril é a data fixada para entrega do trabalho HTML e 17 de maio o
                      trabalho 2, Base de Dados Relacional.</p>
                    <img src="images/ti.jpg" alt="imagem istec" class="center">
                  </article>
                </div>
              </div>
              <div class="card-text content mt-4">
                <div class="block-myoverview block-cards">
                  <article>
                    <h2 style="color:black">Está marcada a data para o Mini teste de Redes e Internet II / Redes e
                      Comunicações II</h2>
                    <p class="notInf">
                      <time>20-03-2019 - </time>
                      <a href="#" title="Ver todos os artigos de Redes e Internet II / Redes e Comunicações II"
                        style="color:blue">REDES INT II E REDES COM II</a>
                    </p>
                    <p>Foi agendado para dia 23 de maio a realização do mini teste para as disciplinas de Redes e
                      Internet II / Redes e Comunicações II. Este mini teste, faz parte da avaliação curricular da
                      disciplina.</p>
                    <p>De referir que, <a target="_blank" href="docs/Redes41007 RC II_1819.pdf">programa e as
                        regras,</a> definem o dia 29 de abril para avaliação intermédia do trabalho de grupo.</p>
                    <p>A avaliação curricular tem uma ponderação de até 7 valores, divididos pelas fichas, trabalho de
                      grupo e mini teste.</p>
                    <img src="images/redes.jpg" alt="imagem istec" class="center">
                  </article>
                </div>
              </div>
              <div class="card-text content mt-4">
                <div class="block-myoverview block-cards">
                  <article>
                    <h2 style="color:black"> Horários das Licenciaturas 2018/2019, 2º semestre</h2>
                    <p class="notInf">
                      <time>25-02-2019 - </time>
                      <a href="#" title="Ver todos os artigos de Geral" style="color:blue">GERAL</a>
                    </p>
                    <p>Estão disponiveis para <a target="_blank"
                        href="docs/Horarios _Licenciaturas_2018_2019_2_semestre_Moodle.pdf">download</a> os horários das
                      licenciaturas, para o segundo semestre de ano letivo 2018/19 do Istec Porto.
                    </p>
                    <p>Contamos com a vossa energia para mais um semestre de sucesso.</p>
                    <img src="images/imagemistec.png" alt="imagem istec" class="center">

                  </article>
                </div>
              </div>
          </section>
        </aside>
      </section>
      <section data-region="blocks-column" class="d-print-none">
        <aside id="block-region-side-pre" class="block-region">
          <section class=" block block_timeline  card mb-3">
            <div class="card-body p-3">
              <h5 class="card-title d-inline">Notícias mais antigas</h5>
              <div class="card-text content mt-3">
                <ul class="list no-overflow">
                  <li class="p-b-1 p-t-1">
                    <div class="link">
                      <a href="#">Horários CTESP Abril 2019</a>
                    </div>

                  </li>
                  <li class="p-b-1 p-t-1">
                    <div class="link">
                      <a href="#">Calendário Exames Recuperação CTeSP</a>
                    </div>

                  </li>
                  <li class="p-b-1 p-t-1">
                    <div class="link">
                      <a href="#">Dados de acesso à rede sem fios</a>
                    </div>

                  </li>
                  <li class="p-b-1 p-t-1">
                    <div class="link">
                      <a href="#">Feira de Emprego no Porto tem 400 oportunidades de trabalho e estágio</a>
                    </div>

                  </li>
                  <li class="p-b-1 p-t-1">
                    <div class="link">
                      <a href="#">Inscrições abertas para curso de Critical Skills for Engineers of 2020</a>
                    </div>

                  </li>
                  <li class="p-b-1 p-t-1">
                    <div class="link">
                      <a href="#">Alunos de engenharia informática vencem workshop do INESC TEC</a>
                    </div>

                  </li>
                  <li class="p-b-1 p-t-1">
                    <div class="link">
                      <a href="#">Resultados dos exames 1º Ano 1º Semestre</a>
                    </div>

                  </li>
                </ul>
                <div class="footer"></div>

              </div>

            </div>
          </section>
        </aside>
      </section>
    </div>

  </div>
  <script src="https://use.fontawesome.com/00df0b3ac0.js"></script>
</body>

</html>
<?php
} else header("Location: index.php");
?>