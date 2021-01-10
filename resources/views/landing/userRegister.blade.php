@extends('LayoutLanding')
@section('middleContent')

<main id="container-user-register">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 text-center">
        <form method="post" action="cadastrarUsuario">
          <h2 class="mb-3 register-title">Cadastro de usuário</h2>
          @csrf
          <div class="input-group input-animal mt-5">
          <input type="text" name="nm_user" aria-label="Username" placeholder="Nome de usuário" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input class="form-control" aria-label="Email" type="email" name="ds_email" placeholder="E-mail">
        </div>
        <div class="input-group input-animal mt-4">
          <input class="form-control" type="text" name="ds_public_place" placeholder="Logradouro" aria-label="Public place">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="ds_complement" placeholder="Complemento" aria-label="Complement" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="nm_neighborhood" placeholder="Bairro" aria-label="Neighborhood" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="nr_cep" placeholder="CEP" aria-label="CEP" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="ds_state" placeholder="Estado" aria-label="State" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="nr_phone" placeholder="Número de telefone" aria-label="Phone number" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="text" name="ds_bio" placeholder="Bio" aria-label="Biography" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="date" name="dt_birth" placeholder="Data de nascimento" aria-label="Date Born" class="form-control">
        </div>
        <div class="input-group input-animal mt-4">
          <input type="password" name="ds_password" placeholder="Senha" aria-label="Senha" class="form-control">
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
  @endsection