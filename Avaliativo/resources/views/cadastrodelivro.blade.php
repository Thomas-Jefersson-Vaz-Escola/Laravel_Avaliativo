@extends('layouts.main')
@section('titulo', 'Biblioteca - Cadastro')

@section('conteudo')
<div class="d-flex flex-column">
    <div class="text-center fs-2">Cadastro de livros</div>
    <div class="input-group mb-3">
        <span class="input-group-text ms-3" id="basic-addon1">Nome do livro</span>
        <input type="text" class="form-control me-5" placeholder="Harry Potter e a Pedra Filosofal"  aria-describedby="basic-addon1">
        <!-- <span class="input-group-text ms-3" id="basic-addon1">Gênero</span>
        <input type="text" class="form-control me-5" placeholder="Magia"  aria-describedby="basic-addon1"> -->
        <select class="form-select ms-3 me-5" aria-label="Default select example">
            <option selected>Gêneros</option>
            <option value="1">Magia</option>
            <option value="2">Romance</option>
            <option value="3">Terror</option>
        </select>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text ms-3" id="basic-addon1">ISBN-10</span>
        <input type="number" class="form-control me-5" placeholder="8532530788"  aria-describedby="basic-addon1">
        <span class="input-group-text ms-3" id="basic-addon1">Data de publicação</span>
        <input type="date" class="form-control me-5"  aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text ms-3" id="basic-addon1">Idioma</span>
        <input type="text" class="form-control me-5" placeholder="Português"  aria-describedby="basic-addon1">
        <span class="input-group-text ms-3" id="basic-addon1">Número de páginas</span>
        <input type="text" class="form-control me-5" placeholder="208"  aria-describedby="basic-addon1">
        <span class="input-group-text ms-3" id="basic-addon1">Idade de leitura recomendada</span>
        <input type="text" class="form-control me-5" placeholder="11"  aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text ms-3" id="basic-addon1">Nome do Autor</span>
        <input type="text" class="form-control me-5" placeholder="J. K. Rolling"  aria-describedby="basic-addon1">
        <span class="input-group-text ms-3" id="basic-addon1">Editora</span>
        <input type="text" class="form-control me-5" placeholder="Rocco"  aria-describedby="basic-addon1">
    </div>
    
</div>
<div class="container mt-auto d-flex ms-1 me-0 mb-2">
<button type="submit" class="btn btn-dark">Cadastrar</button>
</div>

@endsection
