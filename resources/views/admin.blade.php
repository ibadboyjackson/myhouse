@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @include('myhouse.back.includes.messages')
                    <div class="card-header">
                        Tableau de bord
                        <a href="{{ route('admin.role') }}" class="btn btn-success offset-md-4">Ajouter des roles</a>
                        <a href="{{ route('admin.register') }}" class="btn btn-success">Ajouter des administrateurs</a>
                        <a href="{{ route('admin.conversations') }}" class="btn btn-success">Contact</a>
                    </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Vous êtes inscrit en tant qu'administrateur !
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
