<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DonaPets</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">

</head>

<body id="main-content">

  <div class="container mt-5">
    <div class="row align-items-center text-center">
      <div class="col">
        <img height="80px" src="/img/donapets-title.png" alt="">
      </div>
      <div class="col mt-5">
        <img src="/img/patas.png" alt="">
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col text-left">
        <button type="button" class="btn btn-danger">Adotar</button>
        <button type="button" class="btn btn-light color-theme-1">Doar</button>
      </div>
      <div class="col text-center">

        <form method="post" action="chamaFuncao">

          <h2 class="mb-3">Cadastro de usuário</h2>
          @csrf
          <input type="text" name="nm_user" placeholder="Nome de usuário"><br>
          <input type="email" name="ds_email" placeholder="E-mail"><br>
          <input type="text" name="ds_public_place" placeholder="Logradouro"><br>
          <input type="text" name="ds_complement" placeholder="Complemento"><br>
          <input type="text" name="nm_neighborhood" placeholder="Bairro"><br>
          <input type="text" name="nr_cep" placeholder="CEP"><br>
          <input type="text" name="nr_phone" placeholder="Número de telefone"><br>
          <input type="text" name="ds_bio" placeholder="Bio"><br>
          <input type="date" name="dt_birth" placeholder="Data de nascimento"><br>
          <input type="password" name="password" placeholder="Senha"><br>
          <button type="submit">Lá vai</button>

        </form>

        @foreach($user as $users)
          <p>{{ $users['ds_email'] }}</p>
        @endforeach

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>