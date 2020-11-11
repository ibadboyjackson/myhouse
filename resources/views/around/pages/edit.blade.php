@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Modifier ce nom') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('around.update', $around->id) }}">
                            @csrf
                            @method('patch')

                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            <div class="form-group">
                                <label for="nom">{{ __('Nom') }}</label>
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $around->nom }}"  autocomplete="nom" autofocus>

                                @error('nom')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
