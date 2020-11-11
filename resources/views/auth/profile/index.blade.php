@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        Profile
                        <a href="{{ route('profile.edit', auth()->user()->id ) }}" class="btn btn-success" style="float: right; margin: 0 10px">Modifier</a>
                        <form action="{{ route('profile.destroy', auth()->user()->id ) }}" style="display: inline-block; float: right" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" style="float: right; margin: 0 10px">Supprimer</button>
                        </form>
                    </div>

                    <div class="card-body">

                        <p>Nom :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->nom }}</p>
                        <p>Prénom :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->prenom }}</p>
                        <p>Email :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->email }}</p>
                        <p>Ville :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->ville }}</p>
                        <p>Pays :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->pays }}</p>
                        <p>Téléphone :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->telephone }}</p>

                        @if(auth()->user()->role_id != 4)

                            <p>Site web :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->site_web }}</p>
                            <p>Type d'entreprise :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->type_entreprise }}</p>
                            <p>Nom de l'entreprise :  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->nom_entreprise }}</p>
                            <p>Siège social : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->siege_social }}</p>
                            <p>logo : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->logo }}</p>
                            <p>Code postal : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   {{ auth()->user()->code_postal }}</p>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
