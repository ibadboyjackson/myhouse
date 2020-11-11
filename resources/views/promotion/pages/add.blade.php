@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Créer un code promotion</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('promotion.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">réduction (en %)</label>
                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"  autocomplete="price" autofocus placeholder="Entrer un chiffre entre 1 et 100">

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">Nom du projet</label>
                                <div class="col-md-6">
                                    <select name="project_id" id="" class="form-control">
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
