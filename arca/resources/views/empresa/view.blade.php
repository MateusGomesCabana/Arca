@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Visualizar Empresa</li>
                </ol>
                <div class="panel-body">
                    <form>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{ $empresa->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="description">Categorias</label>
                            <textarea class="form-control" rows="2" name="categoria" id="categoria" readonly>{{ $categoriaText }}</textarea>
                        </div>
                        @foreach($endereco as $end)
                        <div class="form-group">
                            <label for="name">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço" value="{{ $end->endereco }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">CEP</label>
                            <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" value="{{ $end->cep }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" value="{{ $end->cidade }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">Estado</label>
                            <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" value="{{ $end->estado}}" readonly>
                        </div>
                        @endforeach
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" rows="3" name="description" id="description" readonly>{{ $empresa->description }}</textarea>
                        </div>
                        <br />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection