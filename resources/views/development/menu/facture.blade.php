@include('development.menu.include.head')
@include('development.next.include.myhouseNav')


<div class="menu-wrap">
    <div class="menu-wrap-content">
        <!-- X button -->
        <div class="menu-wrap-x-button">
            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
        </div>
        <!-- End X button -->

    @if ($user === 'neuf')
        @include('development.menu.include.neuf.aside')
    @endif

    @if ($user === 'professionnel')
        @include('development.menu.include.professionnel.aside')
    @endif

    @if ($user === 'particulier')
        @include('development.menu.include.particulier.aside')
    @endif

    <!-- List -->
    <div class="facture-p">
        <div class="menu-body pl-var">
            <div class="menu-body-title">factures</div>
            <div class="menu-body-hr"></div>
            @if ($user === 'professionnel')
                <div class="menu-body-subs">
                    <span class="menu-body-subs-one">Compte Manager</span>
                    <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                </div>
            @endif


            <div class="menu-body-profile">
                <div class="menu-body-profile-box-faq">
                    <div class="facture">
                        <div class="facture-first pl-3 pt-3">
                            <div class="button-facture">
                                <button class="btn btn-facture text-uppercase">imprimer</button>
                            </div>
                            <div class="facture-share">
                                <img src="http://myhouse.com/images/residential/menu/list/facture/share.svg" alt="">
                                <span class="facture-text-first text-capitalize">partager</span>
                            </div>
                            <div class="facture-print">
                                <div class="facture-print-box">
                                    <div class="facture-print-img">
                                        <img src="{{ asset('images/residential/single/menu/pdf.svg') }}" alt="">
                                    </div>
                                    <div class="facture-print-text">Télécharger en format PDF</div>
                                </div>
                            </div>
                            <div class="facture-bare">
                                <span class="invisible">2</span>
                            </div>
                            <div class="facture-head">
                                <span class="facture-head-name text-left">MyHouse</span>
                                <span class="facture-head-title text-capitalize">facture</span>
                            </div>
                            <div class="facture-address ml-62">
                                <div class="facture-street">
                                    234 Bd Zerktouni
                                </div>
                                <div class="facture-country">
                                    BP 20030 Casablanca, Maroc
                                </div>
                            </div>
                            <div class="facture-destination ml-62">
                                <div class="facture-destination-intension">
                                    Facture à l'attention de
                                    <span class="float-right mr-94">Date: 15 avril 2019</span>
                                </div>
                                <div class="facture-destination-name">Ahmed Sibouli</div>
                                <div class="facture-destination-address">Avenir Immobilier, 12 Rue des Rosiers BP 22345 Casablanca, Maroc</div>
                            </div>

                            <div class="facture-table ml-62 mr-94">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr class="bg-first">
                                        <th>#</th>
                                        <th class="text-uppercase">RéFéRENCE</th>
                                        <th>DESCRIPTION</th>
                                        <th>DATE</th>
                                        <th>PRIX</th>
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
                                        <div class="addition-first">Total: 2500.00 MAD</div>
                                        <div class="addition-first">Remise: 10%</div>
                                        <div class="addition-first">TVA: 10%</div>
                                        <div class="addition-last text-uppercase mt-1">MAD 2500.00</div>
                                    </div>
                                </div>
                                <div class="facture-tampon text-uppercase text-center">
                                    TAMPON MYHOUSE
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









@include('development.menu.include.footer')



