@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des ameublements
                        <a href="{{ route('furnishing.create') }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom de l'ameublement</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($furnishings as $furnishing)
                            <tr>
                                <td> {{ $furnishing->nom }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($furnishing->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('furnishing.edit', $furnishing->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('furnishing.destroy', $furnishing->id) }}" method="post" style="display: inline-block">
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
                @if($furnishings->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $furnishings->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
