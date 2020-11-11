@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier article</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Titre</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title  }}"  autocomplete="title" autofocus >

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">Contenu</label>
                                <div class="col-md-6">
                                    <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" autocomplete="content">{{ $post->content }}</textarea>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">Catégorie</label>
                                <div class="col-md-6">
                                    <select name="league_id" id="" class="form-control">
                                        @foreach($leagues as $league)
                                            <option value="{{ $league->id }}">{{ $league->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">Auteur</label>
                                <div class="col-md-6">
                                    <select name="user_id" id="" class="form-control">
                                        <option value="{{ auth()->user()->id }}">{{ auth()->user()->nom }}</option>
                                    </select>
                                    @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="images" class="col-md-4 col-form-label text-md-right">Ajouter une image</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $post->image }}">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enregistrer') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
