<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adotar</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <form method="post" action="cadastrarAnimal">

          <h2 class="mb-3">Cadastro de animal</h2>
          @csrf
          <input type="text" name="nm_name" placeholder="Nome do animal"><br>
          <input type="number" name="nr_age" placeholder="Idade"><br>
          <input type="text" name="ds_species" placeholder="Espécie"><br>
          <input type="text" name="ds_genre" placeholder="Gênero"><br>
          <input type="text" name="ds_breed" placeholder="Raça"><br>
          <input type="text" name="ds_bio" placeholder="Bio"><br>
          <input type="date" name="dt_born" placeholder="Data de nascimento"><br>
          <button type="submit">Cadastrar</button>
        </form>

        @foreach($animals as $animal)
          <a href="/animal/{{ $animal['id_animal'] }}">Ver mais sobre o {{ $animal['nm_name'] }}</a>
        @endforeach

      </div>
    </div>
  </div>

</body>

</html>