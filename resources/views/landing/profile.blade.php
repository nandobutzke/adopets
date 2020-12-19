@extends('LayoutLanding')
@section('middleContent')



<div class="container mt-5 profile-container p-3">
    <div class="row">
        <div class="col-12 col-md-3">
            <img height="200px" width="200px" src="animalImage/{{ $animals['id_animal'] = 6 }}" alt="Animal">
        </div>
        <div class="col-12 col-md-4">
            <h1>Profile name</h1>
            <span></span>
            <p>profile description</p>
        </div>
        <div class="col-12 col-md-4">

        </div>
    </div>
</div>
<div class="container mt-5 location-container p-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <h1>Address</h1>
            <div class="input-group flex-nowrap">
                <span class="input-group-text input-profile-text" id="addon-wrapping">Rua</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text input-profile-text" id="addon-wrapping">Número</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text input-profile-text" id="addon-wrapping">Cidade</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text input-profile-text" id="addon-wrapping">Estado</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-12 col-md-4">

        </div>
        <div class="col-12 col-md-4">

        </div>
    </div>
</div>
<div class="container mt-5 animals-container p-3">
    <div class="row">
        <div class="col-12 col-md-3">
            <img height="200px" width="200px" src="animalImage/{{ $animals['id_animal'] }}" alt="Animal">
        </div>
        <div class="col-12 col-md-4">
            
        </div>
        <div class="col-12 col-md-4">

        </div>
    </div>
</div>


@endsection