@extends('LayoutLanding')
@section('middleContent')

<div class="container table-messages">
    <table class="table table-bordered border-color-primary">
        <thead>
            <tr>
                <th>Mensagem</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr class="menu">
                <td class="nav-item dropdown menu-item">
                    <a class="d-flex align-items-center nav-link dropdown-toggle menu-link" href="#" id="navbarDropdown{{ $message['id_message'] }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <p class="p-limited">
                            {{ $message['ds_message'] }}
                        </p>
                        <div class="dropdown-menu p-2 dropdown-menu-profile" aria-labelledby="navbarDropdown{{ $message['id_message'] }}">
                            <p class="p-unlimited">
                                {{ $message['ds_message'] }}
                            </p>
                        </div>
                    </a>
                </td>
                <td class="justify-content-center">
                    <form method="POST" action="/messages/delete/{{ $message['id_message'] }}" class="d-flex justify-content-center" onsubmit="return confirm('Você tem certeza que deseja excluir essa mensagem?')">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <img height="25px" class="trash-icon" src="https://img.icons8.com/wired/64/000000/empty-trash.png" />
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
