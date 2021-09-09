@extends('layouts.main') {{--Utilizando layout da página especificada após o "."--}}

@section('title', 'Compromissos') {{--Título do site--}}

@section('content') {{--Início do Conteúdo do site--}}

{{-- CSS local da página --}}

<style>

    h2 {
        color: white;
        text-transform: uppercase;
        text-align: center;
        margin-top: 5px;
        font-family: 'Roboto';
        font-weight: bolder; 
    }

    form {
        display: inline-block;
    }

    .msg {
        position: relative;
        text-transform: uppercase;
        background-color: rgb(5, 5, 124);
        color: white;
        font-weight: bolder;
        border: 1px solid rgba(2, 14, 51, 0.411);
        width: 100%;
        text-align: center;
    }

    footer {
        padding: 0;
        font-size: 10px;
    }

    #events-container .btn.btn-primary {
        position: relative;
        top: 55px;
        left: 50px;
        width: 100px;
        padding: 10px;
    }

</style>

    <div id="events-container" class="col-md-12">
        <a href="/" class="btn btn-primary" type="button">VOLTAR</a>
        <a href="/events/filters" class="btn btn-primary" id="btnfilter" type="button">FILTROS</a>
        <h2>Próximos Compromissos</h2>
        <p class="subtitle">Veja os seus Compromissos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img id="img-all" src="/img/events/{{$event->image}}" alt=>
                    <div class="card-body">
                        <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
                        <p id="start">Inicia às {{$event->time1}}</p>
                        <p id="end">Termina às {{$event->time2}}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <h5 class="card-local" ><ion-icon name="location-outline"></ion-icon>{{$event->local}}</h5>
                        <h5 class="card-title" id="status">{{$event->status}}</h5>
                        <p>{{$event->comments}}</p>
                        <a href="/events/edit/{{$event->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                        <form action="/events/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Excluir</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
<script>
    $('h2').fadeOut("2000").
</script>
@endsection {{--Fim do Conteúdo do site--}}