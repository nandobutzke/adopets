@extends('LayoutLanding')
@section('middleContent')

<div class="container mt-5 mb-5">
  <div class="row align-items-center">
    <div class="col-12 col-md-6 text-center">

      <h1 class="animal-register-title">Cadastrar Animal</h1>
      <p>Basta preencher esse formulário com algumas informações do animal que deseja doar para apresentá-lo na <a class="animal-list-link" href="/adocao"><strong>lista de adoção!</strong></a></p>
      <form action="/animalRegister" method="POST" enctype="multipart/form-data">
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
            <input type="file" required name="photo" class="custom-file-input" placeholder="Escolha um arquivo" id="photo" aria-describedby="inputGroupFileAddon01">
          </div>

        </div>

        <button type="submit" class="btn color-theme-2 mt-4 mb-4 text-left">Postar</button>
      </form>

    </div>
    <div class="col-12 col-md-6 justify-content-end text-right d-none d-md-block">
      <img height="600px" src="/img/patas.png" alt="">
    </div>
  </div>
</div>

@endsection