@extends('layouts.app')

@section('title','Criação')

@section('content')
    <div class="container mt-5">
        <h1>Insira novo jogo</h1>
        <hr>
        <form action="{{ route('jogos-store') }}" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Insira um nome">
                </div>
                <br/>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" placeholder="Insira uma categoria">
                </div>
                <br/>
                <div class="form-group">
                    <label for="ano_criacao">Ano Criacao:</label>
                    <input type="number" class="form-control" name="ano_criacao" placeholder="Insira o Ano de Lançamento">
                </div>
                <br/>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" name="valor" placeholder="Insira um valor">
                </div>
                <br/>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection











