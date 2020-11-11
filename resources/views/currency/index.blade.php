@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des devises prises en charge
                        <a href="{{ route('currency.create') }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nom de la devise</th>
                            <th scope="col">Symbole</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($currencies as $currency)
                            <tr>
                                <td> {{ $currency->name }} </td>
                                <td> {{ $currency->symbol }} </td>
                                <td> {{ date('j M, Y H:i',strtotime($currency->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('currency.edit', $currency->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('currency.destroy', $currency->id) }}" method="post" style="display: inline-block">
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
                @if($currencies->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $currencies->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
