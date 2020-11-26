@extends('LayoutLanding')
@section('middleContent')


<div id="animal-list" class="container">
  <div class="row">
    @foreach($animal as $animals)
    <div class="col-md-4 mt-5">
      <div class="card card-animal" style="width: 18rem;">
        <a class="card-animal-link zoom" onclick="showAnimal({{ $animals['id_animal'] }})" href="#animalmodal">
          <div class="card-animal-hover">
            <div class="card-animal-hover-content"><i class="fas fa-plus fa-3x"></i></div>
          </div>
            <img src="/animal/{{ $animals['id_animal'] }}" class="card-img-top card-animal-img" alt="...">
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="modal" id="animalmodal"></div>

<script>
  function showAnimal(id_animal) {
    $('#animalmodal').html('<img class="justify-content-center text-center" src="img/loading.gif" alt="">');
    $.get('/animal/' + id_animal, function(data) {
      $('#animalmodal').html(data)
    });
  }

</script>







<!-- @include('popup.animals') -->


@endsection