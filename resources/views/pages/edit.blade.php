@extends('layouts.main')

@section('title', 'Editar Contato')

@section('content')
      <div id="event-create-container" class="col-md-6 offset-md-3">
            <h1>Editando {{ $pessoa->nome}}</h1>
            <form action="/contats/{{ $pessoa->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Deletar
                        </button>
                    </form>
              <form action="/contats/update/{{ $pessoa->id }}" method="POST">
              @csrf
              @method('PUT')
                  <div class="form-group">
                        <label for="nome">Nome:</label> 
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ $pessoa->nome }}" required>
                  </div>
                  <div class="form-group">
                        <label for="data_aniversario">Data de nascimento:</label> 
                        <input type="date" class="form-control" id="data_aniversario" name="data_aniversario"  value="{{ $pessoa->data_aniversario->format('Y-m-d') }}" required>
                  </div>
                  <div class="form-group">
                        <label for="rua">Rua:</label> 
                        <input type="text" class="form-control" id="rua" name="rua" value="{{ $pessoa->rua }}" required>
                  </div>
                  <div class="form-group">
                        <label for="numero">Número:</label> 
                        <input type="text" class="form-control" id="numero" name="numero" value="{{ $pessoa->numero }}" required>
                  </div>
                  <div class="form-group">
                        <label for="bairro">Bairro:</label> 
                        <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $pessoa->bairro }}" required>
                  </div>
                  <div class="form-group">
                        <label for="cidade">Cidade:</label> 
                        <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $pessoa->cidade }}" required>
                  </div>
                  <div class="form-group">
                        <label for="estado">Estado:</label> 
                        <input type="text" class="form-control" id="estado" name="estado" value="{{ $pessoa->estado }}" required>
                  </div>
                  <div class="form-group">
                        <label for="pais">País:</label> 
                        <input type="text" class="form-control" id="pais" name="pais" value="{{ $pessoa->pais }}" required>
                  </div>
                  <div class="form-group">
                        <label for="pais">Contato:</label> 
                        <table class="table table-bordered" id="dynamicAddRemove">  
                              <tr>
                                    <th>Nome/Tipo</th>
                                    <th>Valor</th>
                              </tr>
                              @foreach($contatos as $index => $contato)
                              <tr>  
                                    <td><input type="text" name="moreFields[{{ $index }}][nome]" value="{{ $contato->nome }}" class="form-control" required/></td> 
                                    <td><input type="text" name="moreFields[{{ $index }}][valor]" value="{{ $contato->valor }}" class="form-control" class="form-control" required/></td> 
                                    @if($index == 0) 
                                    <td><button onclick="addFieldEdit('{{count($contatos)}}')" type="button" name="add" id="add-btn-edit" class="btn btn-primary">Add Linha</button></td>
                                    @else
                                    </td><td><button id="btn-remove" type="button" class="btn btn-danger remove-tr">Remover Linha</button></td></tr>
                                    @endif
                              </tr>  
                              @endforeach

                        </table> 
                  </div>
 
                  <input type="submit" class="mt-5 btn btn-success" value="Salvar contato">
              </form> 
      </div>
@endsection