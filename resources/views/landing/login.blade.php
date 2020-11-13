@extends('LayoutLanding')
@section('middleContent')

<div class="container container-login">
  <div class="row row-login justify-content-center">
    <div class="col-12 col-md-4 col-login">
      <form action="/login" method="POST">
        @csrf
        <div class="form-group form-login">
          <label for="exampleInputEmail1">Endereço de E-mail</label>
          <input type="email" name="ds_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" name="ds_password" class="form-control" id="exampleInputPassword1">
          <small id="emailHelp" class="form-text text-muted">Nunca compartilhe a sua senha com alguém.</small>
        </div>
        <button type="submit" class="btn btn-login">Acessar</button>
      </form>
    </div>
  </div>
</div>


@endsection