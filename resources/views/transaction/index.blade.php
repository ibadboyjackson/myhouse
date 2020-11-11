@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des transactions
                        <a href="{{ route('transactionType.index') }}" class="btn btn-success" style="float: right">Administrer les types de transaction</a>
                        <a href="{{ route('transaction.create') }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom de la transaction</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td> {{ $transaction->nom }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($transaction->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('transaction.edit', $transaction->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('transaction.destroy', $transaction->id) }}" method="post" style="display: inline-block">
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
                @if($transactions->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $transactions->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
