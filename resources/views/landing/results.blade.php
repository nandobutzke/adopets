@extends('LayoutLanding')
@section('middleContent')



<div id="animal-list" class="container">
    <div class="row">

        @php $i = 0; @endphp
        @if($i != 0)
        @for($i = 0; $i < count($animals); $i++)
        <div class="col-md-4 mt-5">
            <div class="card card-animal" style="width: 18rem;">
                <a class="card-animal-link zoom" data-toggle="modal" data-target="#{{ $animals[$i]['nm_name'] }}">
                    <div class="card-animal-hover">
                        <div class="card-animal-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img src="/animalImage/{{ $animals[$i]['id_animal'] }}" class="card-img-top card-animal-img" alt="...">
                </a>
            </div>
    </div>
    @endfor
    @else
    <div class="col-12 justify-content-center">
        <p class="no-results-message text-center">Nenhum resultado encontrado</p>
    </div>
    @endif
</div>
</div>
</div>
</div>

@include('popup.animals')

@endsection
