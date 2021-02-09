@extends('layouts.main')

@section('title', 'Agenda')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um contato</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
            <input type="submit" class="btn btn-primary-search" value="Buscar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
      @if($search)
          <h2>Buscando por: {{ $search }}</h2>
      @else
          <h2>Contatos</h2>
          <a href="#" class="btn btn-primary">Adicionar contato</a>
      @endif
      <div id="cards-container" class="row">
            @foreach($contatos as $contato)
              
                <div class="card  col-md-3">
                <a href="#" class="card-link">
                    <div class="card-body">
                        <h5 class="card-nome">{{ $contato->nome }}</h5>
                        <p class="">Email: gian15249@gmail.com</p>
                    </div>
                    </a>
                </div>
              
            @endforeach
            @if(count($contatos) == 0 && $search)
                <p id="sem-contatos">Não foi possível encontrar nenhum contato com {{ $search }}! <a href="/"> Ver todos </a></p>
            @elseif(count($contatos) == 0)
                <p id="sem-contatos">Não há contatos cadastrados</p>
            @endif
        </div>
    </div>
</div>
@endsection