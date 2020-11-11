@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des projets immobiliers
                        <a href="{{ route('project.create') }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>
                        <a href="{{ route('transaction.index') }}" class="btn btn-success" style="float: right">Administrer les transactions</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom du projet</th>
                            <th scope="col">Nom de l'entreprise</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <th scope="row"> {{ $project->nomProjet }} </th>
                                <td> {{ $project->NomAdministrateur }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($project->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('project.show', $project->id) }}" class="btn btn-primary">Voir</a>

                                    <form action="{{ route('project.destroy', $project->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Supprimer</button>
                                    </form>

                                    <form action="{{ route('favorite.store') }}" method="post" style="display: inline-block">
                                        @csrf
                                        <input type="hidden" name="project_id" value="{{ $project->id }}">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="field" value="project_id">
                                        <input type="hidden" name="table" value="projet">
                                        <button class="btn btn-danger" type="submit">Ajouter au favoris</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
