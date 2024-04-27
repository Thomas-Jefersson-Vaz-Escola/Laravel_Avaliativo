@extends('layouts.main')
@section('titulo', 'Biblioteca')

@section('conteudo')
<div>
    <h1>Cadastro de livros</h1>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome do livro</span>
        <input type="text" class="form-control" placeholder="Harry Potter e a Pedra Filosofal"  aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Genero</span>
        <input type="text" class="form-control" placeholder="Magia"  aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Autor</span>
        <input type="text" class="form-control" placeholder="J. K. Rolling"  aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Data de Publicação</span>
        <input type="text" class="form-control" placeholder="19-08-2017"  aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Editora</span>
        <input type="text" class="form-control" placeholder="Rocco"  aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">ISBN-10</span>
        <input type="number" class="form-control" placeholder="8532530788"  aria-describedby="basic-addon1">
    </div>
    <input type="submit" value="Cadastrar" id="enviar">
</div>
@endsection
