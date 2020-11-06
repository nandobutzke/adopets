@extends('LayoutLanding')
@section('middleContent')


<div id="animal-list" class="container">
  <div class="row">
    @foreach($animal as $animals)
    <div class="col-md-4">
      <div class="card card-animal" style="width: 18rem;">
        <a class="card-animal-link zoom" data-toggle="modal" data-target="#{{ $animals['id'] }}">
          <div class="card-animal-hover">
            <div class="card-animal-hover-content"><i class="fas fa-plus fa-3x"></i></div>
          </div>
            <img src="/img/dexter.png" class="card-img-top card-animal-img" alt="...">
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!-- Modal -->
@foreach($animal as $animals)
<div class="modal fade" id="{{ $animals['id'] }}" tabindex="-1" aria-labelledby="animalsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $animals['nm_name'] }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Idade: {{ $animals['nr_age'] }}</li>
          <li>Espécie: {{ $animals['ds_species'] }}</li>
          <li>Gênero: {{ $animals['ds_genre'] }}</li>
          <li>Raça: {{ $animals['ds_breed'] }}</li>
          <li>Bio: {{ $animals['ds_bio'] }}</li>
          <li>Data de nascimento: {{ $animals['dt_born'] }}</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- End Modal -->


@endsection