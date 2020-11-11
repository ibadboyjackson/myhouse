@extends('layouts.app')

@section('content')
    <div class="container">

        @include('myhouse.back.includes.messages')

        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        {{ $title }}

                        <a href="{{ route($route_action) }}" class="btn btn-success" style="float: right; margin: 0 10px">Ajouter</a>

                        @isset($action_name) <a href="{{ route($route_action_name) }}" class="btn btn-success" style="float: right; margin: 0 10px">{{ $action_name }}</a> @endisset

                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">{{ $name }}</th>

                            @isset ($local_6) <th scope="col">{{ $local_name_6 }}</th> @endisset
                            @isset ($local_5) <th scope="col">{{ $local_name_5 }}</th> @endisset
                            @isset ($local_4) <th scope="col">{{ $local_name_4 }}</th> @endisset
                            @isset ($local_3) <th scope="col">{{ $local_name_3 }}</th> @endisset
                            @isset ($local_2) <th scope="col">{{ $local_name_2 }}</th> @endisset
                            @isset ($local) <th scope="col">{{ $local_name }}</th> @endisset


                        @foreach($variables as $variable)

                                @if ($variable->lat)
                                    <th scope="col"> Latitude </th>
                                @endif

                                @if ($variable->long)
                                    <th scope="col"> Longitude </th>
                                @endif

                                @break

                         @endforeach
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($variables as $variable)
                            <tr>
                                <td> {{ $variable->nom }} </td>

                                @isset($local_6)
                                    <td> {{ substr($variable->$variable_name_6->$item_6, 0, 10) }} </td>
                                @endisset

                                @isset($local_5)
                                    <td> {{ substr($variable->$variable_name_5->$item_5, 0, 10) }} </td>
                                @endisset

                                @isset($local_4)
                                    <td> {{ substr($variable->$variable_name_4->$item_4 , 0, 10)}} </td>
                                @endisset

                                @isset($local_3)
                                    <td> {{ substr($variable->$variable_name_3->$item_3, 0, 10) }} </td>
                                @endisset

                                @isset($local_2)
                                    <td> {{ substr($variable->$variable_name_2->$item_2, 0, 10) }} </td>
                                @endisset

                                @isset($local)
                                    <td> {{ $variable->$variable_name->$item }} </td>
                                @endisset



                                @if ($variable->lat)
                                    <td> {{ $variable->lat }} </td>
                                @endif

                                @if ($variable->long)
                                    <td> {{ $variable->long }} </td>
                                @endif


                                <td>
                                    <a href="{{ route($route_action_edit, $variable->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route($route_action_delete, $variable->id) }}" method="post" style="display: inline-block">
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

                @if($variables->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $variables->links() }}
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@stop
