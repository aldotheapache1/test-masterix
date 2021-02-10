@extends('layouts.main')

@section('title', 'Adicionar Contato')

@section('content')
      <div id="event-create-container" class="col-md-6 offset-md-3">
              <h1>Adicione seu contato</h1>
              <form action="/" method="POST" >
              @csrf
                  <div class="form-group">
                        <label for="nome">Nome:</label> 
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do contato" required>
                  </div>
                  <div class="form-group">
                        <label for="data_aniversario">Data de nascimento:</label> 
                        <input type="date" class="form-control" id="data_aniversario" name="data_aniversario" required>
                  </div>
                  <div class="form-group">
                        <label for="rua">Rua:</label> 
                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Insira seu endereço" required>
                  </div>
                  <div class="form-group">
                        <label for="numero">Número:</label> 
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Insira o número do seu endereço" required>
                  </div>
                  <div class="form-group">
                        <label for="bairro">Bairro:</label> 
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Insira o Bairro" required>
                  </div>
                  <div class="form-group">
                        <label for="cidade">Cidade:</label> 
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Insira a cidade" required>
                  </div>
                  <div class="form-group">
                        <label for="estado">Estado:</label> 
                        <input type="text" class="form-control" id="estado" name="estado" placeholder="Insira o estado" required>
                  </div>
                  <div class="form-group">
                        <label for="pais">País:</label> 
                        <input type="text" class="form-control" id="pais" name="pais" placeholder="Insira o país" required>
                  </div>
                  <div class=form-group">
                        <label for="pais">Contato:</label> 
                        <table class="table table-bordered" id="dynamicAddRemove">  
                              <tr>
                                    <th>Nome/Tipo</th>
                                    <th>Valor</th>
                              </tr>
                              <tr>  
                                    <td><input type="text" name="moreFields[0][nome]" placeholder="Celular" class="form-control" required/></td> 
                                    <td><input type="text" name="moreFields[0][valor]" placeholder="(67)9999-9999" class="form-control" class="form-control" required/></td>  
                                    <td><button onclick="addField()" type="button" name="add" id="add-btn" class="btn btn-primary">Add Linha</button></td>  
                              </tr>  
                        </table> 
                  </div>
 
                  <input type="submit" class="mt-5 btn btn-success" value="Cadastrar contato">
              </form> 
      </div>
@endsection