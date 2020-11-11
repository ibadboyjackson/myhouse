@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des roles
                        <a href="{{ route('role.create') }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom du role</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td> {{ $role->nom }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($role->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('role.destroy', $role->id) }}" method="post" style="display: inline-block">
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
                @if($roles->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $roles->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
