@extends('LayoutLanding')
@section('middleContent')


<div id="animal-list" class="container">
  <div class="row">
    @foreach($animal as $animals)
    <div class="col-md-4">
      <div class="card card-animal" style="width: 18rem;">
        <a class="card-animal-link zoom" href="">
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

@endsection