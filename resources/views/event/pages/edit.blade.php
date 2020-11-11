@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier cet événement</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">Nom de l'événement</label>
                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $event->nom }}"  autocomplete="nom" autofocus >

                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prix" class="col-md-4 col-form-label text-md-right">Prix à gagner</label>
                                <div class="col-md-6">
                                    <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ $event->prix }}"  autocomplete="prix">

                                    @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dateDebut" class="col-md-4 col-form-label text-md-right">Date prévue pour cet événement</label>
                                <div class="col-md-6">
                                    <input id="dateDebut" type="date" class="form-control @error('dateDebut') is-invalid @enderror" name="dateDebut" value="{{ date('Y-m-d', strtotime($event->dateDebut)) }}"  autocomplete="dateDebut">

                                    @error('dateDebut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dateFin" class="col-md-4 col-form-label text-md-right">Date finale pour cet événement</label>
                                <div class="col-md-6">
                                    <input id="dateFin" type="date" class="form-control @error('dateFin') is-invalid @enderror" name="dateFin" value="{{  date('Y-m-d', strtotime($event->DateFin))  }}"  autocomplete="dateFin">

                                    @error('dateFin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  autocomplete="description">{{ $event->description }}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">Projet associé (optionnel)</label>
                                <div class="col-md-6">
                                    <select name="transaction_id" id="" class="form-control">
                                        @foreach($projects as $project)
                                            <option value="0">{{ $project->nomProjet ?? 'Aucun projet' }}</option>
                                            <option value="{{ $project->id }}">{{ $project->nomProjet }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">Lieu</label>
                                <div class="col-md-6">
                                    <select name="project_id" id="" class="form-control">
                                        <option value="1">Casablanca</option>
                                        <option value="2">Rabat</option>
                                        <option value="3">Tanger</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="images" class="col-md-4 col-form-label text-md-right">Ajouter les images</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="images[]" multiple>
                                    @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="videos" class="col-md-4 col-form-label text-md-right">Ajouter les videos</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="videos[]" multiple>
                                    @error('videos')
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
