@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste de vos favoris
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom du projet</th>
                            <th scope="col">Date d'ajout</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($favorites as $favorite)
                                <tr>
                                    <td> {{ $favorite->project->nomProjet }} </td>
                                    <td> {{ date('j M, Y H:i',strtotime($favorite->created_at)) }} </td>
                                    <td>
                                        <form action="{{ route('favorite.destroy', $favorite->id) }}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('delete')

                                            <input type="hidden" name="table" value="projet">
                                            <button class="btn btn-danger" type="submit">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if($favorites->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $favorites->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
