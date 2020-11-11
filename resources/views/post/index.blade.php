@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.back.includes.messages')
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des articles
                        <a href="{{ route('post.create') }}" class="btn btn-success" style="float: right;">Créer un article</a>
                    </div>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Contenu</th>
                            <th scope="col">Catégory</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td> {{ substr($post->title, 0, 10) }} </td>
                                <td> {{ substr($post->content, 0, 30) }}</td>
                                <td> {{ $post->league->nom }}</td>
                                <td>{{ $post->user->nom }}</td>
                                <td> {{ date('j M, Y H:i',strtotime($post->created_at)) }} </td>
                                <td>
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('post.destroy', $post->id) }}" method="post" style="display: inline-block">
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
                @if($posts->hasMorePages())
                    <div class="card-footer">
                        <div>
                            {{ $posts->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
