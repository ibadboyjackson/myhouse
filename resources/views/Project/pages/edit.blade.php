@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier ce projet immobilier</div>
                    <div class="card-body">
                        <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nomProjet">Nom du projet *</label>
                                        <input type="text" name="nomProjet" class="form-control @error('nomProjet') is-invalid @enderror" value="{{ $project->nomProjet }}">

                                        @error('nomProjet')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nomProjet">Nom de l'admininstrateur</label>
                                        <input type="text" name="nomAdministrateur" class="form-control @error('nomAdministrateur') is-invalid @enderror" value="{{ auth()->user()->nom }}">

                                        @error('nomAdministrateur')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dateAffiliation">Date d'Affiliation *</label>
                                <input type="date" name="dateAffiliation" class="form-control @error('dateAffiliation') is-invalid @enderror" value="{{ $project->dateAffiliation }}">

                                @error('dateAffiliation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="label">Label *</label>
                                <select name="label" id="" class="form-control @error('label') is-invalid @enderror">
                                    <option value="Haut-standing">Haut standing</option>
                                    <option value="Haut-standing">Middle standing</option>
                                </select>

                                @error('label')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="superficieProjet">Superficie du projet *</label>
                                <select name="superficieProjet" id="" class="form-control @error('superficieProjet') is-invalid @enderror">
                                    <option value="100">100 m²</option>
                                    <option value="200">200 m²</option>
                                    <option value="300">300 m²</option>
                                    <option value="400">400 m²</option>
                                    <option value="500">500 m²</option>
                                </select>

                                @error('superficieProjet')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombreImmeuble">Nombre d'immeuble</label>
                                        <select name="nombreImmeuble" id="" class="form-control">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombreAppartement">Nombre d'Appartement</label>
                                        <select name="nombreAppartement" id="" class="form-control">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombreTerrain">Nombre de terrain</label>
                                        <select name="nombreTerrain" id="" class="form-control">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombreVilla">Nombre de villa</label>
                                        <select name="nombreVilla" id="" class="form-control">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="budgetMin">Budget minimum *</label>
                                        <input type="text" name="budgetMin" class="form-control @error('budgetMin') is-invalid @enderror" placeholder="ex: 20000DH" value="{{ $project->budgetMin }}">


                                        @error('budgetMin')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="budgetMax">Budget maximum *</label>
                                        <input type="text" name="budgetMax" class="form-control @error('budgetMax') is-invalid @enderror" placeholder="ex: 20000DH" value="{{ $project->budgetMax }}">

                                        @error('budgetMax')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="addressePostale">Addresse Postale</label>
                                <input type="text" name="addressePostale" class="form-control" placeholder="ex:10 bd Mohammed V" value="{{ $project->addressePostale }}">
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="superficieMinVilla">Superficie minimale villa *</label>
                                        <input type="text" name="superficieMinVilla" class="form-control @error('superficieMinVilla') is-invalid @enderror" placeholder="ex: 200 m²" value="{{ $project->superficieMinVilla }}">

                                        @error('superficieMinVilla')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="superficieMaxVilla">Superficie maximale villa *</label>
                                        <input type="text" name="superficieMaxVilla" class="form-control  @error('superficieMaxVilla') is-invalid @enderror" placeholder="ex: 400 m²" value="{{ $project->superficieMaxVilla }}">

                                        @error('superficieMaxVilla')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="superficieMinTerrain">Superficie minimale terrain *</label>
                                        <input type="text" name="superficieMinTerrain" class="form-control @error('superficieMinTerrain') is-invalid @enderror" placeholder="ex: 200 m²" value="{{ $project->superficieMinTerrain }}">

                                        @error('superficieMinTerrain')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="superficieMaxTerrain">Superficie maximale terrain *</label>
                                        <input type="text" name="superficieMaxTerrain" class="form-control @error('superficieMaxTerrain') is-invalid @enderror" placeholder="ex: 400 m²" value="{{ $project->superficieMaxTerrain }}">

                                        @error('superficieMaxTerrain')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="superficieMinAppartement">Superficie minimale appartement *</label>
                                        <input type="text" name="superficieMinAppartement" class="form-control  @error('superficieMinAppartement') is-invalid @enderror" placeholder="ex: 200 m²" value="{{ $project->superficieMinAppartement }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="superficieMaxAppartement">Superficie maximale appartement *</label>
                                        <input type="text" name="superficieMaxAppartement" class="form-control @error('superficieMaxAppartement') is-invalid @enderror" placeholder="ex: 400 m²" value="{{ $project->superficieMaxAppartement }}">

                                        @error('superficieMaxAppartement')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="quartier">Quartier</label>
                                <select name="quartier_id" id="" class="form-control">
                                    <option value="1">Mohammedia</option>
                                    <option value="2">Ain sbaa</option>
                                    <option value="3">Maarif</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="piscineCollectiveAppart" id="piscineCollectiveAppart" {{ $project->piscineCollectiveAppart ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="piscineCollectiveAppart">Piscine collective appartement ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="piscineCollectiveVilla" id="piscineCollectiveVilla" {{ $project->piscineCollectiveVilla ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="piscineCollectiveVilla">Piscine collective villa ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="piscinePriveVilla" id="piscinePriveVilla" {{ $project->piscinePriveVilla ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="piscinePriveVilla">Piscine privée villa ?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="garage" id="garage" {{ $project->garage ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="garage">Garage ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="garage2place" id="garage2place" {{ $project->garage2place ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="garage2place">Garage 2 places ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="climatisation" id="climatisation" {{ $project->climatisation ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="climatisation">Climatisation ?</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="parking" id="parking" {{ $project->parking ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="parking">Parking ?</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="parking2place" id="parking2place" {{ $project->parking2place ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="parking2place">Parking 2 places ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="golf" id="golf" {{ $project->golf ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="golf">Golf ?</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="centreCommercial" id="centreCommercial" {{ $project->centreCommercial ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="centreCommercial">Centre commercial ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="hotel" id="hotel" {{ $project->hotel ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="hotel">Hotel ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="hammam" id="hammam" {{ $project->hammam ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="hammam">Hammam ?</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="terrainSport" id="terrainSport" {{ $project->terrainSport ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="terrainSport">Terrain de sport ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="restaurant" id="restaurant" {{ $project->restaurant ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="restaurant">Restaurant ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="salleFete" id="salleFete" {{ $project->salleFete ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="salleFete">Salle de fête ?</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="accesForet" id="accesForet" {{ $project->accesForet ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="accesForet">Accès forêt ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="surPlan" id="surPlan" {{ $project->surPlan ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="surPlan">Sur plan ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="salleConference" id="salleConference" {{ $project->salleConference ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="salleConference">Salle de conference ?</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="accesPlage" id="accesPlage" {{ $project->accesPlage ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="accesPlage">Accès plage ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="jardin" id="jardin" {{ $project->jardin ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="jardin">Jardin ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="gardiennage" id="gardiennage" {{ $project->gardiennage ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="gardiennage">Gardiennage ?</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="conciergerie" id="conciergerie" {{ $project->conciergerie ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="conciergerie">Conciergerie ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="blanchisserie" id="blanchisserie" {{ $project->blanchisserie ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="blanchisserie">Blanchisserie ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="shopping" id="shopping" {{ $project->shopping ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="shopping">Shopping ?</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="theatre" id="theatre" {{ $project->theatre ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="theatre">Theatre ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="ecole" id="ecole" {{ $project->ecole ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="ecole">Ecole ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="mosquee" id="mosquee" {{ $project->mosquee ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="mosquee">Mosquée ?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="videos">Image d'acceuil *</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('imageAcceuil') is-invalid @enderror" id="validatedCustomFile" name="imageAcceuil">

                                    @error('imageAcceuil')
                                    <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                    @enderror
                                    <label class="custom-file-label" for="imageAcceuil">Image d'acceuil...</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="videos">Ajouter des images</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="images[]" multiple>
                                            <label class="custom-file-label" for="images">clicker pour ajouter...</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="videos">Ajouter des vidéos</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"  name="videos[]" multiple>
                                            <label class="custom-file-label" for="videos">clicker pour ajouter...</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-lg" type="submit">Modifier</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
