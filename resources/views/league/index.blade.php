@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des catégorie du blog
                        <a href="{{ route('league.create') }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom de la catégorie</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leagues as $league)
                            <tr>
                                <td> {{ $league->nom }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($league->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('league.edit', $league->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('league.destroy', $league->id) }}" method="post" style="display: inline-block">
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
                @if($leagues->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $leagues->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
