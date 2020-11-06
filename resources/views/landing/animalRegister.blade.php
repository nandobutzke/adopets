@extends('LayoutLanding')
@section('middleContent')

<div class="container mt-5 mb-5">
  <div class="row align-items-center">
    <div class="col-12 col-md-6 text-center">
      <!-- <form method="post" action="cadastrarAnimal">

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
      </form> -->

      <h1 class="animal-register-title">Cadastrar Animal</h1>
      <p>Basta preencher esse formulário com algumas informações do animal que deseja doar para apresentá-lo na <a class="animal-list-link" href="/adocao"><strong>lista de adoção!</strong></a></p>
      <form method="post" action="cadastrarAnimal">
        @csrf
        <div class="input-group input-animal mt-5">
          <input type="text" name="nm_name" aria-label="Animal Name" placeholder="Nome do animal" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="number" name="nr_age" aria-label="Age" placeholder="Idade" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="ds_species" aria-label="Species" placeholder="Espécie" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="ds_genre" aria-label="Genre" placeholder="Gênero" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="ds_breed" aria-label="First name" placeholder="Raça" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <textarea style="resize: none" type="text" name="ds_bio" aria-label="First name" placeholder="Bio" class="form-control"></textarea>
        </div>
        <div class="input-group input-animal mt-4">
          <input type="date" name="dt_born" aria-label="Date born" class="form-control">
        </div>
        <div class="input-group input-animal mb-3 mt-4">
          <div class="custom-file">
            <label class="file-input-label" for="photo">Escolha um arquivo</label>
            <input type="file" name="photo" class="custom-file-input" placeholder="Escolha um arquivo" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
          </div>  
          
        </div>

        <button type="submit" class="btn color-theme-2 mt-4 mb-4 text-left">Postar</button>
      </form>


      <!-- @foreach($animals as $animal)
      <a href="/animal/{{ $animal['id_animal'] }}">Ver mais sobre o {{ $animal['nm_name'] }}</a>
      @endforeach -->

    </div>
    <div class="col-12 col-md-6 justify-content-end text-right d-none d-md-block">
      <img height="600px" src="/img/patas.png" alt="">
    </div>
  </div>
</div>

@endsection