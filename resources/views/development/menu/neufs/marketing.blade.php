@include('development.menu.include.head')
@include('development.next.include.myhouseNav')



<div class="professionnel">
    <div class="menu-wrap">
        <div class="menu-wrap-content">
            <!-- X button -->
            <div class="menu-wrap-x-button">
                <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
            </div>
            <!-- End X button -->
            <div class="menu-wrap-content-top">
                <div class="menu-wrap-content-top-head">SAV</div>
                <div class="menu-wrap-content-top-hr"></div>
                <div class="menu-wrap-content-top-footer">
                    <div class="menu-wrap-content-top-footer-text">002125224565</div>
                    <div class="menu-wrap-content-top-footer-box">
                        <div class="menu-wrap-content-top-footer-box-img">
                            <img src="{{ asset('images/residential/single/menu/chat.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-content-top-footer-box-text">Chat room</div>
                    </div>
                </div>
            </div>
            @include('development.menu.include.neuf.aside')

            <div class="neuf">
                @include('development.menu.include.neuf.subscription')
            </div>



            <!-- List -->

            <div class="menu-body">

                <div class="menu-body-title">BACK-OFFICE PROJETS NEUFS</div>

                <div class="menu-body-hm">
                    <div class="menu-body-hr"></div>
                    <div class="menu-body-subs">
                        <span class="menu-body-subs-one">Compte Manager</span>
                        <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                    </div>
                </div>

                <form action="" method="get" id = "campagne-form">
                    @csrf
                    <div class="menu-body-event">

                        <div class="menu-body-event-title">Sélectionnez un événement immobilier</div>

                        @if (request()->get('q') === 'portes-ouvertes')

                                <div class="menu-body-event-select">
                                    <div class="content-arrow">
                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                    </div>

                                    <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                        <option value="portes-ouvertes" class="ms-center" selected>Journées Portes Ouvertes</option>
                                        <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                        <option value="tombola"  class="ms-center">Tombola</option>
                                        <option value="chasse"  class="ms-center">Chasse au tresor</option>
                                    </select>

                                </div>

                                <div class="menu-body-event-select-subtitle">L'accroche Journées PORTES OUVERTES sera intégrée à votre page PROJET & toutes ses annonces</div>


                                @if(isset($clickable))
                                    <div class="menu-body-event-bbox-success">
                                        <div class="menu-body-event-bbox-success-title">
                                            votre événement <br>
                                            a été créé
                                        </div>
                                        <div class="menu-body-event-bbox-success-img">
                                            <img src="{{ asset('images/residential/single/menu/valid.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <a href="{{ route('neuf.menu.backoffice') }}" style="text-decoration: none; color: inherit">
                                        <div class="menu-body-event-close menu-body-event-c14">
                                            fermer
                                        </div>
                                    </a>
                                @else
                                    <div class="menu-body-event-bbox">
                                        <div class="menu-body-content-campaign-push-next-item-ck-title">Activer la période</div>
                                        <div class="portail-content-map">
                                            <div class="portail-content-map-seconds">
                                                <div class="portail-content-map-second-boxs">
                                                    <div>
                                                        <div class="portail-content-map-second-box-item">
                                                            <div class="portail-content-map-firsts">Activer</div>
                                                            <label for="#"></label>
                                                            <input type="checkbox" name="#" id="#" class="ios">
                                                        </div>
                                                    </div>
                                                    <div class="portail-content-map-second-box-item">
                                                        <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                    </div>
                                                    <div class="portail-content-map-second-box-item">
                                                        <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="menu-body-event-close menu-body-event-c14" id="campagne">
                                    <input type="hidden" name="clickable" value="click">
                                    créer la campagne
                                </div>
                                @endif




































                        @elseif(request()->get('q') === 'campagne-facebook')


                            <div class="menu-body-event-select">
                                <div class="content-arrow">
                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                </div>
                                <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                    <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                    <option value="campagne-facebook"  class="ms-center" selected>Campagne Facebook</option>
                                    <option value="tombola"  class="ms-center">Tombola</option>
                                    <option value="chasse"  class="ms-center">Chasse au tresor</option>


                                </select>

                            </div>

                        @if(isset($facebook))
                            <div class="menu-body-event-facebook-result">
                                <div class="menu-body-event-facebook-result-title">
                                    Votre accroche est prête
                                </div>
                                <div class="menu-body-event-facebook-result-box">

                                    <div class="menu-body-event-facebook-result-box-grid">
                                        <div class="menu-body-event-facebook-result-box-one">
                                            <div class="menu-body-event-facebook-result-box-one-img">
                                                <img src="{{ asset('images/residential/single/menu/im.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="menu-body-event-facebook-result-box-two">
                                            <div class="menu-body-event-facebook-result-box-two-block">
                                                <div class="menu-body-content-campaign-push-next-item-ck-title-cp">Activer la campagne</div>
                                                <div class="portail-content-map">
                                                    <div class="portail-content-map-seconds">
                                                        <div class="portail-content-map-second-boxs">
                                                            <div>
                                                                <div class="portail-content-map-second-box-item">
                                                                    <div class="portail-content-map-firsts">Activer</div>
                                                                    <label for="#"></label>
                                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                                </div>
                                                            </div>
                                                            <div class="portail-content-map-second-box-item">
                                                                <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                <div class="menu-body-event-close menu-body-event-close-facebook-two" id="campagne">
                                    <input type="hidden" name="facebook-two" value="facebook_two">
                                    créer la campagne
                                </div>
                        @elseif (isset($facebook_two))
                                <div class="menu-body-event-bbox-success">
                                    <div class="menu-body-event-bbox-success-title">
                                        votre événement <br>
                                        a été créé
                                    </div>
                                    <div class="menu-body-event-bbox-success-img">
                                        <img src="{{ asset('images/residential/single/menu/valid.svg') }}" alt="">
                                    </div>
                                </div>
                                <a href="{{ route('neuf.menu.backoffice') }}" style="text-decoration: none; color: inherit">
                                    <div class="menu-body-event-close menu-body-event-c14">
                                        fermer
                                    </div>
                                </a>
                        @else
                                <div class="menu-body-event-facebook">
                                    <div class="menu-body-content-campaign-push-next-item-ck-title">Concevoir la publication Facebook</div>
                                    <div class="menu-body-event-facebook-box">
                                        <div class="menu-body-envent-facebook-box-img">
                                            <div class="upload-img text-center">
                                                <label for="file-upload" class="custom-files-uploads">
                                                    <img src="http://myhouse.com/images/residential/single/menu/ico.svg" alt="">
                                                </label>
                                                <input id="file-upload" type="file">
                                                <div class="upload-texts">ENVOYER 1  photo</div>
                                                <div class="upload-texts-b">
                                                    Taille 440X420 Px
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-body-envent-facebook-box-text">
                                            <div class="menu-body-envent-facebook-box-text-text">
                                                LOREM IPSUM DOLOR <br>
                                                SIT AMET, <br>
                                                CONSECTTUER
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-body-event-close menu-body-event-close-facebook" id="campagne">
                                    <input type="hidden" name="facebook" value="facebook">
                                    continuer
                                </div>
                        @endif














                        @elseif(request()->get('q') === 'tombola')


                            <div class="menu-body-event-select">
                                <div class="content-arrow">
                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                </div>
                                <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                    <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                    <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                    <option value="tombola"  class="ms-center" selected>Tombola</option>
                                    <option value="chasse"  class="ms-center">Chasse au tresor</option>

                                </select>
                            </div>

                            <div class="menu-body-event-select-subtitle">L'accroche TOMBOLA sera intégrée à votre page PROJET & toutes ses annonces</div>


                            @if (isset($tombola))
                                <div class="menu-body-event-bbox-success">
                                    <div class="menu-body-event-bbox-success-title">
                                        votre événement <br>
                                        a été créé
                                    </div>
                                    <div class="menu-body-event-bbox-success-img">
                                        <img src="{{ asset('images/residential/single/menu/valid.svg') }}" alt="">
                                    </div>
                                </div>
                                <a href="{{ route('neuf.menu.backoffice') }}" style="text-decoration: none; color: inherit">
                                    <div class="menu-body-event-close menu-body-event-c14">
                                        fermer
                                    </div>
                                </a>
                            @else
                                <div class="menu-body-event-tombola">
                                    <div class="menu-body-event-tombola-grid">
                                        <div class="menu-body-event-tombola-grid-one">
                                            <div class="menu-body-event-tombola-grid-one-title">Types de biens concernés</div>

                                            <div class="menu-body-event-tombola-select">
                                                <div class="content-arrow">
                                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                                </div>
                                                <select name="p" id="#" class="form-control css-select ms-center">
                                                    <option selected hidden>Sélectionner</option>
                                                    <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                                    <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                                    <option value="tombola"  class="ms-center">Tombola</option>
                                                </select>
                                            </div>

                                            <div class="menu-body-event-tombola-second">
                                                <div class="menu-body-event-tombola-grid-one-title">Période d'achat valant éligibilité à la Tombola</div>
                                            </div>
                                            <div class="portail-content-map">
                                                <div class="portail-content-map-seconds">
                                                    <div class="portail-content-map-second-boxs">
                                                        <div class="portail-content-map-second-box-item">
                                                            <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                        </div>
                                                        <div class="portail-content-map-second-box-item">
                                                            <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="menu-body-event-tombola-grid-two">
                                            <div class="menu-body-event-tombola-grid-one-title">Date tirage de la Tombola</div>
                                            <div class="portail-content-map">
                                                <div class="portail-content-map-seconds">
                                                    <div class="portail-content-map-second-boxs">
                                                        <div>
                                                            <div class="portail-content-map-second-box-item">
                                                                <div class="portail-content-map-firsts">Activer</div>
                                                                <label for="#"></label>
                                                                <input type="checkbox" name="#" id="#" class="ios">
                                                            </div>
                                                        </div>
                                                        <div class="portail-content-map-second-box-item">
                                                            <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-body-event-tombola-second">
                                                <div class="menu-body-event-tombola-grid-one-title">Gains de la Tombola</div>
                                            </div>
                                            <div class="menu-body-event-tombola-second-input">
                                                <input type="text" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-body-event-close menu-body-event-close-tombola" id="campagne">
                                    <input type="hidden" name="tombola" value="tombola">
                                    CRéer la campagne
                                </div>
                            @endif




                        @elseif(request()->get('q') === 'chasse')


                           @if (isset($tresor))




                           <div class="menu-body-event-select">
                                <div class="content-arrow">
                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                </div>
                                <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                    <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                    <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                    <option value="tombola"  class="ms-center" >Tombola</option>
                                    <option value="chasse"  class="ms-center" selected>Chasse au tresor</option>

                                </select>
                            </div>
                           <div class="menu-body-content-campaign-push">


                        <div class="menu-body-content-campaign-push-title">Concevoir l'affiche du</div>
                        <div class="menu-body-content-campaign-push-box">
                            <div class="menu-body-content-campaign-push-box-item">
                                <div class="menu-body-content-campaign-push-box-item-box">
                                    <div class="menu-body-content-campaign-push-box-item-box-left">Ligne 1</div>
                                    <div class="menu-body-content-campaign-push-box-item-box-right">
                                        <input type="text" name="#" id="" class="form-control" placeholder="Résidence DU VAL DE MARNE">
                                    </div>
                                </div>
                                <div class="menu-body-content-campaign-push-box-item-box">
                                    <div class="menu-body-content-campaign-push-box-item-box-left">Ligne 2</div>
                                    <div class="menu-body-content-campaign-push-box-item-box-right">
                                        <input type="text" name="#" id="" class="form-control" placeholder="Bouskoura Casablanca">
                                    </div>
                                </div>
                                <div class="menu-body-content-campaign-push-box-item-box">
                                    <div class="menu-body-content-campaign-push-box-item-box-left">Ligne 3</div>
                                    <div class="menu-body-content-campaign-push-box-item-box-right">
                                        <input type="text" name="#" id="" class="form-control" placeholder="Journées portes ouvertes - SHOW ROOM">
                                    </div>
                                </div>
                                <div class="menu-body-content-campaign-push-box-item-box">
                                    <div class="menu-body-content-campaign-push-box-item-box-left">Ligne 4</div>
                                    <div class="menu-body-content-campaign-push-box-item-box-right">
                                        <input type="text" name="#" id="" class="form-control" placeholder="Samedi 18 juillet 2020">
                                    </div>
                                </div>
                                <div class="menu-body-content-campaign-push-box-item-box">
                                    <div class="menu-body-content-campaign-push-box-item-box-left">gains <br> du jeu</div>
                                    <div class="menu-body-content-campaign-push-box-item-box-rights">
                                        <textarea name="#" id="" cols="30" rows="6" class="form-control"></textarea>
                                    </div>
                                </div>


                            </div>
                            <div class="menu-body-content-campaign-push-box-item">
                                <div class="menu-body-content-campaign-push-box-item-box-block">
                                    <div class="upload-img text-center">
                                        <label for="file-upload" class="custom-files-uploads">
                                            <img src="http://myhouse.com/images/residential/single/menu/ico.svg" alt="">
                                        </label>
                                        <input id="file-upload" type="file">
                                        <div class="upload-texts">ENVOYER 1  photo</div>
                                        <div class="upload-texts-b">
                                            Taille 150x100 px
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="menu-body-event-close menu-body-event-close-tombola" id="campagne">
                        <input type="hidden" name="tresor_notif" value="tresor_notif">
                         continuer
                    </div>


                    @elseif (isset($tresor_notif))


                    <div class="menu-body-event-select">
                                <div class="content-arrow">
                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                </div>
                                <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                    <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                    <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                    <option value="tombola"  class="ms-center" >Tombola</option>
                                    <option value="chasse"  class="ms-center" selected>Chasse au tresor</option>

                                </select>


                    </div>
                    <div class = "menu-body-event-select-tit">
                        votre notification est
                    </div>
                    <div class="menu-body-event-select-tit-ts">
                        L'affiche est envoyée à tous les utilisateurs de MyHouse par Push <br>
                        Mobile et par courrier email <br>
                        Elle est également intégrée à vos annonce
                    </div>


                    <div class="menu-body-event-select-grid">

                    <div class="menu-body-event-select-grid-item-one">
                        <div class="menu-body-event-select-grid-item-one-box">
                            <div class="menu-body-event-select-grid-item-one-box-first">
                                <div class="menu-body-event-select-grid-item-one-box-first-img">
                                    <img src="{{ asset('images/residential/single/menu/logo.svg') }}" alt="">
                                </div>
                                <div class="menu-body-event-select-grid-item-one-box-first-text">
                                    Résidence <br>
                                    du VAL DE MARNE
                                </div>
                                <div class="menu-body-event-select-grid-item-one-box-first-text-st">
                                    Bouskoura Casablanca
                                </div>
                                <div class="menu-body-event-select-grid-item-one-box-first-text-st">
                                    Boulevard de la colline
                                </div>
                                <div class="menu-body-event-select-grid-item-one-box-first-text-ct">
                                    Contact 002126666666
                                </div>
                            </div>
                            <div class="menu-body-event-select-grid-item-one-box-second">
                                <div class="menu-body-event-select-grid-item-one-box-second-img">
                                    <img src="{{ asset('images/residential/single/menu/ham.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="menu-body-event-select-grid-item-one-box-second-green">
                                    Chasse <br>
                                    au <br>
                                    Trésor
                                </div>
                                <div class="menu-body-event-select-grid-item-one-box-second-st">
                                    Samedi 23 juillet 2020
                                </div>
                                <div class="menu-body-event-select-grid-item-one-box-second-award">
                                    <div class="menu-body-event-select-grid-item-one-box-second-award-red">gagnez</div>
                                    <div class="menu-body-event-select-grid-item-one-box-second-award-price">100.000 DH</div>
                                    <div class="menu-body-event-select-grid-item-one-box-second-award-achat">
                                        à l'achat de votre résidence
                                    </div>
                                </div>
                            </div>
                            <div class="menu-body-event-select-grid-item-one-box-third">
                                <div class="menu-body-event-select-grid-item-one-box-third-img">
                                    <img src="{{ asset('images/residential/single/menu/zz.png') }}" alt="">
                                </div>
                                <div class="menu-body-event-select-grid-item-one-box-third-txt">
                                    <div class="menu-body-event-select-grid-item-one-box-third-txt-green">Inscription ouverte</div>
                                    <div class="menu-body-event-select-grid-item-one-box-third-txt-red">Cliquer ici</div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="menu-body-event-select-grid-item-two">
                        <div class="menu-body-content-campaign-push-next-item-ck-title">Programmer l'envoi</div>
                        <div class="portail-content-map">
                             <div class="portail-content-map-seconds">
                             <div class="portail-content-map-second-boxs">
                                   <div>
                                     <div class="portail-content-map-second-box-item">
                                        <div class="portail-content-map-firsts">Activer</div>
                                                <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                            </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-body-event-close menu-body-event-close-tombola mb-5" id="campagne">
                        <input type="hidden" name="tresor_valid" value="tresor_valid">
                         continuer
                    </div>

                    @elseif (isset($tresor_valid))

                               <div class="menu-body-event-select-info">
                                   <div class="menu-body-event-select-info-first">La plate-forme a été ajoutée à votre menu :</div>
                                   <div class="menu-body-event-select-info-second">
                                        <div class="menu-body-event-select-info-second-one">Votre plate-forme de jeu</div>
                                        <div class="menu-body-event-select-info-second-two">Chasse au Trésor (23/07/2020)</div>
                                   </div>
                                   <div class="menu-body-event-select-info-third">
                                       <div class="menu-body-event-select-info-third-one">Cette plate-forme contient :</div>

                                       <div class="menu-body-event-select-info-third-two-box">
                                           <div class="menu-body-event-select-info-third-two-box-img">
                                               <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                           </div>
                                           <div class="menu-body-event-select-info-third-two-box-text">
                                               La Carte de la Chasse au Trésor pour <br>
                                               suivre la progression des participants.
                                           </div>
                                       </div>

                                       <div class="menu-body-event-select-info-third-two-box">
                                           <div class="menu-body-event-select-info-third-two-box-img">
                                               <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                           </div>
                                           <div class="menu-body-event-select-info-third-two-box-text">
                                               Une discussion de groupe intégrant <br>
                                               les personnes inscrites à votre jeu.
                                           </div>
                                       </div>

                                       <div class="menu-body-event-select-info-third-two-box">
                                           <div class="menu-body-event-select-info-third-two-box-img">
                                               <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                           </div>
                                           <div class="menu-body-event-select-info-third-two-box-text">
                                               Un répertoire de 300 indices et <br>
                                               200 énigmes pour personnaliser votre jeu.
                                           </div>
                                       </div>

                                   </div>
                               </div>

                                <div class="menu-body-event-select">
                                    <div class="content-arrow">
                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                    </div>
                                    <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                        <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                        <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                        <option value="tombola"  class="ms-center" >Tombola</option>
                                        <option value="chasse"  class="ms-center" selected>Chasse au tresor</option>

                                    </select>


                                </div>

                                <div class="menu-body-event-bbox-success mt-5">
                                    <div class="menu-body-event-bbox-success-title">
                                        votre plate-forme <br>
                                        a été créé
                                    </div>
                                    <div class="menu-body-event-bbox-success-img">
                                        <img src="{{ asset('images/residential/single/menu/valid.svg') }}" alt="">
                                    </div>
                                </div>

                                <div class="menu-body-event-bbox-buuton-box">
                                    <div class="menu-body-event-bbox-buuton-box-one">QUITTER</div>
                                    <div class="menu-body-event-bbox-buuton-box-two" id="campagne">
                                        <input type="hidden" name="tresor_plateform" value="tresor_plateform">
                                        PLATE-FORME DE JEU
                                    </div>
                                </div>




                            @elseif (isset($tresor_plateform))


                                <div class="menu-body-event-select">
                                    <div class="content-arrow">
                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                    </div>
                                    <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                        <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                        <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                        <option value="tombola"  class="ms-center" >Tombola</option>
                                        <option value="chasse"  class="ms-center" selected>Chasse au tresor</option>

                                    </select>


                                </div>
                                <div class="menu-body-event-select-plateform">
                                    <div class="menu-body-event-select-plateform-one">
                                        <div class="menu-body-event-select-plateform-one-first">La plate-forme a été ajoutée à votre menu :</div>
                                        <div class="menu-body-event-select-plateform-one-second">Votre plate-forme de jeu </div>
                                        <div class="menu-body-event-select-plateform-one-third">Chasse au Trésor (23/07/2020)</div>
                                    </div>


                                    <div class="menu-body-event-select-plateform-two">
                                        <div class="menu-body-event-select-info-third-one">Cette plate-forme contient :</div>

                                        <div class="menu-body-event-select-info-third-two-boxes pt-2">
                                            <div class="menu-body-event-select-info-third-two-box-img">
                                                <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                            </div>
                                            <div class="menu-body-event-select-info-third-two-box-text">
                                                La Carte de la Chasse au Trésor pour suivre la progression des participants.
                                            </div>
                                        </div>
                                        <div class="menu-body-event-select-info-third-two-boxes">
                                            <div class="menu-body-event-select-info-third-two-box-img">
                                                <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                            </div>
                                            <div class="menu-body-event-select-info-third-two-box-text">
                                                Une discussion de groupe intégrant les personnes inscrites à votre jeu.                                            </div>
                                        </div>
                                    </div>

                                    <div class="menu-body-event-select-plateform-three">
                                        <div class="menu-body-event-select-info-third-two-boxes">
                                            <div class="menu-body-event-select-info-third-two-box-img">
                                                <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                            </div>
                                            <div class="menu-body-event-select-info-third-two-box-text">
                                                Un répertoire de 300 indices et 200 énigmes pour personnaliser votre jeu.                                         </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="menu-body-event-bbox-buuton-box pb-5">
                                    <div class="menu-body-event-bbox-buuton-box-one">QUITTER</div>
                                    <div>
                                        <a href="{{ route('neuf.menu.plateform') }}" style="text-decoration: none; color: inherit">
                                            <div class="menu-body-event-bbox-buuton-box-two">
                                                PLATE-FORME DE JEU
                                            </div>
                                        </a>
                                    </div>
                                </div>
















                           @else
                                <div class="menu-body-event-chasse">
                                <div class="menu-body-event-chasse-one">
                                    <div class="menu-body-event-chasse-one-first">
                                        <div class="menu-body-event-chasse-one-img">
                                            <img src="{{ asset('images/residential/single/menu/es.png') }}" alt="">
                                        </div>
                                        <div class="menu-body-event-chasse-title">
                                            Exemple d'INDICEdddd     <br>
                                            envoyé aux participants
                                        </div>
                                        <p class="menu-body-event-chasse-one-p">
                                            Voici votre première <br>
                                            épreuve, que vous allez <br>
                                            devoir résoudre si vous <br>
                                            voulez continuer !
                                        </p>
                                        <p class="menu-body-event-chasse-one-p">
                                            Attention, sans réponse, <br>
                                            la porte de la 2ème <br>
                                            épreuve ne s'ouvrira <br>
                                            jamais pour vous ! <br>
                                        </p>
                                        <p class="menu-body-event-chasse-one-p">
                                            TROUVEZ LE SENS DE <br>
                                            CETTE PHRASE :
                                        </p>
                                        <p class="menu-body-event-chasse-one-p text-uppercase text-red">
                                            drasah xuerueh nu *

                                        </p>
                                        <p class="menu-body-event-chasse-one-p">
                                            Si vos avez découvert la <br>
                                            solution, dirigez-vous <br>
                                            vers indice 1 sur la Carte <br>
                                            au Trésor et entrez la <br>
                                            réponse.
                                        </p>
                                        <div class="text-bb">
                                            * Solution: un heureux hasard
                                        </div>
                                    </div>
                                    <div class="menu-body-event-chasse-one-second">
                                        <div class="menu-body-event-chasse-title">
                                            Exemple d'INDICE <br>
                                            envoyé aux participants
                                        </div>
                                        <div class="menu-body-event-chasse-one-p-nxt">
                                            Voici votre dernière épreuve !
                                        </div>
                                        <div class="menu-body-event-chasse-one-p-nxt">
                                            Répondez à l'énigme suivante:
                                        </div>
                                        <div class="menu-body-event-chasse-one-p-nxt">
                                            On me prend sans me toucher, qui suis-je ? *
                                        </div>
                                        <div class="text-bb">
                                            * Solution: une photographie
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-body-event-chasse-two">
                                    <div class="menu-body-event-chasse-two-one">
                                        <div class="content-arrow">
                                            <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                        </div>
                                        <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                            <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                            <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                            <option value="tombola"  class="ms-center">Tombola</option>
                                            <option value="chasse"  class="ms-center" selected>Chasse au trésor</option>
                                        </select>

                                        <div class="menu-body-event-chasse-two-content">
                                            <div class="menu-body-event-chasse-two-content-box">
                                                <div class="menu-body-event-chasse-two-content-box-title">règles du jeu</div>

                                                <div class="menu-body-event-chasse-two-content-box-p">
                                                    Le jeu de la Chasse au Trésor, avec pour thème l'immobilier,
                                                    a été conçu par MyHouse. Il est intégré à notre plate-forme multi-device:
                                                    Web/Android/Iphone/Ipad/Desktop.
                                                </div>

                                                <div class="menu-body-event-chasse-two-content-box-p">
                                                    Le jeu est gratuit et inclus dans tous les abonnements
                                                    PROJETS NEUFS de MyHouse. Il peut être utilisé sans conditions.
                                                    Il ne contient ni publicité, ni pop 'up.
                                                </div>

                                                <div class="menu-body-event-chasse-two-content-box-p">
                                                    Le jeu est gratuit pour les prospects et utilisateurs de myhouse
                                                    de plus de 18 ans. Les enfants doivent être accompagnés
                                                    par des adultes durant le jeu.
                                                </div>

                                                <div class="menu-body-event-chasse-two-content-box-p">
                                                    Le jeu dure environ 1 heure et se déroule dans les jardins
                                                    et les résidences du projet immobilier.
                                                </div>

                                                <div class="menu-body-event-chasse-two-content-box-p">
                                                    Jusqu'à 7indices et 1 énigme sont à résoudre dans les jardins et les batiments.
                                                    les Participants doivent découvrir les indices et solutionner
                                                    l'énigme avant d'accéder au trésor.
                                                </div>

                                                <div class="menu-body-event-chasse-two-content-box-title">qu'est-ce qu'un indice?</div>
                                                <div class="menu-body-event-chasse-two-content-box-p">
                                                    un Indice peut être une devinette à résoudre, ou un objet caché dans
                                                    les jardins et les résidences.
                                                    <div class="text-green">(300 indices disponibles, voir)</div>
                                                </div>

                                                <div class="menu-body-event-chasse-two-content-box-title">qu'est-ce qu'un Trésor?</div>
                                                <div class="menu-body-event-chasse-two-content-box-p">
                                                    un Trésor Peut consister en une réduction extraordinaire ou un cadeau d'envergure concédés
                                                    par le promoteur  au vainqueur
                                                    (ou aux deux/trois premiers vainqueurs) sur l'achat d'un bien immobilier dans le projet.
                                                </div>

                                                <div class="menu-body-event-chasse-two-content-box-title">QUI PEUT PARTICIPER?</div>
                                                <div class="menu-body-event-chasse-two-content-box-p">
                                                    Tout le monde : une personne seule  ou des équipes formées par des ami(e)s, un couple ou
                                                    une famille.
                                                </div>

                                                <div class="menu-body-event-chasse-two-content-box-title">Comment jouez?</div>
                                                <div class="menu-body-event-chasse-two-content-box-p">
                                                    1-Les participants s'inscrivent à l'aide de leurs téléphones portables.
                                                    <br>
                                                    2-Le promoteur déclare le jeu ouvert lorsque tous les participants sont rassemblés sur le lieu du rendez-vous.
                                                    <br>
                                                    3-Le promoteur envoie les indices sur les téléphones portables des participants.
                                                    <br>
                                                    4-Les participants rédigent leurs réponses sur la Carte au Trésor. <br>
                                                    5-Après avoir découvert les indices, les participants doivent résoudre la dernière énigme, la plus importante et difficile qui ouvre la porte du Trésor.

                                                    <div class="text-green">
                                                        (200 énigmes disponibles, voir).
                                                    </div>

                                                    6-Le ou les gagnants reçoivent le Trésor sous forme de contrat, contenant la clause sur la réduction ou le cadeau
                                                    exceptionnels en cas d'achat d'un bien immobilier dans le projet
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-body-event-chasse-three">
                                    <div class="menu-body-event-chasse-three-one">
                                        <div class="menu-body-event-chasse-three-one-img">
                                            <img src="{{ asset('images/residential/single/menu/ham.png') }}" alt="">
                                        </div>
                                        <div class="menu-body-event-chasse-title">
                                            Exemple d'INDICE <br>
                                            envoyé aux participants
                                        </div>
                                        <p class="menu-body-event-chasse-one-p">
                                            Voici une épreuve que <br>
                                            vous allez résoudre si <br>
                                            vous êtes une ou un <br>
                                            observateur de la <br>
                                            nature !
                                        </p>
                                        <p class="menu-body-event-chasse-one-p">
                                            EPREUVE: <br>
                                            Dans une maison <br>
                                            meublée, dirigez-vous <br>
                                            vers la pièce où tout le <br>
                                            monde est obligé de <br>
                                            passer du temps <br>
                                            chaque jour : la <br>
                                            maman, les enfants, le <br>
                                            papa, tous, tous !

                                        </p>

                                        <p class="menu-body-event-chasse-one-p">
                                            Quand vous aurez <br>
                                            trouvé de quelle pièce <br>
                                            il s'agit,  alors cherchez <br>
                                            bien : un objet a été <br>
                                            caché... Notez le nom <br>
                                            de cet objet et <br>
                                            répondez sur la Carte <br>
                                            au Trésor..
                                        </p>
                                        <div class="text-bb">
                                            * Solution: l'objet est caché dans la salle de bain
                                        </div>
                                    </div>
                                    <div class="menu-body-event-chasse-three-two">

                                        <div class="menu-body-event-chasse-three-two-input">
                                            <input type="text" class="form-control" placeholder="Tapez ici la réponse de l'INDICE 1">
                                        </div>

                                        <div class="menu-body-event-chasse-title-st">
                                            Exemple de champ pour <br>
                                            les réponses sur la Carte
                                        </div>

                                        <div class="menu-body-event-chasse-three-two-img">
                                            <img src="{{ asset('images/residential/single/menu/ind.png') }}" alt="">
                                        </div>

                                    </div>
                                </div>

                                </div>

                                <div class="menu-body-event-close menu-body-event-close-facebook" id="campagne">
                                    <input type="hidden" name="tresor" value="tresor">
                                    continuer
                                </div>

                           @endif







                        @else
                                <div class="menu-body-event-select">
                                    <div class="content-arrow">
                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                    </div>
                                    <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                        <option selected hidden> Choisissez </option>
                                        <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                        <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                        <option value="tombola"  class="ms-center">Tombola</option>
                                        <option value="chasse"  class="ms-center">Chasse au tresor</option>

                                    </select>
                                </div>
                                <div class="menu-body-event-close menu-body-event-close-mt ">
                                    fermer
                                </div>
                        @endif



                    </div>
                </form>

            </div>

            <!-- End List -->


        </div>
    </div>


    <!-- Modal First -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                        <div class="modal-body-x-button">
                            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                        </div>
                    </a>

                    <div class="modal-body-title">MULTIPLES UTILISATEURS</div>
                    <div class="modal-body-desc">Ajoutez des utilisateurs et choisissez leurs types de comptes </div>
                    <div class="modal-body-content">
                        <div class="modal-body-content-left">
                            <div class="field">
                                <label for="doge" class="field-label">nom d'utilisateur (trice)</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">ville</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">mot de passe</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">email ou mobile</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>

                        </div>
                        <div class="modal-body-content-right">
                            <div class="field">
                                <label for="doge" class="field-label">email</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">pays</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">téléphone (2) (facultatif)</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">confirmer le mot de passe</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                        </div>
                    </div>
                    <div class="modal-body-content-foot">
                        <div class="modal-body-content-foot-title">Type de compte</div>
                        <div class="modal-body-content-foot-content">
                            <div class="modal-body-content-foot-content-item">
                                <div class="modal-body-content-foot-content-item-one">
                                    <input type="radio" id="admin" name="admin" checked>
                                    <label for="admin"></label>
                                </div>
                                <div class="modal-body-content-foot-content-item-two">ADJOINT</div>
                                <div class="modal-body-content-foot-content-item-three">
                                    Créer des campagnes push Mobile
                                    Créer/Supprimer des pages entreprise
                                    Créer des campagnes bannière
                                    Créer des Campagnes emailing
                                    Créer des repères map en couleur différenciée
                                    Créer/Modifier/Supprimer des annonces
                                </div>
                            </div>
                            <div class="modal-body-content-foot-content-item">
                                <div class="modal-body-content-foot-content-item-one">
                                    <input type="radio" id="admin1" name="admin">
                                    <label for="admin1"></label>
                                </div>
                                <div class="modal-body-content-foot-content-item-two">Manager</div>
                                <div class="modal-body-content-foot-content-item-three">
                                    Ajouter/Supprimer des entreprises
                                    Ajouter/Retirer des utilisateurs
                                    Créer des campagnes push Mobile
                                    Créer/Supprimer des pages entreprise
                                    Créer des campagnes bannière
                                    Créer des Campagnes emailing
                                    Créer des repères map en couleur différenciée
                                    Créer/Modifier/Supprimer des annonces
                                </div>
                            </div>
                            <div class="modal-body-content-foot-content-item">
                                <div class="modal-body-content-foot-content-item-one">
                                    <input type="radio" id="admin2" name="admin">
                                    <label for="admin2"></label>
                                </div>
                                <div class="modal-body-content-foot-content-item-two">ASSISTANT</div>
                                <div class="modal-body-content-foot-content-item-three">
                                    Créer/Modifier/Supprimer des annonces
                                </div>
                            </div>
                        </div>
                        <div class="modal-body-content-foot-fix">
                            <div class="pc-checkbox">
                                <input type="checkbox" name="#" id="condition">
                                <label for="condition">
                                    J'ai lu et j'accepte les termes et conditions
                                </label>
                            </div>
                        </div>
                        <div class="modal-body-coontent-foot-button">ENVOYER</div>
                        <div class="modal-body-coontent-foot-terms">Termes & Charte</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal First -->

    <!-- Modal two -->
    <div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                        <div class="modal-body-x-button">
                            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                        </div>
                    </a>

                    <div class="modal-body-title">MULTIPLES UTILISATEURS</div>
                    <div class="modal-body-desc">Ajoutez des utilisateurs et choisissez leurs types de comptes </div>

                    <div class="modal-body-box">
                        <div class="modal-body-box-title">Le compte a été créé</div>
                        <div class="modal-body-box-img">
                            <img src="{{ asset('images/residential/single/menu/ok.svg') }}" alt="">
                        </div>
                    </div>
                    <a href="" data-dismiss="modal" aria-label="Close" style="text-decoration: none; color: inherit">
                        <div class="modal-body-coontent-foot-buttons">fermer</div>
                    </a>


                </div>

            </div>
        </div>
    </div>
    <!-- End Modal two -->

    <!-- Modal three -->
    <div class="modal fade" id="promotion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                        <div class="modal-body-x-button">
                            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                        </div>
                    </a>

                    <div class="modal-body-title text-uppercase">Promotions & cadeaux</div>
                    <div class="modal-body-desc">L'accroche PROMOTIONS & CADEAUX contenant votre texte sera intégrée à votre annonce </div>

                    <div class="modal-body-content-box">
                        <div class="modal-body-content-box-title">Format à suivre</div>
                        <div class="modal-body-content-box-block">
                            <div class="modal-body-content-box-block-abs">
                                <img src="{{ asset('images/residential/single/menu/promo.svg') }}" alt="">
                            </div>
                            <div class="modal-body-content-box-block-st">
                                <div class="modal-body-content-box-block-first">Frais de notaire offerts!</div>
                                <div class="modal-body-content-box-block-second">Contactez-nous vite!</div>
                                <div class="modal-body-content-box-block-three">Offre limitée aux 10 premiers</div>
                                <div class="modal-body-content-box-block-four">Louez, achetez l'esprit tranquille</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body-content-boxes">
                        <div class="modal-body-content-boxes-title">
                            Décrire la promotion ou le cadeau  <span>20 mots</span>
                        </div>
                        <div class="modal-body-content-boxes-block">
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 1</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="frais" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="de" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="notaire" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="offers!" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 2</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="Contactez-nous" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="vite!" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 3</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="Offre" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="limitée" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="aux" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="10" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="premiers" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 4</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="Louez" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="achetez" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="l'esprit" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="tranquille" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="" data-toggle="modal" data-target="#p" style="text-decoration: none; color: inherit">
                        <div class="modal-body-coontent-foot-buttons">Continuer</div>
                    </a>


                </div>

            </div>
        </div>
    </div>
    <!-- End Modal three -->

    <!-- Modal four -->
    <div class="modal fade" id="p" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                        <div class="modal-body-x-button">
                            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                        </div>
                    </a>

                    <div class="modal-body-title text-uppercase">Promotions & cadeaux</div>
                    <div class="modal-body-desc">L'accroche PROMOTIONS & CADEAUX contenant votre texte sera intégrée à votre annonce </div>

                    <div class="modal-body-content-box">
                        <div class="modal-body-content-box-title">Votre accroche est prête</div>
                        <div class="modal-body-content-box-blocks">
                            <div class="modal-body-content-box-block-abs">
                                <img src="{{ asset('images/residential/single/menu/promo.svg') }}" alt="">
                            </div>
                            <div class="modal-body-content-box-block-sts">
                                <div class="modal-body-content-box-block-first">Votre salon meublé !</div>
                                <div class="modal-body-content-box-block-second">Contactez-nous vite!</div>
                                <div class="modal-body-content-box-block-three">Offre limitée aux 10 premiers</div>
                                <div class="modal-body-content-box-block-four">Nous vous attendons nombreux aujourd'hui</div>
                            </div>
                        </div>
                    </div>

                    <div class="button-button">
                        <div>
                            <button data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                            </button>
                        </div>
                        <div>
                            <a href=""  style="text-decoration: none; color: inherit">
                                <div class="modal-body-coontent-foots-buttons">Créer la campagne</div>
                            </a>
                        </div>
                    </div>


                    <div style="visibility: hidden" class="modal-body-content-boxes">
                        <div class="modal-body-content-boxes-title">
                            Décrire la promotion ou le cadeau  <span>20 mots</span>
                        </div>
                        <div class="modal-body-content-boxes-block">
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 1</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="frais" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="de" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="notaire" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="offers!" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 2</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="Contactez-nous" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="vite!" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 3</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="Offre" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="limitée" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="aux" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="10" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="premiers" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 4</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="Louez" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="achetez" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="l'esprit" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="tranquille" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <!-- End Modal four -->

    <!-- Modal five -->
    <!-- End Modal five -->


</div>










@include('development.menu.include.footer')




<script>
    $('#campagne').click(function () {
        let form = $('#campagne-form');
        form.attr('method', 'post');
        form.submit();
    })
</script>
