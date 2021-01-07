@extends('LayoutLanding')
@section('middleContent')


<div id="animal-list" class="container">
  <div class="row">
    @foreach($animals as $animal)
    <div class="col-md-4 mt-5">
      <div class="card card-animal" style="width: 18rem;">
        <a class="card-animal-link zoom" data-toggle="modal" data-target="#{{ $animal['nm_name'] }}" onclick="showAnimal({{ $animal['nm_name'] }})">
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
    const http = new XMLHttpRequest();

    const url = "/animalPopup/" + id_animal;
    http.open("GET", url, true);
    http.onclick = function() {
        var html = http.responseText;
        html = new DOMParser().parseFromString(html, "text/html");
        document.getElementById('#animals').innerHTML = html.getElementById('#' + id_animal).innerHTML.trim();
    }

  }
</script>



@endsection