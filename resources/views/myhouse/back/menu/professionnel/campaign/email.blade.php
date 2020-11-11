@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/professionnel/campaign/email.aa') }}
@stop

@section('content')
    <div class="professionnel">
        <div class="menu-wrap">
            <div class="menu-wrap-content">
                <!-- X button -->
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
                <!-- End X button -->
            @include('myhouse.back.includes.professionnel.aside')
            @include('myhouse.back.includes.professionnel.subscription')



            <!-- List -->

                <div class="menu-body">
                    <div class="menu-body-title">{{ __('myhouse/back/menu/professionnel/campaign/email.ab') }}</div>
                    <div class="menu-body-hm">
                        <div class="menu-body-hr"></div>
                        <div class="menu-body-subs">
                            <span class="menu-body-subs-one">{{ __('myhouse/back/menu/professionnel/campaign/email.ac') }}</span>
                            <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                        </div>
                    </div>
                    <div class="menu-body-contents">
                        <div class="menu-body-content-campaign">
                            <div class="menu-body-content-campaign-left">{{ __('myhouse/back/menu/professionnel/campaign/email.ad') }}</div>
                            <div class="menu-body-content-campaign-right">{{ __('myhouse/back/menu/professionnel/campaign/email.ae') }}</div>
                        </div>
                        <div class="menu-body-content-campaign-select">
                            <div class="form-group">
                                <div class="content-arrow">
                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                </div>
                                <select name="#" id="#" class="form-control css-select">
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/email.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/email.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/email.af') }}</option>
                                </select>
                            </div>
                        </div>



                        <div class="menu-body-content-campaign-email">
                            <div class="menu-body-content-campaign-push-title">{{ __('myhouse/back/menu/professionnel/campaign/email.ag') }}</div>

                            <div class="menu-body-content-campaign-email-block">
                                <div class="menu-body-content-campaign-email-block-first">
                                    <div class="menu-body-content-campaign-email-block-input">
                                        <input type="text" name="#" id="" class="form-control">
                                    </div>
                                    <div class="menu-body-content-campaign-email-block-input">
                                        <input type="text" name="#" id="" class="form-control">
                                    </div>
                                    <div class="menu-body-content-campaign-email-block-inputs">
                                        <input type="text" name="#" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="menu-body-content-campaign-email-block-second">
                                    <div class="menu-body-content-campaign-email-block-second-block">
                                        <div class="upload-img text-center">
                                            <label for="file-upload" class="custom-files-uploads">
                                                <img src="http://myhouse.com/images/residential/single/menu/ico.svg" alt="">
                                            </label>
                                            <input id="file-upload" type="file">
                                            <div class="upload-texts">{{ __('myhouse/back/menu/professionnel/campaign/email.ah') }}</div>
                                            <div class="upload-texts-b">
                                                {{ __('myhouse/back/menu/professionnel/campaign/email.ai') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-body-content-campaign-email-block-two">
                                <div class="menu-body-content-campaign-email-block-two-one">
                                    <div class="menu-body-content-campaign-email-block-inpu">
                                        <input type="text" name="#" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="menu-body-content-campaign-email-block-two-two">
                                    <div class="menu-body-content-campaign-email-block-inpu">
                                        <input type="text" name="#" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="menu-body-content-campaign-email-block-footer">
                                <div class="menu-body-content-campaign-email-block-footer-first">
                                    <div class="menu-body-content-campaign-email-block-footer-item">{{ __('myhouse/back/menu/professionnel/campaign/email.aj') }}</div>
                                    <div class="menu-body-content-campaign-email-block-footer-item">002125555555</div>
                                    <div class="menu-body-content-campaign-email-block-footer-item">002125666666</div>
                                </div>
                                <div class="menu-body-content-campaign-email-block-footer-second">
                                    <div class="menu-body-content-campaign-email-block-footer-item">{{ __('myhouse/back/menu/professionnel/campaign/email.ak') }}</div>
                                    <div class="menu-body-content-campaign-email-block-footer-item">Autem tamque multiplici</div>
                                    <div class="menu-body-content-campaign-email-block-footer-item">fertilitate abundat</div>
                                </div>
                            </div>
                        </div>








                        <a href="{{ route('professionnel.menu.push.email') }}" style="text-decoration: none; color: inherit">
                            <div class="menu-body-content-campaign-boxes-button">
                                {{ __('myhouse/back/menu/professionnel/campaign/email.al') }}
                            </div>
                        </a>
                    </div>
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
@stop

