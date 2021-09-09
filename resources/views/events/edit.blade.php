@extends('layouts.main') {{--Utilizando layout da página especificada após o "."--}}

@section('title', 'Edição do Compromisso') {{--Título do site--}}

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
    <a href="/events/all" class="btn btn-primary" type="button">VOLTAR</a>
</div>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf {{--token de proteção para formulários--}}
        @method('PUT') {{--Verbo HTTP PUT, usado para modificar dados no banco--}}
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file" accept=".jpg, .jpeg, .png">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Compromisso:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Compromisso" value="{{$event->title}}" required>
        </div>
        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{$event->date->format('Y-m-d')}}" required>
        </div>
        <div class="form-group">
            <label for="time">Hora Início:</label>
            <input type="time" class="form-control" id="time1" name="time1" value="{{$event->time1}}" required>
        </div>
        <div class="form-group">
            <label for="time">Hora Término:</label>
            <input type="time" class="form-control" id="time2" name="time2" value="{{$event->time2}}" required>
        </div>
        <div class="form-group">
            <label for="title">Local:</label>
            <input type="text" class="form-control" id="local" name="local" placeholder="Local do Evento" value="{{$event->local}}" required>
        </div>
        <div class="form-group">
            <label for="title">Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="Agendado">Agendado</option>
                <option value="Realizado" {{$event->status == "Realizado" ? "selected='selected'" : ""}}>Realizado</option>
                <option value="Cancelado" {{$event->status == "Cancelado" ? "selected='selected'" : ""}}>Cancelado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Observações:</label>
            <textarea name="comments" id="comments" class="form-control" placeholder="Detalhes do seu compromisso">{{$event->comments}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Salvar Compromisso">
    </form>
</div>
    
@endsection {{--Fim do Conteúdo do site--}}