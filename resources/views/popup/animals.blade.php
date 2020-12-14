<!-- Modal -->


@foreach($animals as $animal)
<div class="modal" id="{{ $animal['nm_name'] }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $animal['nm_name'] }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Idade: {{ $animal['nr_age'] }}</li>
          <li>Espécie: {{ $animal['ds_species'] }}</li>
          <li>Gênero: {{ $animal['ds_genre'] }}</li>
          <li>Raça: {{ $animal['ds_breed'] }}</li>
          <li>Bio: {{ $animal['ds_bio'] }}</li>
          <li>Data de nascimento: {{ $animal['dt_born'] }}</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach




<!-- End Modal -->