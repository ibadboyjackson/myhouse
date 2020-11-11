@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $title }}
                        <a href="{{ route($routeAdd) }}" class="btn btn-success" style="float: right; margin: 0 10px"> Ajouter </a>

                        @isset($button)
                            <a href="{{ route($next) }}" class="btn btn-success" style="float: right; margin: 0 10px"> Administrer les {{ $nextTitle }} </a>
                        @endisset

                    </div>
                </div>
                <div class=" card-body ">
                    <table class="table">
                        <thead>

                        <tr>
                            @isset($headOne)
                                <th scope="col"> {{ $headOne }} </th>
                            @endisset

                            @isset($headTwo)
                                <th scope="col"> {{ $headTwo }} </th>
                            @endisset

                            @isset($headThree)
                                <th scope="col"> {{ $headThree }} </th>
                            @endisset

                            @isset($headFour)
                                <th scope="col"> {{ $headFour }} </th>
                            @endisset

                            <th scope="col"> Date de création </th>
                            <th scope="col"> Actions </th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($sendVars as $sendVar)
                            <tr>
                                <td> {{ $sendVar->name ?? null }} </td>

                                @isset($sendVar->content)  <td> {{ $sendVar->title }} </td> @endisset
                                @isset($sendVar->content) <td> {{ substr($sendVar->content, 0, 10)}} </td> @endisset

                                <td> {{ date('j M, Y H:i', strtotime($sendVar->created_at)) }} </td>
                                <td>
                                    <a href="{{ route($routeEdit, $sendVar->id) }}" class="btn btn-primary">Editer</a>

                                    <form action="{{ route($routeDelete, $sendVar->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit"> Supprimer </button>
                                    </form>

                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                @if ( $sendVars->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $sendVars->links() }}
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@stop
