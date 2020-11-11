@extends('myhouse.front.template')

@section('title')
   {{ __('myhouse/back/menu/generique/facture.aa') }}
@stop

@section('content')

    <div style="position: relative;">

        @include('myhouse.front.includes.success')
    @include('myhouse.front.includes.criteresmessage')

       <div class="menu-wrap">
     <div class="menu-wrap-content">
            <!-- X button -->
            <a href="{{ $url }}" style="text-decoration: none; color: inherit">
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
            </a>
            <!-- End X button -->

        @if ($user === 'neuf')
            @include('myhouse.back.includes.neuf.aside')
        @endif

        @if ($user === 'professionnel')
            @include('myhouse.back.includes.professionnel.aside')
        @endif

        @if ($user === 'particulier')
            @include('myhouse.back.includes.particulier.aside')
        @endif

        <!-- List -->
            <div class="facture-p">
                <div class="menu-body pl-var">
                    <div class="menu-body-title">{{ __('myhouse/back/menu/generique/facture.ab') }}</div>
                    <div class="menu-body-hr"></div>
                    @if ($user === 'professionnel')
                        <div class="menu-body-subs">
                            <span class="menu-body-subs-one">{{ __('myhouse/back/menu/generique/facture.ac') }}</span>
                            <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                        </div>
                    @endif


                    <div class="menu-body-profile">
                        <div class="menu-body-profile-box-faq">
                            <div class="facture">
                                <div class="facture-first pl-3 pt-3">
                                    <div class="button-facture">
                                        <button class="btn btn-facture text-uppercase">{{ __('myhouse/back/menu/generique/facture.ad') }}</button>
                                    </div>
                                    <div class="facture-share">
                                        <img src="http://myhouse.com/images/residential/menu/list/facture/share.svg" alt="">
                                        <span class="facture-text-first text-capitalize">{{ __('myhouse/back/menu/generique/facture.ae') }}</span>
                                    </div>
                                    <div class="facture-print">
                                        <div class="facture-print-box">
                                            <div class="facture-print-img">
                                                <img src="{{ asset('images/residential/single/menu/pdf.svg') }}" alt="">
                                            </div>
                                            <div class="facture-print-text">{{ __('myhouse/back/menu/generique/facture.af') }}</div>
                                        </div>
                                    </div>
                                    <div class="facture-bare">
                                        <span class="invisible">2</span>
                                    </div>
                                    <div class="facture-head">
                                        <span class="facture-head-name text-left">{{ __('myhouse/back/menu/generique/facture.ag') }}</span>
                                        <span class="facture-head-title text-capitalize">{{ __('myhouse/back/menu/generique/facture.ah') }}</span>
                                    </div>
                                    <div class="facture-address ml-62">
                                        <div class="facture-street">
                                            {{ __('myhouse/back/menu/generique/facture.ai') }}
                                        </div>
                                        <div class="facture-country">
                                            {{ __('myhouse/back/menu/generique/facture.aj') }}
                                        </div>
                                    </div>
                                    <div class="facture-destination ml-62">
                                        <div class="facture-destination-intension">
                                            {{ __('myhouse/back/menu/generique/facture.ak') }}
                                            <span class="float-right mr-94">{{ __('myhouse/back/menu/generique/facture.al') }}</span>
                                        </div>
                                        <div class="facture-destination-name">Ahmed Sibouli</div>
                                        <div class="facture-destination-address">Avenir Immobilier, 12 Rue des Rosiers BP 22345 Casablanca, Maroc</div>
                                    </div>

                                    <div class="facture-table ml-62 mr-94">
                                        <table class="table table-borderless">
                                            <thead>
                                            <tr class="bg-first">
                                                <th>#</th>
                                                <th class="text-uppercase">{{ __('myhouse/back/menu/generique/facture.am') }}</th>
                                                <th>{{ __('myhouse/back/menu/generique/facture.an') }}</th>
                                                <th>{{ __('myhouse/back/menu/generique/facture.ao') }}</th>
                                                <th>{{ __('myhouse/back/menu/generique/facture.ap') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="bg-table">
                                                <th scope="row">1</th>
                                                <td>3476B67</td>
                                                <td>Projet immobilier</td>
                                                <td>10/11/2019</td>
                                                <td>1000,00 MAD</td>
                                            </tr>
                                            <tr class="bg-second bg-table">
                                                <th scope="row">2</th>
                                                <td>6779A52</td>
                                                <td>Projet immobilier</td>
                                                <td>15/12/2019</td>
                                                <td>1000,00 MAD</td>
                                            </tr>
                                            <tr class="bg-table">
                                                <th scope="row">3</th>
                                                <td>2476B88</td>
                                                <td>Projet immobilier</td>
                                                <td>04/01/2020</td>
                                                <td>500,00 MAD</td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="facture-footer ml-62 mr-94">
                                        <div class="clearfix">
                                            <div class="paye float-left">
                                                <img src="http://myhouse.com/images/residential/menu/list/paye.svg" alt="">
                                            </div>
                                            <div class="facture-addition float-right text-right">
                                                <div class="addition-first">{{ __('myhouse/back/menu/generique/facture.aq') }}: 2500.00 MAD</div>
                                                <div class="addition-first">{{ __('myhouse/back/menu/generique/facture.ar') }}: 10%</div>
                                                <div class="addition-first">{{ __('myhouse/back/menu/generique/facture.as') }}: 10%</div>
                                                <div class="addition-last text-uppercase mt-1">MAD 2500.00</div>
                                            </div>
                                        </div>
                                        <div class="facture-tampon text-uppercase text-center">
                                            {{ __('myhouse/back/menu/generique/facture.at') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <!-- End List -->


        </div>
         </div> 
    </div>



@stop
