@extends('LayoutLanding')
@section('middleContent')

<div class="container mt-5">
    <form method="GET" action="/resultados">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="input-group input-animal mb-3">
                    <input type="text" name="nm_name" class="form-control" placeholder="Nome do animal" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="input-group input-animal mb-3">
                    <input type="text" name="ds_species" class="form-control" placeholder="Espécie" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="input-group input-animal mb-3">
                    <input type="text" name="ds_genre" class="form-control" placeholder="Gênero" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-danger color-theme-1">Buscar</button>
            </div>
        </div>
    </form>
</div>


<div id="animal-list" class="container">
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
                <a data-toggle="modal" data-target="#{{ $animal['nm_name'] }}">
                    <div class="description-animal">
                        <div class="description-animal-content">
                            <div class="p-3">
                                <h5>{{ $animal['nm_name'] }}</h5>
                                <p>{{ $animal['ds_genre'] }} - {{ $animal['nr_age'] }} anos</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- loadAnimal -->


@include('popup.animals')

<!--  -->

<script>
    function showAnimal(id_animal) {

    }
</script>



@endsection
