@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ $title }} </div>
                    <div class="card-body">
                        <form method="POST" action = " {{ route($routeUpdate, $sendVar->id) }} " >

                            @csrf
                            @method('patch')

                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="form-group row">
                                <label for="{{ $name }}" class="col-md-4 col-form-label text-md-right">{{ $nameInput }}</label>
                                <div class="col-md-6">
                                    <input id="{{ $name }}" type="text" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" value="{{ $sendVar->name }}"  autocomplete="nom" autofocus>

                                    @error($name)
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
