@extends('layouts.main')

@section('title', 'Agenda')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um contato</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar por contatos">
            <input type="submit" class="btn btn-primary-search" value="Buscar">
        </form>
    </div>
    <div  class="col-md-12">
      @if($search)
          <h2>Buscando por: {{ $search }}</h2>
      @else
          <h2>Contatos</h2>
          <a href="/contats/create" class="btn btn-primary">Adicionar contato</a>
      @endif
      <div id="cards-container" class="row">
            @foreach($contatos as $contato)
              
                <div class="card  col-md-3">
                <a href="contats/edit/{{ $contato->id }}" class="card-link">
                    <div class="card-body">
                        <h5 class="card-nome">{{ $contato->nome }}</h5>
                        @foreach($tiposContatos as $tiposContato)
                            @if($tiposContato->pessoa_id == $contato->id)
                                <p class="">{{$tiposContato->nome}} : {{$tiposContato->valor }}</p>
                            @endif
                        @endforeach
                            
                        
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
<div class="d-flex justify-content-center">
            {!! $contatos->links() !!}
        </div>
@endsection