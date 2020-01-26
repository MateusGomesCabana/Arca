@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        <div>
                            <div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form action="{{ route('home.save') }}" method="POST" enctype="multipart/form-data">

                                            @if(count($errors))
                                            <div class="alert alert-danger">
                                                <strong>Whoops!</strong> There were some problems with your input.
                                                <br />
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif


                                            {{ csrf_field() }}
                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                <label for="name">Nome</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Nome" >
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Categorias</label>
                                                <select name="category[]" class="form-control selectpicker {{ $errors->has('category[]') ? 'has-error' : '' }}" multiple="" data-live-search="true" title="Categorias">
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->categoria }}</option>
                                                    @endforeach()
                                                   
                                                </select>
                                                <span class="text-danger">{{ $errors->first('category') }}</span>
                                                
                                            </div>
                                            <div class="form-group {{ $errors->has('endereco') ? 'has-error' : '' }}">
                                                <label for="endereco">Endereço</label>
                                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço">
                                                <span class="text-danger">{{ $errors->first('endereco') }}</span>
                                            </div>
                                            <div class="form-group {{ $errors->has('cep') ? 'has-error' : '' }}">
                                                <label for="cep">CEP</label>
                                                <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP">
                                                <span class="text-danger">{{ $errors->first('cep') }}</span>
                                            </div>
                                            <div class="form-group {{ $errors->has('cidade') ? 'has-error' : '' }}">
                                                <label for="name">Cidade</label>
                                                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
                                                <span class="text-danger">{{ $errors->first('cidade') }}</span>
                                            </div>
                                            <div class="form-group {{ $errors->has('estado') ? 'has-error' : '' }}">
                                                <label for="estado">Estado</label>
                                                <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
                                                <span class="text-danger">{{ $errors->first('estado') }}</span>
                                            </div>
                                            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                <label for="description">Descrição</label>
                                                <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            </div>
                                            <br />

                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection