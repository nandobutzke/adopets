@extends('LayoutLanding')
@section('middleContent')

<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="logo-img text-center mt-5 p-3">
        <img height="80px" src="/img/donapets-title.png" alt="">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="img-legs text-right mt-5">
        <img src="/img/patas.png" alt="">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="buttons-home mt-5 mb-5">
        <button type="button" class="btn btn-danger mr-2 pt-3 pb-3 pr-5 pl-5">Adotar</button>
        <button type="button" class="btn btn-light ml-2 pt-3 pb-3 pr-5 pl-5 color-theme-1">Doar</button>
      </div>
    </div>
  </div>
</div>

@endsection