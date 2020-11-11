@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des catégories
                        <a href="{{ route('category.create') }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom de la catégory</th>
                            <th scope="col">Nom du projet</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td> {{ $category->nom }} </td>
                                <td> {{ $category->project->nomProjet }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($category->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="post" style="display: inline-block">
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
                @if($categories->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $categories->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
