@extends('LayoutLanding')
@section('middleContent')


<div class="container mt-5 profile-container justify-content-center p-5">
    <form method="post"  action="/updateAnimal" enctype="multipart/form-data">
        @csrf
        <h2 class="mb-3 profile-title text-center">Configurações do animal</h2>
        <input type="hidden" name="id_animal" value="{{ $animal['id_animal'] }}">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="nm_name" value="{{ $animal['nm_name'] }}" aria-label="animalName" placeholder="Nome do animal" class="form-control form-donapets">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="date" name="dt_born" value="{{ $animal['dt_born'] }}" placeholder="Data de nascimento" aria-label="Date Born" class="form-control form-donapets">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input class="form-control form-donapets" type="text" name="ds_genre" value="{{ $animal['ds_genre'] }}" placeholder="Gênero" aria-label="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="ds_species" value="{{ $animal['ds_species'] }}" placeholder="Espécie" aria-label="" class="form-control form-donapets">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="ds_breed" value="{{ $animal['ds_breed'] }}" placeholder="Raça" aria-label="" class="form-control form-donapets">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="nr_age" value="{{ $animal['nr_age'] }}" placeholder="Idade" aria-label="" class="form-control form-donapets">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="input-group input-animal mt-4">
                    <input type="text" name="ds_bio" value="{{ $animal['ds_bio'] }}" placeholder="Bio" aria-label="Biography" class="form-control form-donapets">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="input-group input-animal mb-3 mt-4">
                    <div class="custom-file">
                        <label class="file-input-label" for="photo_edit">Escolha um arquivo</label>
                        <input type="file" name="photo_edit" class="custom-file-input" placeholder="Escolha um arquivo" id="photo_edit" aria-describedby="inputGroupFileAddon01">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn color-theme-2 mt-4 mb-4 text-left">Atualizar</button>
    </form>

</div>


@endsection
