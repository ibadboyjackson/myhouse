@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('profile/message.edit') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update', auth()->user()->id) }}">
                            @csrf
                            @method('patch')

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.name') }}</label>
                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ auth()->user()->nom }}"  autocomplete="nom" autofocus>

                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.firstName') }}</label>
                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ auth()->user()->prenom }}"  autocomplete="prenom" >

                                    @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}"  autocomplete="email" >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.ville') }}</label>
                                <div class="col-md-6">
                                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ auth()->user()->ville  }}"  autocomplete="ville" >

                                    @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.pays') }}</label>
                                <div class="col-md-6">
                                    <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ auth()->user()->pays }}"  autocomplete="pays" >

                                    @error('pays')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.telephone') }}</label>
                                <div class="col-md-6">
                                    <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ auth()->user()->telephone }}"  autocomplete="telephone" >

                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            @if (auth()->user()->role_id != 4)

                                <div class="form-group row">
                                    <label for="site web" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.website') }}</label>
                                    <div class="col-md-6">
                                        <input id="site web" type="text" class="form-control @error('site_web') is-invalid @enderror" name="site_web" value="{{ auth()->user()->site_web  }}"  autocomplete="site_web" >

                                        @error('site_web')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="type_entreprise" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.type_entreprise') }}</label>
                                    <div class="col-md-6">
                                        <input id="type_entreprise" type="text" class="form-control @error('type_entreprise') is-invalid @enderror" name="type_entreprise" value="{{ auth()->user()->type_entreprise }}"  autocomplete="site_web" >

                                        @error('type_entreprise')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="siege_social" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.siege_social') }}</label>
                                    <div class="col-md-6">
                                        <input id="siege_social" type="text" class="form-control @error('siege_social') is-invalid @enderror" name="siege_social" value="{{ auth()->user()->siege_social }}"  autocomplete="siege_social" >

                                        @error('siege_social')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nom_entreprise" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.nom_entreprise') }}</label>
                                    <div class="col-md-6">
                                        <input id="nom_entreprise" type="text" class="form-control @error('nom_entreprise') is-invalid @enderror" name="nom_entreprise" value="{{ auth()->user()->nom_entreprise }}"  autocomplete="nom_entreprise" >

                                        @error('nom_entreprise')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address_postal" class="col-md-4 col-form-label text-md-right">{{ __('profile/message.address_postal') }}</label>
                                    <div class="col-md-6">
                                        <input id="address_postal" type="text" class="form-control @error('address_postal') is-invalid @enderror" name="address_postal" value="{{ auth()->user()->address_postal }}"  autocomplete="address_postal" >

                                        @error('address_postal')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                            @endif

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('profile/message.button') }}
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
