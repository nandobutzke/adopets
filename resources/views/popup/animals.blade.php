<!-- Modal -->



@foreach($animals as $animal)
<div class="modal" id="{{ strval($animal['nm_name']) }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body animal-content-adoption">
        <div class="img-animal-container mb-2">
          <img width="100%" src="animalImage/{{ $animal['id_animal'] }}" alt="Img_animal">
        </div>
        <h5 class="modal-title mb-2" id="exampleModalLabel">{{ $animal['nm_name'] }}</h5>
        <ul class="animal-details-list">
          <li class="animal-details-item"><strong>Idade: </strong>{{ $animal['nr_age'] }}</li>
          <li class="animal-details-item"><strong>Espécie: </strong>{{ $animal['ds_species'] }}</li>
          <li class="animal-details-item"><strong>Gênero: </strong>{{ $animal['ds_genre'] }}</li>
          <li class="animal-details-item"><strong>Raça: </strong>{{ $animal['ds_breed'] }}</li>
          <li class="animal-details-item"><strong>Bio: </strong>{{ $animal['ds_bio'] }}</li>
          <li class="animal-details-item"><strong>Data de nascimento: </strong>{{ $animal['dt_born'] }}</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
@endforeach


<!-- End Modal -->