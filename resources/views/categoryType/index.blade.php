@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des categoryTypes
                        <a href="{{ route('categoryType.create') }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom de la catégory</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categoryTypes as $categoryType)
                            <tr>
                                <td> {{ $categoryType->nom }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($categoryType->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('categoryType.edit', $categoryType->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('categoryType.destroy', $categoryType->id) }}" method="post" style="display: inline-block">
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
                @if($categoryTypes->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $categoryTypes->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
