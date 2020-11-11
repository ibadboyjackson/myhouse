@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des événements
                        <a href="{{ route('event.create') }}" class="btn btn-success" style="float: right;">Créer un événement</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom de l'événement</th>
                            <th scope="col">Prix à gangner</th>
                            <th scope="col">Lieu</th>
                            <th scope="col">Date du début</th>
                            <th scope="col">Date de Fin</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td> {{ $event->nom }} </td>
                                <td> {{ $event->prix }}</td>
                                <td> Casablanca</td>
                                <td> {{ date('j M, Y H:i',strtotime($event->dateDebut)) }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($event->DateFin)) }} </td>
                                <td>
                                    <a href="{{ route('event.edit', $event->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('event.destroy', $event->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                @if($events->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $events->links() }}
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@stop
