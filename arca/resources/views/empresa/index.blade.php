@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Empresa</li>
                </ol>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Cod</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empresas as $empresa)
                                <tr>
                                    <th scope="row" class="text-center">{{ $empresa->id }}</th>
                                    <td>{{ $empresa->name }}</td>
                                    <td class="text-justify">{{ $empresa->description }}</td>
                                    <td width="155" class="text-center">
                                        <a href="{{route('empresa.view', $empresa->id)}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection