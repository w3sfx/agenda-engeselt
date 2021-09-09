@extends('layouts.main') {{--Utilizando layout da página especificada após o "."--}}

@section('title', 'Agenda de Compromisso') {{--Título do site--}}

@section('content') {{--Início do Conteúdo do site--}}

{{-- CSS local da página --}}

<style>

    h1 {
        color: white;
        text-shadow: 2px 2px 2px black;
        font-family: 'Roboto';
        font-weight: bolder;
        position: absolute;
        top: calc(35% - 100px);
        left: calc(47.4% - 100px);
    }

    .d-grid {
        width: 200px;
        height: 200px;
        position: absolute;
        top: calc(50% - 100px);
        left: calc(50% - 100px);
    }

    .btn {
        padding-top: 25px;
        text-transform: uppercase;
        font-weight: bolder;
    }

    a {
        padding-top: 10px;
    }
</style>

<header>
    <h1>W3SFX AGENDA</h1>
</header>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/events/all" class="btn btn-primary" type="button">Veja seus Compromissos</a>
    <a href="/events/create" class="btn btn-primary" type="button">Cadastre seus Compromissos</a>
</div>
    
@endsection {{--Fim do Conteúdo do site--}}

