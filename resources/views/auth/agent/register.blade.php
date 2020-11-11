@extends('layouts.app')

@section('content')
    <div class="container">
        @include('myhouse.front.includes.messages')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('agent.register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('agent.register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('agent.name') }}</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror " name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type_entreprise" class="col-md-4 col-form-label text-md-right">{{ __('agent.type') }}</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control @error('type_entreprise') is-invalid @enderror" name="type_entreprise" value="{{ old('type_entreprise') }}" required autocomplete="type_entreprise">

                                    @error('type_entreprise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="siege_social" class="col-md-4 col-form-label text-md-right">{{ __('agent.social') }}</label>

                                <div class="col-md-6">
                                    <input id="siege_social" type="text" class="form-control @error('siege_social') is-invalid @enderror" name="siege_social" value="{{ old('siege_social') }}" required autocomplete="siege_social">

                                    @error('siege_social')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('agent.email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('agent.phone') }}</label>
                                <div class="col-md-6">
                                    <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="site_web" class="col-md-4 col-form-label text-md-right">{{ __('agent.website') }}</label>
                                <div class="col-md-6">
                                    <input id="site_web" type="text" class="form-control @error('site_web') is-invalid @enderror" name="site_web" value="{{ old('site_web') }}" required autocomplete="site_web" placeholder="ex: www.site.com">

                                    @error('site_web')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address_postal" class="col-md-4 col-form-label text-md-right">{{ __('agent.postal_address') }}</label>
                                <div class="col-md-6">
                                    <input id="address_postal" type="text" class="form-control @error('address_postal') is-invalid @enderror" name="address_postal" value="{{ old('address_postal') }}" required autocomplete="address_postal" placeholder="ex: 2500">

                                    @error('address_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nom_dirigent" class="col-md-4 col-form-label text-md-right">{{ __('agent.lead_name') }}</label>
                                <div class="col-md-6">
                                    <input id="nom_dirigent" type="text" class="form-control @error('nom_dirigent') is-invalid @enderror" name="nom_dirigent" value="{{ old('nom_dirigent') }}" required autocomplete="nom_dirigent">

                                    @error('nom_dirigent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fonction_dirigent" class="col-md-4 col-form-label text-md-right">{{ __('agent.lead_function') }}</label>
                                <div class="col-md-6">
                                    <input id="fonction_dirigent" type="text" class="form-control @error('fonction_dirigent') is-invalid @enderror" name="fonction_dirigent" value="{{ old('fonction_dirigent') }}" required autocomplete="fonction_dirigent">

                                    @error('fonction_dirigent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="affiliation_web" class="col-md-4 col-form-label text-md-right">{{ __('agent.affiliate_habit') }}</label>
                                <div class="col-md-6">
                                    <select name="affiliation_web" id="affiliation_web" class="form-control">
                                        <option value="1">Oui</option>
                                        <option value="0">Non</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="habit_affiliation" class="col-md-4 col-form-label text-md-right">{{ __('agent.adds_habit') }}</label>
                                <div class="col-md-6">
                                    <select name="habit_affiliation" id="habit_affiliation" class="form-control">
                                        <option value="1">Oui</option>
                                        <option value="0">Non</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('agent.password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('agent.confirm') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('agent.show') }}
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
