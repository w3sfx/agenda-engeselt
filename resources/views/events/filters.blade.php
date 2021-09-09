@extends('layouts.main') {{--Utilizando layout da página especificada após o "."--}}

@section('title', 'Compromissos') {{--Título do site--}}

@section('content') {{--Início do Conteúdo do site--}}

{{-- CSS local da página --}}

<style>
    h2 {
        text-align: center;
        padding: 20px;
        color: white;
        text-transform: uppercase;
        font-weight: bolder;
    }

    .btn.btn-primary {
        width: 100px;
        padding: 10px;
    }
</style>

{{-- CSS JQuery --}}

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

<div>
    <h2>Filtros de Seleção</h2>
    <p><a href="/events/all" class="btn btn-primary" type="button">VOLTAR</a></p>
</div>
<div class="card">
    <div class="card-body">
        <table  id="filtros" class="table display "> 
            <thead>
                <tr>
                <td >Compromisso</td>
                <td >Data</td>
                <td >Hora Início</td>
                <td >Hora Término</td>
                <td >Local</td>
                <td >Status</td>
                <td >Observações</td>
                </tr>
            </thead>
            <tbody>
            @foreach ($events as $event)
                <tr>
                <td>{{$event->title}} </td>
                <td>{{$event->date->format('d-m-Y')}} </td>
                <td>{{$event->time1}} </td>
                <td>{{$event->time2}} </td>
                <td>{{$event->local}} </td>
                <td>{{$event->status}} </td>
                <td>{{$event->comments}} </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
    $('#filtros').DataTable( {
        "language": {
            "lengthMenu": "Mostrando _MENU_ compromissos por página",
            "zeroRecords": "Nada encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponível",
            "infoFiltered": "(Filtrando de _MAX_ registros no total)"
        }
    } );
} );
</script>

@endsection {{--Fim do Conteúdo do site--}}