@extends('LayoutLanding')
@section('middleContent')



<div class="container mt-5 profile-container justify-content-center p-5">
    <form method="post" action="updateUser" enctype="multipart/form-data">
        @csrf
        <h2 class="mb-3 profile-title text-center">Configurações do usuário</h2>
        <input type="hidden" name="id_user" value="{{ $user['id_user'] }}">
        <div id="animal-list">
            <div class="row">
                <div class="col-md-12 justify-content-center mt-5">
                    <div class="card card-profile card-animal" style="width: 18rem;">
                        <a class="card-animal-link zoom" data-toggle="modal" data-target="#{{ Session::get('user')->nm_name }}">
                            <div class="card-animal-hover">
                                <div class="card-animal-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="/userImage/{{ $user['id_user'] }}" class="card-img-top card-animal-img" alt="...">
                        </a>
                        <div class="input-group input-profile-file input-animal mb-3">
                            <div class="custom-file">
                                <label class="file-input-label" for="photo_user_edit">Alterar imagem de perfil</label>
                                <input type="file" required name="photo_user_edit" class="custom-file-input" placeholder="Escolha um arquivo" id="photo_user_edit" aria-describedby="inputGroupFileAddon01">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="nm_user" value="{{ $user['nm_user'] }}" aria-label="Username" placeholder="Nome de usuário" class="form-control form-donapets" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input class="form-control form-donapets" aria-label="Email" type="email" name="ds_email" value="{{ $user['ds_email'] }}" placeholder="E-mail" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input class="form-control form-donapets" type="text" name="ds_public_place" value="{{ $user['ds_public_place'] }}" placeholder="Logradouro" aria-label="Public place" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="ds_complement" value="{{ $user['ds_complement'] }}" placeholder="Complemento" aria-label="Complement" class="form-control form-donapets" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="nm_neighborhood" value="{{ $user['nm_neighborhood'] }}" placeholder="Bairro" aria-label="Neighborhood" class="form-control form-donapets" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="nr_cep" value="{{ $user['nr_cep'] }}" placeholder="CEP" aria-label="CEP" class="form-control form-donapets" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="ds_state" value="{{ $user['ds_state'] }}" placeholder="Estado" aria-label="State" class="form-control form-donapets" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="nr_phone" value="{{ $user['nr_phone'] }}" placeholder="Número de telefone" aria-label="Phone number" class="form-control form-donapets" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="ds_bio" value="{{ $user['ds_bio'] }}" placeholder="Bio" aria-label="Biography" class="form-control form-donapets" required>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="date" name="dt_birth" value="{{ $user['dt_birth'] }}" placeholder="Data de nascimento" aria-label="Date Born" class="form-control form-donapets" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="password" name="ds_password" placeholder="Senha" aria-label="Senha" class="form-control form-donapets">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="password" name="new_ds_password" placeholder="Nova senha" aria-label="Nova senha" class="form-control form-donapets">
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-12">
                <div class="input-group input-animal mb-3 mt-4">
                    <div class="custom-file">
                        <input type="file" required name="photo" class="custom-file-input" placeholder="Escolha um arquivo" id="photo" aria-describedby="inputGroupFileAddon01">
                    </div>
                </div>
            </div>
        </div> -->
        <button type="submit" class="btn color-theme-2 mt-4 mb-4 text-left">Atualizar</button>
    </form>

</div>


@endsection
