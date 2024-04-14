<div class="card">
    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$nome}}</h5>
        <p class="card-text text-truncate">{{$descrizione}}</p>
        <a href="{{ route('dettaglio', [ 'nome' => $nome ]) }}" class="btn btn-primary">oggetto</a>
    </div>
</div>