@extends('LayoutLanding')
@section('middleContent')



<!-- <div class="container mt-5 profile-container p-3">
    <div class="row">
        <div class="col-12 col-md-3">
            <img height="200px" width="200px" src="" alt="Profile image">
        </div>
        <div class="col-12 col-md-4">
            <h1>Profile name</h1>
            <span></span>
            <p>profile description</p>
        </div>
        <div class="col-12 col-md-4">

        </div>
    </div>
</div> -->
<main id="container-user-register">
  <div class="container mt-5 profile-container p-3">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 text-center">
        <form method="post" action="updateUser">
          <h2 class="mb-3 register-title">Cadastro de usuário</h2>
          <input type="hidden" name="id_user" value="{{ $user['id_user'] }}">
          @csrf
          <div class="input-group input-animal mt-5">
          <input type="text" name="nm_user" value="{{ $user['nm_user'] }}" aria-label="Username" placeholder="Nome de usuário" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input class="form-control" aria-label="Email" type="email" name="ds_email" value="{{ $user['ds_email'] }}" placeholder="E-mail">
        </div>
        <div class="input-group input-animal mt-4">
          <input class="form-control" type="text" name="ds_public_place" value="{{ $user['ds_public_place'] }}" placeholder="Logradouro" aria-label="Public place">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="ds_complement" value="{{ $user['ds_complement'] }}" placeholder="Complemento" aria-label="Complement" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="nm_neighborhood" value="{{ $user['nm_neighborhood'] }}" placeholder="Bairro" aria-label="Neighborhood" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="nr_cep" value="{{ $user['nr_cep'] }}" placeholder="CEP" aria-label="CEP" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="ds_state" value="{{ $user['ds_state'] }}" placeholder="Estado" aria-label="State" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="nr_phone" value="{{ $user['nr_phone'] }}" placeholder="Número de telefone" aria-label="Phone number" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="ds_bio" value="{{ $user['ds_bio'] }}" placeholder="Bio" aria-label="Biography" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="date" name="dt_birth" value="{{ $user['dt_birth'] }}" placeholder="Data de nascimento" aria-label="Date Born" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="password" name="ds_password" placeholder="Senha" aria-label="Senha" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="password" name="new_ds_password" placeholder="Nova senha" aria-label="Senha" class="form-control">
        </div>
        <div class="input-group input-animal mb-3 mt-4">
            <div class="custom-file">
              <label class="file-input-label" for="photo">Escolha um arquivo</label>
              <input type="file" required name="photo" class="custom-file-input" placeholder="Escolha um arquivo" id="photo" aria-describedby="inputGroupFileAddon01">
            </div>
  
          </div>
        
        <button type="submit" class="btn color-theme-2 mt-4 mb-4 text-left">Cadastrar</button>

        </form>
      </div>
    </div>
  </div>
</main>
<!-- <div class="container mt-5 location-container p-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <h1>Address</h1>
            <div class="input-group flex-nowrap">
                <span class="input-group-text input-profile-text" id="addon-wrapping">Rua</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text input-profile-text" id="addon-wrapping">Número</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text input-profile-text" id="addon-wrapping">Cidade</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text input-profile-text" id="addon-wrapping">Estado</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-12 col-md-4">

        </div>
        <div class="col-12 col-md-4">

        </div>
    </div>
</div> -->
<!-- <div id="animal-list" class="container mt-5 animals-container p-3">
    <div class="row">
        @foreach($animals as $animal)
        <div class="col-md-4 mt-5">
            <div class="card card-animal" style="width: 18rem;">
                <a class="card-animal-link zoom" data-toggle="modal" data-target="#{{ $animal['nm_name'] }}">
                    <div class="card-animal-hover">
                        <div class="card-animal-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img src="/animalImage/{{ $animal['id_animal'] }}" class="card-img-top card-animal-img" alt="...">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div> -->

<!-- @include('popup.animals') -->


@endsection