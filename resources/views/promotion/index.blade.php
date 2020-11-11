@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des Promotions
                        <a href="{{ route('promotion.create') }}" class="btn btn-success" style="float: right;">créer un code promotion</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Code promo</th>
                            <th scope="col">Projet associé</th>
                            <th scope="col">réduction</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($promotions as $promotion)
                            <tr>
                                <td> {{ $promotion->code }} </td>
                                <td> {{ $promotion->project->nomProjet }} </td>
                                <td> {{ $promotion->price }} %</td>
                                <td> {{ date('j M, Y H:i',strtotime($promotion->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('promotion.edit', $promotion->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('promotion.destroy', $promotion->id) }}" method="post" style="display: inline-block">
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
                @if($promotions->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $promotions->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
