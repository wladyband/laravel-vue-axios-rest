@extends('layouts.app')
@section('content')
  <crud>

    <div class="col-xs-12">
          <h1 class="page-header">Lista de Imoveis</h1>
    </div>

    <div class="col-sm-12 margem_table">
      <a href="#" class="btn btn-primary pull-left" data-toggle="modal" data-target="#create" >
      Novo  Imovel
      </a>

      <table class="table table-hover table-striped">
        <thead>
            <tr>
              <th>#</th>
              <th>Descrição</th>
              <th>Tipo</th>
              <th>Finalidade</th>
              <th>Bairro</th>
              <th colspan="2">&nbsp</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="registro in registros">
              <th>@{{ registro.id }}</th>
              <td>@{{ registro.descricao }}</td>
              <td>@{{ registro.tipos }}</td>
              <td>@{{ registro.finalidade }}</td>
              <td>@{{ registro.bairroEndereco }}</td>
              <td width="10px">
                  <a href="#" class="btn btn-warning btn-success" v-on:click.prevent="editarRegistro(registro)">Editar</a>
              </td>
              <td width="10px">
                  <a href="#" class="btn btn- btn-danger" v-on:click.prevent="deletarRegistro(registro)" >Deletar</a>
              </td>
            </tr>
          </tbody>
      </table>
      @include('imoveis.create')
      @include('imoveis.edit')
  </div>

  </crud>


@endsection
