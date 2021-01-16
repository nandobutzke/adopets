@extends('LayoutLanding')
@section('middleContent')

<div class="container">
  <div class="row">
    <form method="GET" action="/resultados">
      <div class="input-group input-animal mb-3">
        <input type="text" name="nm_name" class="form-control" placeholder="Nome do animal" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <button type="submit" class="btn btn-danger">Primary</button>
    </form>
  </div>
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