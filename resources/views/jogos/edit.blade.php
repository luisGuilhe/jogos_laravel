@extends('layouts.app')

@section('title','Editar')

@section('content')
    <div class="container mt-5">
        <h1>Edite o jogo -> {{ $jogo->nome }}</h1>
        <hr>
        <form action="{{ route('jogos-update',['id' => $jogo->id]) }}" method="POST">

        @csrf
        @method('PUT')

            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $jogo->nome }}">
                </div>
                <br/>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $jogo->categoria }}">
                </div>
                <br/>
                <div class="form-group">
                    <label for="ano_criacao">Ano Criacao:</label>
                    <input type="number" class="form-control" name="ano_criacao" value="{{ $jogo->ano_criacao }}">
                </div>
                <br/>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" name="valor" value="{{ $jogo->valor }}">
                </div>
                <br/>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Editar">
                </div>
            </div>
        </form>
    </div>
@endsection











