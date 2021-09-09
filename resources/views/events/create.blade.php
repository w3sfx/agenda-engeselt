@extends('layouts.main') {{--Utilizando layout da página especificada após o "."--}}

@section('title', 'Cadastro de Compromisso') {{--Título do site--}}

@section('content') {{--Início do Conteúdo do site--}}

{{-- CSS local da página --}}

<style>

    a {
        position: relative;
        top: 55px;
        left: 50px;
        width: 100px;     
    }

    #botao a {
        padding: 10px;    
    }

    
    footer {
        padding: 0;
        font-size: 10px;
    }

</style>

<div id="botao">
    <a href="/" class="btn btn-primary" type="button">VOLTAR</a>
</div>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre seus Compromissos</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf {{--token de proteção para formulários--}}
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file" accept=".jpg, .jpeg, .png">
        </div>
        <div class="form-group">
            <label for="title">Compromisso:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Compromisso" required>
        </div>
        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Hora Início:</label>
            <input type="time" class="form-control" id="time1" name="time1" required>
        </div>
        <div class="form-group">
            <label for="time">Hora Término:</label>
            <input type="time" class="form-control" id="time2" name="time2" required>
        </div>
        <div class="form-group">
            <label for="title">Local:</label>
            <input type="text" class="form-control" id="local" name="local" placeholder="Local do Evento" required>
        </div>
        <div class="form-group">
            <label for="title">Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="Agendado">Agendado</option>
                <option value="Realizado">Realizado</option>
                <option value="Cancelado">Cancelado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Observações:</label>
            <textarea name="comments" id="comments" class="form-control" placeholder="Detalhes do seu compromisso"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Salvar Compromisso">
    </form>
</div>
    
@endsection {{--Fim do Conteúdo do site--}}