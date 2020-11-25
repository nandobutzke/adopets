
<!-- Modal -->

  <div class="modal-dialog">
    <div class="modal-content">
      @foreach($animal as $animals)
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
      @endforeach
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>


<!-- End Modal -->