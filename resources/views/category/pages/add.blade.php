@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter une catégorie</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('category.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">Nom de la catégorie</label>
                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}"  autocomplete="nom" autofocus placeholder="exemple: Professionnel, Particulier ...">

                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="project_id" class="col-md-4 col-form-label text-md-right">Nom du projet</label>
                                <div class="col-md-6">
                                    <select id="" type="text" name="project_id" class="form-control">
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->nomProjet }}</option>
                                        @endforeach
                                    </select>
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
