@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/particulier/transaction.aa') }}
@stop

@section('content')


<div style="position: relative;">

    @include('myhouse.front.includes.transmessage')


    @if (isset($id))

        <form action="{{ route('particulier.update', $id) }}" method="get" id="transform">
            <div class="particulier">
                <div class="c-page">

                        @if (isset(auth()->user()->particulier->last()->page) ? auth()->user()->particulier->last()->page === 'transaction' : '')
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
                        @endif


                    <div class="ca-page">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.particulier.left')
                        </div>



                        <div class="ca-page-item">
                            <div class="ca-page-item-second">


                                @include('myhouse.back.annonces.modules.particulier.progress')


                                <div class="ca-page-item-third-connexion">

                                    <div class="ca-page-item-third-tabs-box">

                                        <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                            {{ __('myhouse/back/annonces/particulier/transaction.ab') }}
                                        </div>
                                        <div class="ca-page-item-third-connexion-box-hr"></div>

                                        <div class="ca-page-item-third-tabs-box-body">
                                            <div class="ca-page-third-tabs-box">
                                                <div class="ca-page-third-tabs-box-ios-checkbox" style="margin-bottom: 8px;">

                                                    @if($particulier->venteActif == 1)
                                                        <div class="ca-page-third-tabs-box-ios-checkbox-vente">
                                                            <input {{ old('venteActif') != null ? 'checked' : '' }} type="checkbox" class="ios" id="voom4" name ="venteActif" checked value="1" @error ('prix_vente') checked @enderror @error ('prix_m') checked @enderror>
                                                        </div>
                                                    @else
                                                        <div class="ca-page-third-tabs-box-ios-checkbox-vente">
                                                            <input {{ old('venteActif') != null ? 'checked' : '' }} type="checkbox" class="ios" id="voom4" name ="venteActif" value="1" @error ('prix_vente') checked @enderror @error ('prix_m') checked @enderror>
                                                        </div>
                                                    @endif

                                                        @if($particulier->locationActif == 1)
                                                            <div class="ca-page-third-tabs-box-ios-checkbox-location">
                                                                <input {{ old('locationActif') != null ? 'checked' : '' }} type="checkbox" class="ios" id="voom5" name ="locationActif" value="1" checked @error ('prix_mois') checked @enderror @error ('prix_jour') checked @enderror>
                                                            </div>
                                                        @else
                                                            <div class="ca-page-third-tabs-box-ios-checkbox-location">
                                                                <input {{ old('locationActif') != null ? 'checked' : '' }} type="checkbox" class="ios" id="voom5" name ="locationActif" value="1" @error ('prix_mois') checked @enderror @error ('prix_jour') checked @enderror>
                                                            </div>
                                                        @endif

                                                        @if($particulier->echangeActif == 1)
                                                            <div class="ca-page-third-tabs-box-ios-checkbox-echange">
                                                                <input {{ old('echangeActif') != null ? 'checked' : '' }} type="checkbox" class="ios" id="voom6" name ="echangeActif" value="1" checked @error ('echange_definitif') checked @enderror @error ('echange_provisoir') checked @enderror @error ('echange_periode_un') checked @enderror @error ('echange_periode_deux') checked @enderror>
                                                            </div>
                                                        @else
                                                            <div class="ca-page-third-tabs-box-ios-checkbox-echange">
                                                                <input {{ old('echangeActif') != null ? 'checked' : '' }} type="checkbox" class="ios" id="voom6" name ="echangeActif" value="1" @error ('echange_definitif') checked @enderror @error ('echange_provisoir') checked @enderror @error ('echange_periode_un') checked @enderror @error ('echange_periode_deux') checked @enderror>
                                                            </div>
                                                        @endif



                                                    <input type="hidden" name="last_id" value="{{ 'A'. \Illuminate\Support\Str::random(16) }}">


                                                </div>

                                                <div class="tabs tabs-style-shape">
                                                    <nav>
                                                        <ul>
                                                            <li id="vega4">
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
                                                            <li id="vega5">
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
                                                            <li id="vega6">
                                                                <a href="#section-shape-3"  class="text-decoration-none">
                                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                                        <use xlink:href="#tabshape"></use>
                                                                    </svg>
                                                                    <span>
                                                                        <img src="{{ asset('images/residential/echange.svg') }}" alt="" width="20" height="23"> &nbsp;
                                                                        {{ __('myhouse/back/annonces/particulier/transaction.ae') }}
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>

                                                    


                                                   <div class="content-wrap">
                                                       
                                                       <section id="section-shape-4">
                                                           <div class="first-shape-1">
                                                               
                                                               <div class="row sr justify-content-center align-items-center">

                                                                   <div>
                                                                       <span style="font-weight: bold">{{ __('myhouse/back/annonces/particulier/transaction.af') }}</span>
                                                                       <input type="text" class="form-control darkest @error('prix_vente')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="prix_vente" value="{{ $particulier->prix_vente }}" maxlength="9">
                                                                   </div>
                                                                                                          
                                                                   <div class="with-mad text-uppercase" style="padding-top: 28px; font-size: 14px;">mad</div>
                                                               
                                                               </div>



                                                                                                                              
                                                               <div class="row sr justify-content-center align-items-center">
                                                               
                                                                   <div style="padding-top: 40px;" class="fermo">
                                                                       
                                                                       <span style="font-weight: bold;">{{ __('myhouse/back/annonces/particulier/transaction.az') }}</span> {{ __('myhouse/back/annonces/particulier/transaction.aab') }}

                                                                       <input type="text" class="form-control darkers @error('prix_m')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="prix_m" value="{{ $particulier->prix_m }}" maxlength="9">
                                                                   </div>
                                                                                                          
                                                                   <div class="with-mad text-uppercase" style="padding-top: 71px; font-size: 14px;">mad</div>
                                                               
                                                               </div>



                                                           </div>
                                                       </section>

                                                       <section id="section-shape-5">

                                                           <div class="row justify-content-around pl-5 pr-5">
                                                               
                                                               <div class="second-shape">
                                                                   
                                                                   
                                                                   <div class="shape-box">
                                                                       <div class="shape-box-item">{{ __('myhouse/back/annonces/particulier/transaction.ai') }}</div>
                                                                       <div style="padding-left: 12px;" class="shape-box-item">
                                                                           <input type="checkbox"  class="ios" name="loyerMois" id="without-me" {{ $particulier->prix_mois ? 'checked' : '' }}>
                                                                       </div>
                                                                       <!-- <div style="padding-left: 13px; font-size: 14px;"> MAD </div> -->
                                                                   </div>
                                                                                                                                                                                                 
                                                                    <div class="row sr justify-content-center align-items-center">
                                                                    
                                                                        <div style="padding-top: 12px;" class="fermo">
                                                                            <input type="text" id = "prix_mois" class="form-control darkers @error('prix_mois')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="prix_mois" value="{{ $particulier->prix_mois }}" maxlength="9">
                                                                        </div>
                                                                                                                
                                                                        <div class="with-mad text-uppercase" style="padding-top: 13px; font-size: 14px;">mad</div>
                                                                    
                                                                    </div>

                                                               </div>


                                                               <div class="second-shape">
                                                                   <div class="shape-box">
                                                                       <div class="shape-box-item">{{ __('myhouse/back/annonces/particulier/transaction.aj') }}</div>
                                                                       <div class="shape-box-item" style="padding-left: 13px;">
                                                                           <input type="checkbox" id = "with-me" class="ios" name="loyerJour" {{ $particulier->prix_jour ? 'checked' : '' }}>
                                                                       </div>
                                                                       <!-- <div style="padding-left: 13px;"> MAD </div> -->
                                                                   </div>


                                                                    <div class="row sr justify-content-center align-items-center">
                                                                    
                                                                        <div style="padding-top: 12px;" class="fermo">
                                                                            <input type="text" id = "prix_jour" class="form-control darkers @error('prix_jour')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="prix_jour" value="{{ $particulier->prix_jour }}" maxlength="9">
                                                                        </div>
                                                                                                                
                                                                        <div class="with-mad text-uppercase" style="padding-top: 13px; font-size: 14px;">mad</div>
                                                                    
                                                                    </div>


                                                               </div>

                                                           </div>

                                                           <div class="row" style="margin-top: 39px; margin-bottom: 25px;">

                                                                <div class="col-md-7">



                                                                        
                                                                <div class="second-shape pt-0 wagon {{ $particulier->prix_mois ? 'silent' : '' }} " style = "border-radius: 30px; border: 1px solid #B0DBD7;" id ="you-cant">


                                                                                                                                       
                                                   

                                                                            
                                                                            
                                                                            <div class="row justify-content-center" style="padding-top: 13px; padding-left: 21px">
                                                                                <div style="font-size: 15px;">
                                                                                    {{ __('myhouse/back/annonces/particulier/transaction.ak') }}
                                                                                </div>
                                                                                <div class="pt-1 pl-4">
                                                                                    <!-- <input type="checkbox" class="ios" name="charge"> -->
                                                                                </div> 
                                                                            </div>
                                                                            

                                                                            <div class="row justify-content-center" style="padding-top: 16px; padding-right: 74px;">

                                                                                    <div style="width: 94px; padding-right: 23px; font-size: 16px;">
                                                                                    

                                                                                        <div class="sort-around-around">
                                                                                            <input type="radio" id="charge_oui" name="charges" value="oui" {{ old("charges") ? '' : 'checked' }}>
                                                                                            <label for="charge_oui">{{ __('myhouse/back/annonces/particulier/transaction.aac') }}</label>
                                                                                        </div>


                                                                                    </div>

                                                                                    <div style="padding-right: 20px; font-size: 16px;">

                                                                                        <div class="sort-around-around">
                                                                                            <input type="radio" id="charge_non" name="charges" value="non" {{ old("charges") ? 'checked' : '' }}>
                                                                                            <label for="charge_non">{{ __('myhouse/back/annonces/particulier/transaction.aad') }}</label>
                                                                                        </div>

                                                                                    </div>

                                                                            </div>


                                                                            <div class="row src justify-content-center pt-0" style="padding-bottom: 20px;">

                                                                                    <div style="width: 94px;">
                                                                                
                                                                                    </div>

                                                                                    <div class="d-flex align-items-center">
                                                                                        
                                                                                        <div style="padding-top: 12px;" class="fermo">
                                                                                            <input type="text" id = "charges_copropriete" class="form-control @error('charge_copropriete')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="charge_copropriete" value="{{ old('charge_copropriete') }}">
                                                                                        </div>

                                                                                        <div class="with-mad text-uppercase" style="padding-top: 13px; font-size: 14px;">mad</div>
                                                                                    </div>

                                                                            </div> 



                                                                </div>



                                                                


                                                                <div class="col-md-4">
                                                                </div>

                                                           </div>



                                                       </section>


                                                       <section id="section-shape-6">
                                                           <div class="fourth-shape">
                                                               <div class="row">
                                                                   <div class="col-md-6">
                                                                       <div>
                                                                           <label for="">
                                                                               <input type="checkbox" name="echange_definitif" value="1" {{ $particulier->echange_definitif ? 'checked' : '' }}>
                                                                               {{ __('myhouse/back/annonces/particulier/transaction.ar') }}
                                                                           </label>
                                                                       </div>
                                                                       <div class="st">
                                                                           <label for="">
                                                                               <input type="checkbox" id = "must-use-me" name="echange_provisoir" value="1" {{ $particulier->echange_provisoir ? 'checked' : '' }}>
                                                                               {{ __('myhouse/back/annonces/particulier/transaction.as') }}
                                                                           </label>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-md-6">
                                                                       <div class="">
                                                                           <div class="fifth-shape">
                                                                               <span class="tt">{{ __('myhouse/back/annonces/particulier/transaction.at') }}</span>
                                                                               <div class="row sff">
                                                                                   <input type="text" id = "periode-un" class="form-control sf darkest @error('echange_periode_un')man-red @enderror" maxlength="10" placeholder="jj/mm/aaaa" name="echange_periode_un" value="{{ $particulier->echange_provisoir == 0 ? '' : str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_un)->format('d m Y'))  }}">
                                                                                   <input type="text" id = "periode-deux"  class="form-control sf darkest @error('echange_periode_deux')man-red  @enderror" maxlength="10"  placeholder="jj/mm/aaaa" name="echange_periode_deux" value="{{ $particulier->echange_provisoir == 0 ? '' : str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_deux)->format('d m Y')) }}">
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>


                                                           </div>
                                                       </section>



                                                   </div> <!-- imported -->





                                                    <div class="text-center mt-5">
                                                        <a href="{{ route('particulier.service') }}" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase" id = "btn-dark">{{ __('myhouse/back/annonces/particulier/transaction.aw') }}</button>
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

               <a href="{{ $url }}">
                   <div class="menu-wrap-x-buttons">
                       <img src="{{ asset('images/residential/single/x.svg') }}" alt="" class="float-right">
                   </div>
               </a>

            <div class="ca-page-item-third">


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
       <form action="{{ route('particulier.type') }}" method="get" id="transform">
           <div class="particulier">
               <div class="c-page">


                   @if (isset(auth()->user()->particulier->last()->page) === 'transaction'  && isset($id))
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
                   @endif



                   <div class="ca-page">


                       <div class="ca-page-item">
                           @include('myhouse.back.annonces.modules.particulier.left')
                       </div>



                       <div class="ca-page-item">
                           <div class="ca-page-item-second">

                               


                               @include('myhouse.back.annonces.modules.particulier.progress')


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
                                                       <input {{ old('venteActif') != null ? 'checked' : '' }} type="checkbox" class="ios" id="voom1" name ="venteActif" value="1" @error ('prix_vente') checked @enderror @error ('prix_m') checked @enderror>
                                                   </div>

                                                   <input type="hidden" name="last_id" value="{{ 'A'. \Illuminate\Support\Str::random(16) }}">

                                                   <div class="ca-page-third-tabs-box-ios-checkbox-location">
                                                       <input {{ old('locationActif') != null ? 'checked' : '' }} type="checkbox" class="ios" id="voom2" name ="locationActif" value="1" @error ('prix_mois') checked @enderror @error ('prix_jour') checked @enderror>
                                                   </div>
                                                   <div class="ca-page-third-tabs-box-ios-checkbox-echange">
                                                       <input {{ old('echangeActif') != null ? 'checked' : '' }} type="checkbox" class="ios" id="voom3" name ="echangeActif" value="1" @error ('echange_definitif') checked @enderror @error ('echange_provisoir') checked @enderror @error ('echange_periode_un') checked @enderror @error ('echange_periode_deux') checked @enderror>
                                                   </div>
                                               </div>
                                               <div class="tabs tabs-style-shape">

                                                   <nav>
                                                       <ul>
                                                           <li id="vega1">
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
                                                           <li id="vega2">
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
                                                           <li id="vega3">
                                                               <a href="#section-shape-3"  class="text-decoration-none">
                                                                   <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                                       <use xlink:href="#tabshape"></use>
                                                                   </svg>
                                                                   <span>
                                                                        <img src="{{ asset('images/residential/echange.svg') }}" alt="" width="20" height="23"> &nbsp;
                                                                        {{ __('myhouse/back/annonces/particulier/transaction.ae') }}
                                                                   </span>
                                                               </a>
                                                           </li>
                                                       </ul>
                                                   </nav>


                                                   <div class="content-wrap">
                                                       
                                                       <section id="section-shape-1">
                                                           <div class="first-shape-1">
                                                               
                                                               <div class="row sr justify-content-center align-items-center">

                                                                   <div>
                                                                       <span style="font-weight: bold">{{ __('myhouse/back/annonces/particulier/transaction.af') }}</span>
                                                                       <input type="text" class="form-control darkest @error('prix_vente')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="prix_vente" value="{{ old('prix_vente') }}">
                                                                   </div>
                                                                                                          
                                                                   <div class="with-mad text-uppercase" style="padding-top: 28px; font-size: 14px;">mad</div>
                                                               
                                                               </div>



                                                                                                                              
                                                               <div class="row sr justify-content-center align-items-center">
                                                               
                                                                   <div style="padding-top: 40px;" class="fermo">
                                                                       
                                                                       <span style="font-weight: bold;">{{ __('myhouse/back/annonces/particulier/transaction.az') }}</span> {{ __('myhouse/back/annonces/particulier/transaction.aab') }}

                                                                       <input type="text" class="form-control darkest @error('prix_m')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="prix_m" value="{{ old('prix_m') }}">
                                                                   </div>
                                                                                                          
                                                                   <div class="with-mad text-uppercase" style="padding-top: 71px; font-size: 14px;">mad</div>
                                                               
                                                               </div>


                                                               <!--<div class="first-shape-content">
                                                                   {{ __('myhouse/back/annonces/particulier/transaction.ag') }}
                                                                   <div class="first-shape-content-box">
                                                                       <div class="first-shape-content-box-text">
                                                                           {{ __('myhouse/back/annonces/particulier/transaction.ah') }}
                                                                       </div>
                                                                       <div class="first-shape-content-box-checkbox">
                                                                           <input type="checkbox"  class="ios" name="vente_meuble" value="1">
                                                                       </div>
                                                                   </div>
                                                               </div> -->


                                                           </div>
                                                       </section>

                                                       <section id="section-shape-2">

                                                           <div class="row justify-content-around pl-5 pr-5">
                                                               
                                                               <div class="second-shape">
                                                                   
                                                                   
                                                                   <div class="shape-box">

                                                                       <div class="shape-box-item" style="font-weight: bold">{{ __('myhouse/back/annonces/particulier/transaction.ai') }}</div>
                                                                       <div style="padding-left: 12px;" class="shape-box-item">
                                                                           <input type="checkbox"  class="ios" name="loyerMois" id="without-me" @error ('prix_mois') checked @enderror {{ old('loyerMois') != null ? 'checked' : '' }}>
                                                                       </div>
                                                                       <!-- <div style="padding-left: 13px; font-size: 14px;"> MAD </div> -->
                                                                  
                                                                   </div>
                                                                                                                                                                                                 
                                                                    <div class="row sr justify-content-center align-items-center">
                                                                    
                                                                        <div style="padding-top: 12px;" class="fermo">
                                                                            <input type="text" id = "prix_mois" class="form-control darkest @error('prix_mois')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="prix_mois" value="{{ old('prix_mois') }}">
                                                                        </div>
                                                                                                                
                                                                        <div class="with-mad text-uppercase" style="padding-top: 13px; font-size: 14px;">mad</div>
                                                                    
                                                                    </div>


                                                               </div>

                                                               <div class="second-shape">
                                                                   <div class="shape-box">
                                                                       <div class="shape-box-item" style="font-weight: bold">{{ __('myhouse/back/annonces/particulier/transaction.aj') }}</div>
                                                                       <div class="shape-box-item" style="padding-left: 13px;">
                                                                           <input type="checkbox" id = "with-me" class="ios" name="loyerJour"  @error ('prix_jour') checked @enderror {{ old('loyerJour') != null ? 'checked' : '' }}>
                                                                       </div>
                                                                       <!-- <div style="padding-left: 13px;"> MAD </div> -->
                                                                   </div>


                                                                    <div class="row sr justify-content-center align-items-center">
                                                                    
                                                                        <div style="padding-top: 12px;" class="fermo">
                                                                            <input type="text" id = "prix_jour" class="form-control darkest @error('prix_jour')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="prix_jour" value="{{ old('prix_jour') }}">
                                                                        </div>
                                                                                                                
                                                                        <div class="with-mad text-uppercase" style="padding-top: 13px; font-size: 14px;">mad</div>
                                                                    
                                                                    </div>


                                                               </div>

                                                           </div>

                                                           <div class="row" style="margin-top: 39px; margin-bottom: 25px;">

                                                                <div class="col-md-7">



                                                                        
                                                                <div class="second-shape pt-0 wagon @error('prix_mois')silent @enderror " style = "border-radius: 30px; border: 1px solid #B0DBD7;" id ="you-cant">


                                                                                                                                       
                                                                            <div class="row justify-content-center" style="padding-top: 13px; padding-left: 21px">
                                                                                <div style="font-size: 15px;">
                                                                                    {{ __('myhouse/back/annonces/particulier/transaction.ak') }}
                                                                                </div>
                                                                                <div class="pt-1 pl-4">
                                                                                    <!-- <input type="checkbox" class="ios" name="charge"> -->
                                                                                </div> 
                                                                            </div>
                                                                            

                                                                            <div class="row justify-content-center" style="padding-top: 16px; padding-right: 74px;">

                                                                                    <div style="width: 94px; padding-right: 23px; font-size: 16px;">
                                                                                    

                                                                                        <div class="sort-around-around">
                                                                                            <input type="radio" id="charge_oui" name="charges" value="oui" {{ old("charges") ? '' : 'checked' }}>
                                                                                            <label for="charge_oui">{{ __('myhouse/back/annonces/particulier/transaction.aac') }}</label>
                                                                                        </div>


                                                                                    </div>

                                                                                    <div style="padding-right: 20px; font-size: 16px;">

                                                                                        <div class="sort-around-around">
                                                                                            <input type="radio" id="charge_non" name="charges" value="non" {{ old("charges") ? 'checked' : '' }}>
                                                                                            <label for="charge_non">{{ __('myhouse/back/annonces/particulier/transaction.aad') }}</label>
                                                                                        </div>

                                                                                    </div>

                                                                            </div>















                                                                            <div class="row src justify-content-center pt-0" style="padding-bottom: 20px;">

                                                                                    <div style="width: 94px;">
                                                                                
                                                                                    </div>

                                                                                    <div class="d-flex align-items-center">
                                                                                        
                                                                                        <div style="padding-top: 12px;" class="fermo">
                                                                                            <input type="text" id = "charges_copropriete" class="form-control @error('charge_copropriete')man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/transaction.ay') }}" name="charge_copropriete" value="{{ old('charge_copropriete') }}">
                                                                                        </div>

                                                                                        <div class="with-mad text-uppercase" style="padding-top: 13px; font-size: 14px;">mad</div>
                                                                                    </div>

                                                                            </div> 

                                                                            




                                                                </div>


                                                                <div class="col-md-4">
                                                                </div>

                                                           </div>




















                                                            <!-- <div><input type="text" name="charge1" value="{{ old('charge1') }}" class="form-control @error('charge1')man-red @enderror" placeholder="000." id="charge1" maxlength="3"></div>
                                                                   
                                                                   <div><input type="text" name="charge2" value="{{ old('charge2') }}" class="form-control @error('charge2')man-red @enderror" placeholder="000." id="charge2" maxlength="3"></div>
                                                                   
                                                                   <div style="padding-top: 7px;">MAD</div> -->

                                                           <!--<div class="third-shape pt-67 pb-78">
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

                                                           </div> -->

                                                       </section>

                                                       <section id="section-shape-3">
                                                           <div class="fourth-shape">
                                                               <div class="row">
                                                                   <div class="col-md-6">
                                                                       <div>
                                                                           <label for="">
                                                                               <input type="checkbox" name="echange_definitif" value="1">
                                                                               {{ __('myhouse/back/annonces/particulier/transaction.ar') }}
                                                                           </label>
                                                                       </div>
                                                                       <div class="st">
                                                                           <label for="">
                                                                               <input type="checkbox" id = "must-use-me" name="echange_provisoir" value="1" @error ('echange_periode_un') checked @enderror @error ('echange_periode_deux') checked @enderror>
                                                                               {{ __('myhouse/back/annonces/particulier/transaction.as') }}
                                                                           </label>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-md-6">
                                                                       <div class="">
                                                                           <div class="fifth-shape">
                                                                               <span class="tt">{{ __('myhouse/back/annonces/particulier/transaction.at') }}</span>
                                                                               <div class="row sff">
                                                                                   <input type="text" id = "periode-un" value="{{ old('echange_periode_un') }}" class="form-control sf @error('echange_periode_un')man-red @enderror" maxlength="10" placeholder="jj/mm/aaaa" name="echange_periode_un">
                                                                                   <input type="text" id = "periode-deux" value="{{ old('echange_periode_deux') }}" class="form-control sf @error('echange_periode_deux')man-red  @enderror" maxlength="10"  placeholder="jj/mm/aaaa" name="echange_periode_deux">
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>

                                                               
                                                               


                                                           </div>
                                                       </section>

                                                   </div>
                                                   
                                                   
                                                   
                                                   <div class="text-center mt-5 mb-5">
                                                       <a href="{{ route('particulier.service') }}" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                           <i class="fa fa-chevron-left"></i>
                                                       </a>
                                                       <button class="btn btn-contact text-uppercase" id = "btn-dark">{{ __('myhouse/back/annonces/particulier/transaction.aw') }}</button>
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


               <a href="{{ $url }}">
                   <div class="menu-wrap-x-buttons">
                       <img src="{{ asset('images/residential/single/x.svg') }}" alt="" class="float-right">
                   </div>
               </a>

           <div class="ca-page-item-third">


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


</div>





@stop


@section('scripts')

    <script src="{{ asset('development/js/level.js') }}"></script>
    <script src="{{ asset('development/js/autotab.js') }}"></script>
    <script src="{{ asset('development/js/errors/errors.js') }}"></script>

@stop
