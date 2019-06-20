<div id="page">
    <header id="page-header" class="row">
      <div class="col-12 pt-3 pb-3"></div>
    </header>
    <div class="fixed-top navbar navbar-expand">
      <div data-region="drawer-toggle" class="d-inline-block mr-3">
        <button id="openNav" onclick="w3_open()" aria-expanded="true" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
          <i class="icon fa fa-bars fa-fw " aria-hidden="true"></i><span class="sr-only">Side panel</span></button>
      </div>
      <a href="#" class="navbar-brand d-sm-inline"><span class="site-name d-none d-md-inline">Moodle ISTEC</span></a>
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
        <li class="d-flex align-items-center"><span class="avatar current"><img src="images/perfil/perfilricardo.png" class="userpicture" width="50" height="50" role="presentation" aria-hidden="true"></span></li>
      </ul>
    </div>