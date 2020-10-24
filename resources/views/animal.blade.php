<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adotar</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <form method="post" action="animal">

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
      </div>
      <div class="col text-center">
       <!--  <h1>Animais</h1>
          @foreach($animal as $animals)
            <p>Nome do Animal: {{ $animal['nm_name'] }}</p>
            <p>Idade do Animal: {{ $animal['nr_age'] }}</p>
            <p>Espécie do animal: {{ $animal['ds_species'] }}</p>
            <p>Gênero do animal: {{ $animal['ds_genre'] }}</p>
            <p>Raça: {{ $animal['ds_breed'] }}</p>
            <p>Bio: {{ $animal['ds_bio'] }}</p>
            <p>Data de nascimento: {{ $animal['dt_born'] }}</p>
          @endforeach -->
      </div>
    </div>
  </div>

</body>

</html>