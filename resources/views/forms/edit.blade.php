@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ $title }} </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route($route_name, $local->id) }}">
                            @csrf
                            @method('patch')

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right"> {{ $name }} </label>
                                <div class="col-md-6">

                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $local->nom }}"  autocomplete="nom" autofocus>

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
                                        <input id="lat" type="text" class="form-control @error('lat') is-invalid @enderror" name="lat" value="{{ $local->lat  }}"  autocomplete="lat">
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
                                        <input id="long" type="text" class="form-control @error('long') is-invalid @enderror" name="long" value="{{ $local->long  }}"  autocomplete="long">
                                        @error('long')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset($location)
                                <div class="form-group row">
                                    <label for="{{ $location }}" class="col-md-4 col-form-label text-md-right">{{ $locations }}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($location) }}" id="" class="form-control">
                                            @foreach($location_variables as $location_variable)
                                                <option value="{{ $location_variable->id }}">{{ $location_variable->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($location)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset


                            @isset($location_2)
                                <div class="form-group row">
                                    <label for="{{ $location_2 }}" class="col-md-4 col-form-label text-md-right">{{ $locations_2 }}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($location_2) }}" id="" class="form-control">
                                            @foreach($location_variables_2 as $location_variable_2)
                                                <option value="{{ $location_variable_2->id }}">{{ $location_variable_2->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($location_2)
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset($location_3)
                                <div class="form-group row">
                                    <label for="{{ $location_3 }}" class="col-md-4 col-form-label text-md-right">{{ $locations_3 }}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($location_3) }}" id="" class="form-control">
                                            @foreach($location_variables_3 as $location_variable_3)
                                                <option value="{{ $location_variable_3->id }}">{{ $location_variable_3->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($location_3)
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset($location_4)
                                <div class="form-group row">
                                    <label for="{{ $location_4 }}" class="col-md-4 col-form-label text-md-right">{{ $locations_4 }}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($location_4) }}" id="" class="form-control">
                                            @foreach($location_variables_4 as $location_variable_4)
                                                <option value="{{ $location_variable_4->id }}">{{ $location_variable_4->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($location_4)
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset($location_5)
                                <div class="form-group row">
                                    <label for="{{ $location_5 }}" class="col-md-4 col-form-label text-md-right">{{ $locations_5 }}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($location_5) }}" id="" class="form-control">
                                            @foreach($location_variables_5 as $location_variable_5)
                                                <option value="{{ $location_variable_5->id }}">{{ $location_variable_5->nom }}</option>
                                            @endforeach
                                        </select>

                                        @error($location_5)
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset

                            @isset($location_6)
                                <div class="form-group row">
                                    <label for="{{ $location_6 }}" class="col-md-4 col-form-label text-md-right">{{ $locations_6 }}</label>
                                    <div class="col-md-6">
                                        <select name="{{ strtolower($location_6) }}" id="" class="form-control">

                                            @foreach($location_variables_6 as $location_variable_6)
                                                <option value="{{ $location_variable_6->id }}">{{ $location_variable_6->nom }}</option>
                                            @endforeach

                                        </select>

                                        @error($location_6)
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
