@extends('layout')
@section('content')
<div class="d-flex flex-column ">
    <head>
        <h1 class="text-center">Cadastro de carros</h1>
    </head>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allCars as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->marca }}</td>
                        <td>{{ $item->modelo }}</td>
                        <td>{{\Carbon\Carbon::parse($item->ano)->format('d/m/Y') }}</td>
                        <td><a class="btn btn-info" href="{{route('show', $item->id)}}/">Editar</a></td>
                        <td>
                            <button type="button" class="btn btn-danger" data-id="{{$item->id}}" id="excluir">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        <a href="{{route('create')}}">Adicionar novo carro</a>
        </div>
    </section>
</div>

@endsection
