@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ $title }} </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route($route_name) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right"> {{ $name }} </label>
                                <div class="col-md-6">

                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}"  autocomplete="nom" autofocus>

                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            @isset ($variable)
                                <div class="form-group row">
                                    <label for="lat" class="col-md-4 col-form-label text-md-right">Latitude</label>
                                    <div class="col-md-6">
                                        <input id="lat" type="text" class="form-control @error('lat') is-invalid @enderror" name="lat" value="{{ old('lat') }}"  autocomplete="lat">

                                        @error('lat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> {{ $message }} </strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset ($variable)
                                <div class="form-group row">
                                    <label for="long" class="col-md-4 col-form-label text-md-right">Longitude</label>
                                    <div class="col-md-6">
                                        <input id="long" type="text" class="form-control @error('long') is-invalid @enderror" name="long" value="{{ old('long') }}"  autocomplete="long">
                                        @error('long')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset($local)
                                <div class="form-group row">
                                    <label for="{{ $local }}" class="col-md-4 col-form-label text-md-right">{{ $locals }}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($local) }}" id="" class="form-control">
                                            @foreach($local_variables as $local_variable)
                                                <option value="{{ $local_variable->id }}">{{ $local_variable->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($local)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset($local_2)
                                <div class="form-group row">
                                    <label for="{{ $local_2 }}" class="col-md-4 col-form-label text-md-right">{{ $locals_2}}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($local_2) }}" id="" class="form-control">
                                            @foreach($local_variables_2 as $local_variable_2)
                                                <option value="{{ $local_variable_2->id }}">{{ $local_variable_2->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($local_2)
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset


                            @isset($local_3)
                                <div class="form-group row">
                                    <label for="{{ $local_3 }}" class="col-md-4 col-form-label text-md-right">{{ $locals_3}}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($local_3) }}" id="" class="form-control">
                                            @foreach($local_variables_3 as $local_variable_3)
                                                <option value="{{ $local_variable_3->id }}">{{ $local_variable_3->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($local_3)
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset


                            @isset($local_4)
                                <div class="form-group row">
                                    <label for="{{ $local_4 }}" class="col-md-4 col-form-label text-md-right">{{ $locals_4}}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($local_4) }}" id="" class="form-control">
                                            @foreach($local_variables_4 as $local_variable_4)
                                                <option value="{{ $local_variable_4->id }}">{{ $local_variable_4->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($local_4)
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset($local_5)
                                <div class="form-group row">
                                    <label for="{{ $local_5 }}" class="col-md-4 col-form-label text-md-right">{{ $locals_5}}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($local_5) }}" id="" class="form-control">
                                            @foreach($local_variables_5 as $local_variable_5)
                                                <option value="{{ $local_variable_5->id }}">{{ $local_variable_5->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($local_5)
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset($local_6)
                                <div class="form-group row">
                                    <label for="{{ $local_6 }}" class="col-md-4 col-form-label text-md-right">{{ $locals_6}}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($local_6) }}" id="" class="form-control">
                                            @foreach($local_variables_6 as $local_variable_6)
                                                <option value="{{ $local_variable_6->id }}">{{ $local_variable_6->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($local_6)
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset






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
