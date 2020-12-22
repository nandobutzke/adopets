<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DoNaPeTs | O Caminho para o lar dos PETS </title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body id="main-content">
  <nav class="navbar navbar-expand-lg navbar-light mr-5 ml-5 align-items-center">
    <a class="navbar-brand d-lg-none d-block" href="/">
      <!-- <img src="/img/back.svg" alt=""> -->
      <img class="justify-content-center" height="20px" src="/img/donapets-title.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-toggler-icon-donapets"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav menu">
        <li class="nav-item active menu-item">
          <a class="nav-link menu-link" href="/">Home</a>
        </li>
        <li class="nav-item menu-item">
          <a class="nav-link menu-link" href="#">Contato</a>
        </li>
        <li class="nav-item menu-item">
          <a class="nav-link menu-link" href="#">Quem sou?</a>
        </li>
        @if(Session::has('user'))
        <li class="nav-item menu-item">
          <p class="nav-link menu-link">|</p>
        </li>
        <li class="nav-item dropdown menu-item">
          <a class="nav-link dropdown-toggle menu-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Session::get('user')->nm_user }}
          </a>
          <div class="dropdown-menu dropdown-menu-profile" aria-labelledby="navbarDropdown">
            <a class="dropdown-item dropdown-item-profile" href="/perfil">Meu perfil</a>
            <div class="dropdown-divider dropdown-divider-profile"></div>
            <a class="dropdown-item dropdown-item-profile" href="/logout">Sair</a>
          </div>
        </li>
        @else
        <li class="nav-item menu-item menu-item-p d-lg-block d-none">
          <p class="nav-link menu-link">|</p>
        </li>
        <li class="nav-item menu-item">
          <a class="nav-link menu-link" href="/acessar">Acessar</a>
        </li>
        @endif
      </ul>
    </div>
  </nav>

  @yield('middleContent')


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>


</html>