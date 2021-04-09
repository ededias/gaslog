@extends('layout')

@section('content')
    <head>
        <h1 class="text-center">Criar novo carro</h1>
    </head>
    <section>
        <form action="{{route('store')}}" method="POST">
            <fieldset>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input class="form-control" id="marca" type="text" name="marca">
                </div>
                <div class="form-group">
                    <label for="modelo">Nome</label>
                        <input class="form-control" id="modelo" type="text" name="modelo">
                </div>
                <div class="form-group">
                    <label for="ano">Ano</label>
                    <input class="form-control" id="ano" type="date" name="ano">
                </div>
                @csrf
                {{-- <input type="hidden" name="csrf_token" value="{{csrf_token()}}"> --}}
                <button class="btn btn-primary" type="submit">Salvar</button>
            </fieldset>
        </form>
    </section>
@endsection