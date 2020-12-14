@extends('LayoutLanding')
@section('middleContent')


<div id="animal-list" class="container">
  <div class="row">
    @foreach($animals as $animal)
    <div class="col-md-4 mt-5">
      <div class="card card-animal" style="width: 18rem;">
        <a class="card-animal-link zoom" data-toggle="modal" data-target="#{{ $animal['nm_name'] }}" onclick="showAnimal({{ $animal['id_animal'] }})">
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


<script>
  function showAnimal(id_animal) {
    $('#' + id_animal).html('<img class="justify-content-center text-center" src="img/loading.gif" alt="">');
    $.get('/animalPopup/' + id_animal, function(data) {
      $('#' + id_animal ).html(data)
      
    });
  }
</script>







<!-- @include('popup.animals') -->


@endsection