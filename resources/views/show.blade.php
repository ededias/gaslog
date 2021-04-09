@extends('layout')

@section('content')
    <head>
        <h1 class="text-center">Criar novo carro</h1>
    </head>
    <section>
        <form action="{{route('update', $car->id)}}" method="POST">
            @method('put')
            <fieldset>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{$car->marca}}">
                </div>
                <div class="form-group">
                    <label for="modelo">Nome</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="{{$car->modelo}}">
                </div>
                <div class="form-group">
                    <label for="ano">Ano</label>
                    <input type="date" class="form-control" id="ano" name="ano" value="{{ \Carbon\Carbon::parse($car->ano)->format('Y-m-d')}}">
                </div>    
                
                @csrf
                <button class="btn btn-primary" type="submit">Salvar</button>
            </fieldset>
        </form>
    </section>
@endsection