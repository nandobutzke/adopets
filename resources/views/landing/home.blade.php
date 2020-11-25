@extends('LayoutLanding')
@section('middleContent')

<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="logo-img mt-5 p-3">
        <div class="mb-2">
          <img class="justify-content-center" height="80px" src="/img/donapets-title.png" alt="">
        </div>
        <h4 class="slogan-text" data-animation="fadeInLeft" data-delay=".6s">O PORTAL DE ADOÇÃO ONLINE</h4>
        <p class="text-description-home mt-5">Se você tem um animal para adoção, ou deseja encontrar o companheiro perfeito, está no lugar certo!</p>
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
        <a type="button" href="/adocao" class="btn btn-danger mr-2 pt-3 pb-3 pr-5 pl-5">Adotar</a>
        <a type="button" href="/cadastro-animal" class="btn btn-light ml-2 pt-3 pb-3 pr-5 pl-5 color-theme-1">Doar</a>
      </div>
    </div>
  </div>
</div>

@endsection