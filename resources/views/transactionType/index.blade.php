@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des types de transaction
                        <a href="{{ route('transactionType.create') }}" class="btn btn-success" style="float: right;">Ajouter</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom du type de transaction</th>
                            <th scope="col">Nom de la transaction</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($transactionTypes as $transactionType)
                                <tr>
                                    <td> {{ $transactionType->nom }} </td>
                                    <td> {{ $transactionType->transaction->nom }}</td>
                                    <td> {{ date('j M, Y H:i',strtotime($transactionType->created_at)) }} </td>
                                    <td>
                                        <a href="{{ route('transactionType.edit', $transactionType->id) }}" class="btn btn-primary">Editer</a>
                                        <form action="{{ route('transactionType.destroy', $transactionType->id) }}" method="post" style="display: inline-block">
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

                @if ($transactionTypes->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $transactionTypes->links() }}
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@stop
