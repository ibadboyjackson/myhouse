@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des biens immobiliers
                        <a href="{{ route('propertyType.create') }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom du bien</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($properties as $property)
                            <tr>
                                <td> {{ $property->nom }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($property->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('propertyType.edit', $property->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('propertyType.destroy', $property->id) }}" method="post" style="display: inline-block">
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

                @if ($properties->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $properties->links() }}
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@stop
