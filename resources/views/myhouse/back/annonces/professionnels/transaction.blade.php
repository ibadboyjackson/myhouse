@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/particulier/transaction.aa') }}
@stop

@section('content')

    @if (isset($id))
        <form action="{{ route('professionnel.update', ['id' => $id]) }}" method="post" id="transform">
            @csrf
            <div class="particulie">
                <div class="c-page">

                       <!-- @if (isset(auth()->user()->professionnel->last()->page) ? auth()->user()->professionnel->last()->page === 'transaction' : '')
                            <div class="transaction-block" id="transaction-block">
                                <div class="transaction-block-content">
                                    <div class="transaction-block-content-x" id="transaction-close">
                                        <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                    </div>
                                    <div class="transaction-block-content-title">Votre annonce est sauvegardée</div>
                                    <div class="transaction-block-content-body">
                                        Retrouvez l'annonce dans votre menu pour la <br> réactiver et continuer
                                    </div>
                                    <div class="transaction-block-content-hr"></div>
                                    <div class="transaction-bock-footer" id="transaction-closes">
                                        FERMER
                                    </div>
                                </div>
                            </div>
                        @endif -->


                @isset(auth()->user()->professionnel->last()->page)
                    @if (auth()->user()->professionnel->last()->page === 'transaction')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/professionnel/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ab') }} <br> {{ __('myhouse/back/annonces/professionnel/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endisset


                    <div class="ca-page">


                        <div class="ca-page-item">
                             @include('myhouse.back.annonces.modules.professionnel.left')

                        </div>



                        <div class="ca-page-item">
                            <div class="ca-page-item-seconds">

                            @include('myhouse.front.includes.backmessage')


                            @include('myhouse.back.annonces.modules.professionnel.progress')



                                <div class="ca-page-item-third-connexion">

                                    <div class="ca-page-item-third-tabs-box">

                                        <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                            {{ __('myhouse/back/annonces/particulier/transaction.ab') }}
                                        </div>
                                        <div class="ca-page-item-third-connexion-box-hr"></div>

                                        <div class="ca-page-item-third-tabs-box-body">
                                            <div class="ca-page-third-tabs-box">
                                                <div class="ca-page-third-tabs-box-ios-checkbox" style="margin-bottom: 8px;">

                                                    @if($professionnel->venteActif == 1)
                                                        <div class="ca-page-third-tabs-box-ios-checkbox-vente">
                                                            <input type="checkbox" class="ios" name ="venteActif" value="1" checked>
                                                        </div>
                                                    @else
                                                        <div class="ca-page-third-tabs-box-ios-checkbox-vente">
                                                            <input type="checkbox" class="ios" value="1" name ="venteActif">
                                                        </div>
                                                    @endif

                                                        @if($professionnel->locationActif == 1)
                                                            <div class="ca-page-third-tabs-box-ios-checkbox-location">
                                                                <input type="checkbox" class="ios" name ="locationActif" value="1" checked>
                                                            </div>
                                                        @else
                                                            <div class="ca-page-third-tabs-box-ios-checkbox-location">
                                                                <input type="checkbox" class="ios" name ="locationActif" value="1">
                                                            </div>
                                                        @endif

    



                                                    <input type="hidden" name="last_id" value="{{ 'A'. \Illuminate\Support\Str::random(16) }}">





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
                                                                        <img src="{{ asset('images/residential/achat.svg') }}" alt="" width="23" height="26">&nbsp;
                                                                        {{ __('myhouse/back/annonces/particulier/transaction.ac') }}
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
                                                                        {{ __('myhouse/back/annonces/particulier/transaction.ad') }}
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
                                                                        <input type="text" class="form-control @error('man1')man-red @enderror" placeholder="000." name="man1" value="{{ substr($professionnel->prix_vente, 0, 3) }}" maxlength="3" id="man-1">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" class="form-control @error('man2')man-red @enderror" placeholder="000." name="man2" value="{{ substr($professionnel->prix_vente, 3, 3) }}" maxlength="3" id="man-2">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" class="form-control @error('man3')man-red @enderror" placeholder="000." name="man3" value="{{ substr($professionnel->prix_vente, 6, 3) }}" maxlength="3" id="man-3">
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
                                                                            <input type="checkbox"  class="ios" name="vente_meuble" value="1" {{ $professionnel->vente_meuble == 1 ? 'checked' : '' }}>
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
                                                                            <input type="checkbox"  class="ios" name="loyerMois" {{ $professionnel->prix_mois != null ? 'checked' : '' }}>
                                                                        </div>
                                                                        <div style="padding-left: 13px;">MAD</div>
                                                                    </div>
                                                                    <div class="row sr justify-content-center">
                                                                        <div>
                                                                            <input type="text" name="loyerm1" value="{{ substr($professionnel->prix_mois, 0, 3) }}" class="form-control @error('loyerm1')man-red @enderror" placeholder="000." id = "loyerm1" maxlength="3">
                                                                        </div>
                                                                        <div>
                                                                            <input type="text" name="loyerm2" value="{{ substr($professionnel->prix_mois, 3, 3) }}" class="form-control @error('loyerm2')man-red @enderror" placeholder="000." id = "loyerm2" maxlength="3">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="second-shape">
                                                                    <div class="shape-box">
                                                                        <div class="shape-box-item">{{ __('myhouse/back/annonces/particulier/transaction.aj') }}</div>
                                                                        <div class="shape-box-item" style="padding-left: 13px;">
                                                                            <input type="checkbox" class="ios" name="loyerJour" {{ $professionnel->prix_jour != null ? 'checked' : '' }}>
                                                                        </div>
                                                                        <div style="padding-left: 13px;">MAD</div>
                                                                    </div>
                                                                    <div class="row sr justify-content-center">
                                                                        <div>
                                                                            <input type="text" name="loyerj1" value="{{ substr($professionnel->prix_jour, 0, 3) }}" class="form-control @error('loyerj1')man-red @enderror" placeholder="000." id="loyerj1" maxlength="3">
                                                                        </div>
                                                                        <div>
                                                                            <input type="text" name="loyerj2" value="{{ substr($professionnel->prix_jour, 3, 3) }}" class="form-control @error('loyerj2')man-red @enderror" placeholder="000." id="loyerj2" maxlength="3">
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
                                                                        <input type="checkbox" class="ios" name="charge" {{ $professionnel->charge_copropriete != null ? 'checked' : '' }}>
                                                                    </div>
                                                                </div>
                                                                <div class="row src justify-content-center">
                                                                    <div><input type="text" name="charge1" value="{{ substr($professionnel->charge_copropriete, 0, 3) }}" class="form-control @error('charge1')man-red @enderror" placeholder="000." id="charge1" maxlength="3"></div>
                                                                    <div><input type="text" name="charge2" value="{{ substr($professionnel->charge_copropriete, 3, 3) }}" class="form-control @error('charge2')man-red @enderror" placeholder="000." id="charge2" maxlength="3"></div>
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
                                                                                    <input type="checkbox" class="ios" value="1" name="location_longue_duree" {{ $professionnel->location_longue_duree == 1 ? 'checked' : '' }}>
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
                                                                                    <input type="checkbox" class="ios" value="1" name="location_courte_duree" {{ $professionnel->location_courte_duree == 1 ? 'checked' : '' }}>
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
                                                                                    <input type="checkbox" class="ios" value="1" name="location_etudiant" {{ $professionnel->location_etudiant == 1 ? 'checked' : '' }}>
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
                                                                                    <input type="checkbox" class="ios" value="1" name="colocation" {{ $professionnel->colocation == 1 ? 'checked' : '' }}>
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
                                                                                    <input type="checkbox" class="ios" value="1" name="location_meuble" {{ $professionnel->location_meuble == 1 ? 'checked' : '' }}>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </section>

                                                    </div>
                                                    <div class="text-center mt-5 mb-5">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/transaction.aw') }}</button>
                                                    </div>
                                                    <!-- /content -->
                                                </div>

                                            </div>
                                        </div>

                                    </div>
        </form>
        </form>
        </div>
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
                    {{ __('myhouse/back/annonces/particulier/transaction.ax') }}
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>
    @else
       <form action="{{ route('professionnel.types') }}" method="get" id="transform">
           <div class="particulie">
               <div class="c-page">





                   <div class="ca-page">


                       <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.professionnel.left')
                       </div>



                       <div class="ca-page-item">
                           <div class="ca-page-item-seconds">

                    @include('myhouse.front.includes.backmessage')


                    @include('myhouse.back.annonces.modules.professionnel.progress')



                               <div class="ca-page-item-third-connexion">

                                   <div class="ca-page-item-third-tabs-box">

                                       <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                           {{ __('myhouse/back/annonces/particulier/transaction.ab') }}
                                       </div>
                                       <div class="ca-page-item-third-connexion-box-hr"></div>

                                       <div class="ca-page-item-third-tabs-box-body">
                                           <div class="ca-page-third-tabs-box">
                                               <div class="ca-page-third-tabs-box-ios-checkbox" style="margin-bottom: 8px;">
                                                   <div class="ca-page-third-tabs-box-ios-checkbox-vente">
                                                       <input type="checkbox" class="ios" name ="venteActif" value="1">
                                                   </div>

                                                   <input type="hidden" name="last_id" value="{{ 'A'. \Illuminate\Support\Str::random(16) }}">

                                                   <div class="ca-page-third-tabs-box-ios-checkbox-location">
                                                       <input type="checkbox" class="ios" name ="locationActif" value="1">
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
                                                                        <img src="{{ asset('images/residential/achat.svg') }}" alt="" width="23" height="26">&nbsp;
                                                                        {{ __('myhouse/back/annonces/particulier/transaction.ac') }}
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
                                                                        {{ __('myhouse/back/annonces/particulier/transaction.ad') }}
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
                                                                       <input type="text" class="form-control @error('man1')man-red @enderror" placeholder="000." name="man1" value="{{ old('man1') }}" maxlength="3" id="man-1">
                                                                   </div>
                                                                   <div>
                                                                       <input type="text" class="form-control @error('man2')man-red @enderror" placeholder="000." name="man2" value="{{ old('man2') }}" maxlength="3" id="man-2">
                                                                   </div>
                                                                   <div>
                                                                       <input type="text" class="form-control @error('man3')man-red @enderror" placeholder="000." name="man3" value="{{ old('man3') }}" maxlength="3" id="man-3">
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
                                                                           <input type="checkbox"  class="ios" name="vente_meuble" value="1">
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
                                                                           <input type="text" name="loyerm1" value="{{ old('loyerm1') }}" class="form-control @error('loyerm1')man-red @enderror" placeholder="000." id = "loyerm1" maxlength="3">
                                                                       </div>
                                                                       <div>
                                                                           <input type="text" name="loyerm2" value="{{ old('loyerm2') }}" class="form-control @error('loyerm2')man-red @enderror" placeholder="000." id = "loyerm2" maxlength="3">
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
                                                                           <input type="text" name="loyerj1" value="{{ old('loyerj1') }}" class="form-control @error('loyerj1')man-red @enderror" placeholder="000." id="loyerj1" maxlength="3">
                                                                       </div>
                                                                       <div>
                                                                           <input type="text" name="loyerj2" value="{{ old('loyerj2') }}" class="form-control @error('loyerj2')man-red @enderror" placeholder="000." id="loyerj2" maxlength="3">
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
                                                                       <input type="checkbox" class="ios" name="charge">
                                                                   </div>
                                                               </div>
                                                               <div class="row src justify-content-center">
                                                                   <div><input type="text" name="charge1" value="{{ old('charge1') }}" class="form-control @error('charge1')man-red @enderror" placeholder="000." id="charge1" maxlength="3"></div>
                                                                   <div><input type="text" name="charge2" value="{{ old('charge2') }}" class="form-control @error('charge2')man-red @enderror" placeholder="000." id="charge2" maxlength="3"></div>
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
                                                   <div class="text-center mt-5 mb-5">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                       <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/transaction.aw') }}</button>
                                                   </div>
                                                   <!-- /content -->
                                               </div>

                                           </div>
                                       </div>

                                   </div>
       </form>
       </form>
       </div>
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
                   {{ __('myhouse/back/annonces/particulier/transaction.ax') }}
               </div>
           </div>
       </div>
       </div>
       </div>

       </div>
    @endif


@stop


@section('scripts')
    <script src="{{ asset('development/js/level.js') }}"></script>
    <script src="{{ asset('development/js/autotab.js') }}"></script>
@stop
