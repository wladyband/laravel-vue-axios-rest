@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Detalhes do imóvel</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Sobre o imóvel</h4>
                    <p>Descrição: {{$imovel->descricao}}</p>
                    <p>Preço: R$ {{number_format($imovel->preco, 2, ',', '.')}}</p>
                    <p>Quantidade de Quartos: {{$imovel->qtd_quartos}}</p>
                    <p>Tipo: {{$imovel->tipo}}</p>
                    <p>Finalidade: {{$imovel->finalidade}}</p>
                    <hr>
                    <h4>Endereço</h4>
                    <p>Logradouro: {{$imovel->logradouro_endereco}}</p>
                    <p>Bairro: {{$imovel->bairro_endereco}}</p>
                    <p>Número: {{$imovel->numero_endereco}}</p>
                    <p>CEP: {{$imovel->cep_endereco}}</p>
                    <p>Cidade: {{$imovel->cidade_endereco}}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
@endsection
