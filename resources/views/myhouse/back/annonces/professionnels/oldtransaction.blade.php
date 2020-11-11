@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/transaction.aa') }}
@stop

@section('content')
    <div class="c-page">
        <div class="ca-page">
            <div class="ca-page-item">
                @include('myhouse.back.annonces.modules.professionnel.left')
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-seconds">

                    @include('myhouse.front.includes.backmessage')


                    @include('myhouse.back.annonces.modules.professionnel.progress')


                    @if(isset($id))
                        <form action="{{ route('professionnel.update', ['id' => $id]) }}" method="post">
                            @csrf
                    @else
                        <form action="{{ route('professionnel.types') }}" method="get">
                    @endif


                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-connexion-box">

                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                    {{ __('myhouse/back/annonces/professionnel/transaction.ab') }}
                                </div>
                                <div class="ca-page-item-third-connexion-box-title-hr"></div>

                            </div>
                        </div>

                        <div class="ca-page-item-second-subscription">
                            <div class="ca-page-item-second-body">
                                <div class="ca-page-item-second-bodie-box">
                                    <div class="ca-page-third-tabs-box">
                                        <div class="ca-page-third-tabs-box-ios-checkbox" style="margin-bottom: 8px;">
                                            <div class="ca-page-third-tabs-box-ios-checkbox-vente">
                                                <label for="vente"></label>
                                                <input type="checkbox" name ="venteActif" id="vente" class="ios" value="1">
                                            </div>

                                            <input type="hidden" name="last_id" value="{{ 'a'. \Illuminate\Support\Str::random(16) }}">

                                            <div class="ca-page-third-tabs-box-ios-checkbox-location">
                                                <label for="location"></label>
                                                <input type="checkbox" id="location" name="locationActif" class="ios" value="1">
                                            </div>
                                        </div>
                                        <div class="tabs tabs-style-shape">
                                            <nav>
                                                <ul>
                                                    <li>
                                                        <a href="#section-shape-1" class="text-decoration-none">
                                                            <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                                <use xlink:href="#tabshape"></use>
                                                            </svg>
                                                            <span>
                                                        <img src="{{ asset('images/residential/achat.svg') }}" alt="" width="20" height="23">&nbsp;
                                                         {{ __('myhouse/back/annonces/professionnel/transaction.ac') }}
                                                    </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#section-shape-2" class="text-decoration-none">
                                                            <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                                <use xlink:href="#tabshape"></use>
                                                            </svg>
                                                            <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                                <use xlink:href="#tabshape"></use>
                                                            </svg>
                                                            <span>
                                                        <img src="{{ asset('images/residential/location.svg') }}" alt="" width="20" height="23">&nbsp;
                                                        {{ __('myhouse/back/annonces/professionnel/transaction.ad') }}
                                                    </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="content-wrap">
                                                <section id="section-shape-1">

                                                    <div class="first-shape-1">
                                                        {{ __('myhouse/back/annonces/particulier/transaction.af') }}
                                                        <div class="row sr justify-content-center align-items-center">
                                                            <div>
                                                                <input type="text" class="form-control @error('man1')man-red @enderror" placeholder="000." name="man1" maxlength="3" id="man-1">
                                                            </div>
                                                            <div>
                                                                <input type="text" class="form-control @error('man2')man-red @enderror" placeholder="000." name="man2" maxlength="3" id="man-2">
                                                            </div>
                                                            <div>
                                                                <input type="text" class="form-control @error('man3')man-red @enderror" placeholder="000." name="man3" maxlength="3" id="man-3">
                                                            </div>
                                                            <div class="with-mad text-uppercase">mad</div>
                                                        </div>
                                                        <div class="first-shape-content">
                                                            {{ __('myhouse/back/annonces/particulier/transaction.ag') }}
                                                            <div class="first-shape-content-box">
                                                                <div class="first-shape-content-box-text">
                                                                    {{ __('myhouse/back/annonces/particulier/transaction.ah') }}
                                                                </div>
                                                                <div class="first-shape-content-box-checkbox">
                                                                    <input type="checkbox"  class="ios" name="vente_meuble">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </section>
                                                <section id="section-shape-2">

                                                    <div class="row justify-content-around pl-5 pr-5">
                                                        <div class="second-shape">
                                                            <div class="shape-box">
                                                                <div class="shape-box-item">{{ __('myhouse/back/annonces/particulier/transaction.ai') }}</div>
                                                                <div style="padding-left: 12px;" class="shape-box-item">
                                                                    <input type="checkbox"  class="ios" name="loyerMois">
                                                                </div>
                                                                <div style="padding-left: 13px;">MAD</div>
                                                            </div>
                                                            <div class="row sr justify-content-center">
                                                                <div>
                                                                    <input type="text" name="loyerm1" class="form-control @error('loyerm1')man-red @enderror" placeholder="000." id = "loyerm1" maxlength="3">
                                                                </div>
                                                                <div>
                                                                    <input type="text" name="loyerm2" class="form-control @error('loyerm2')man-red @enderror" placeholder="000." id = "loyerm2" maxlength="3">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="second-shape">
                                                            <div class="shape-box">
                                                                <div class="shape-box-item">{{ __('myhouse/back/annonces/particulier/transaction.aj') }}</div>
                                                                <div class="shape-box-item" style="padding-left: 13px;">
                                                                    <input type="checkbox" class="ios" name="loyerJour">
                                                                </div>
                                                                <div style="padding-left: 13px;">MAD</div>
                                                            </div>
                                                            <div class="row sr justify-content-center">
                                                                <div>
                                                                    <input type="text" name="loyerj1" class="form-control @error('loyerj1')man-red @enderror" placeholder="000." id="loyerj1" maxlength="3">
                                                                </div>
                                                                <div>
                                                                    <input type="text" name="loyerj2" class="form-control @error('loyerj2')man-red @enderror" placeholder="000." id="loyerj2" maxlength="3">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="second-shape pt-58">
                                                        <div class="row justify-content-center">
                                                            <div>
                                                                {{ __('myhouse/back/annonces/particulier/transaction.ak') }}
                                                            </div>
                                                            <div class="pt-1 pl-4">
                                                                <input type="checkbox" class="ios" name="charge" value="1">
                                                            </div>
                                                        </div>
                                                        <div class="row src justify-content-center">
                                                            <div><input type="text" name="charge1" class="form-control @error('charge1')man-red @enderror" placeholder="000." id="charge1" maxlength="3"></div>
                                                            <div><input type="text" name="charge2" class="form-control @error('charge2')man-red @enderror" placeholder="000." id="charge2" maxlength="3"></div>
                                                            <div style="padding-top: 7px;">MAD</div>
                                                        </div>
                                                    </div>
                                                    <div class="third-shape pt-67 pb-78">
                                                        {{ __('myhouse/back/annonces/particulier/transaction.al') }}
                                                        <div class="row px-2 pt-18">
                                                            <div class="col-md-6">
                                                                <div class="shape-content">
                                                                    <div class="d-flex px-2 justify-content-between">
                                                                        <div class="s-left">
                                                                            {{ __('myhouse/back/annonces/particulier/transaction.am') }}
                                                                        </div>
                                                                        <div class="s-right">
                                                                            <input type="checkbox" class="ios" name="location_longue_duree" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="shape-content">
                                                                    <div class="d-flex px-2 justify-content-between">
                                                                        <div class="s-left">
                                                                            {{ __('myhouse/back/annonces/particulier/transaction.an') }}
                                                                        </div>
                                                                        <div class="s-right">
                                                                            <input type="checkbox" class="ios" name="location_courte_duree" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row px-2 pt-44">
                                                            <div class="col-md-6">
                                                                <div class="shape-content">
                                                                    <div class="d-flex px-2 justify-content-between">
                                                                        <div class="s-left">
                                                                            {{ __('myhouse/back/annonces/particulier/transaction.ao') }}
                                                                        </div>
                                                                        <div class="s-right">
                                                                            <input type="checkbox" class="ios" name="location_etudiant" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="shape-content">
                                                                    <div class="d-flex px-2 justify-content-between">
                                                                        <div class="s-left">
                                                                            {{ __('myhouse/back/annonces/particulier/transaction.ap') }}
                                                                        </div>
                                                                        <div class="s-right">
                                                                            <input type="checkbox" class="ios" name="colocation" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row px-2 pt-44">
                                                            <div class="col-md-6">
                                                                <div class="shape-content">
                                                                    <div class="d-flex px-2 justify-content-between">
                                                                        <div class="s-left">
                                                                            {{ __('myhouse/back/annonces/particulier/transaction.aq') }}
                                                                        </div>
                                                                        <div class="s-right">
                                                                            <input type="checkbox" class="ios" name="location_meuble" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </section>
                                            </div>
                                            <!-- /content -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="ca-page-item-second-footer">
                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>
                                <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/professionnel/transaction.aq') }}</button>
                            </div>

                        </div>

                    </form>



                </div>
            </div>


            
            <div class="ca-page-item">
                <div class="ca-page-item-third">
     
                    <a href="{{ $url }}">
                        <div class="ca-page-item-third-button-x clearfix">
                             <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                        </div>
                    </a>


                    <div class="ca-page-item-third-thumb">
                        <img src="{{ asset('images/residential/single/trans.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        {{ __('myhouse/back/annonces/professionnel/transaction.ar') }} <br>
                        {{ __('myhouse/back/annonces/professionnel/transaction.as') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('scripts')
    <script src="{{ asset('development/js/level.js') }}"></script>
    <script src="{{ asset('development/js/autotab.js') }}"></script>
@stop
