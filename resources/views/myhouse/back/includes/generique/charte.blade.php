@extends('myhouse.front.template')

@section('title')
   {{ __('myhouse/back/menu/generique/charte.aa') }}
@stop

@section('content')
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

            <div class="menu-body pl-var">
                <div class="menu-body-title">{{ __('myhouse/back/menu/generique/charte.ab') }}</div>
                <div class="menu-body-hr"></div>
                @if ($user === 'professionnel')
                    <div class="menu-body-subs">
                        <span class="menu-body-subs-one">{{ __('myhouse/back/menu/generique/charte.ac') }}</span>
                        <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                    </div>
                @endif

                <div class="menu-body-profile">
                    <div class="menu-body-profile-box-charte">
                        <div class="menu-body-profile-box-charte-content">

                            <!-- <div class="menu-body-profile-box-faq-content-item">
                                <div class="menu-body-profile-box-faq-question">
                                    <h1>{{ __('myhouse/back/menu/generique/charte.ad') }}</h1>
                                    <p>
                                        {{ __('myhouse/back/menu/generique/charte.ae') }}
                                    </p>
                                </div>
                                <div class="menu-body-profile-box-faq-question">
                                    <h1>{{ __('myhouse/back/menu/generique/charte.af') }}</h1>
                                    <p>
                                        {{ __('myhouse/back/menu/generique/charte.ag') }}
                                    </p>
                                </div>
                                <div class="menu-body-profile-box-faq-question">
                                    <h1>{{ __('myhouse/back/menu/generique/charte.ah') }}</h1>
                                    <p>
                                        {{ __('myhouse/back/menu/generique/charte.ai') }}
                                    </p>
                                </div>
                            </div>

                            <div class="menu-body-profile-box-faq-content-item">
                                <div class="menu-body-profile-box-faq-question">
                                    <h1>{{ __('myhouse/back/menu/generique/charte.ad') }}</h1>
                                    <p>
                                        {{ __('myhouse/back/menu/generique/charte.ae') }}
                                    </p>
                                </div>
                                <div class="menu-body-profile-box-faq-question">
                                    <h1>{{ __('myhouse/back/menu/generique/charte.af') }}</h1>
                                    <p>
                                        {{ __('myhouse/back/menu/generique/charte.ag') }}
                                    </p>
                                </div>
                                <div class="menu-body-profile-box-faq-question">
                                    <h1>{{ __('myhouse/back/menu/generique/charte.ah') }}</h1>
                                    <p>
                                        {{ __('myhouse/back/menu/generique/charte.ai') }}
                                    </p>
                                </div>
                            </div> -->

                                <div class="menu-body-profile-box-faq-content-item">
                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>1.OBJET DES CONDITIONS GENERALES D’UTILISATION</h1>
                                        <p>
                                            Les présentes Conditions Générales d’Utilisation (ci-après désignées par les « CGU ») ont pour objet de définir les conditions d’utilisation du site Internet accessible à l’adresse www.myhouse.ma ci-après désigné par « le Site Internet », ainsi que des applications mobiles accessibles via le téléchargement des applications MyHouse ci-après désignées par « Android MyHouse », « IOS MyHouse » et « Desktop MyHouse »). L’ensemble des accès web et mobile à MyHouse est ci-après désigné par « la Plate-forme MyHouse ».
                                            La Plate-forme MyHouse met à disposition, de toute personne physique (ci-après désigné par « Utilisateur », ses contenus, dans le cadre d’un usage commercial, dans le strict respect des présentes CGU.

                                        </p>
                                    </div>
                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>1.2 IDENTIFICATION DE L’EDITEUR</h1>
                                        <p>
                                            La plate-forme MyHouse est éditée par la société Geomark, ci-après désignée par « la Société » :
                                            www.geomark.ma
                                            SA au capital de 500.000 MAD
                                            Immatriculée au RCS de Casablanca sous le numéro xxxxxx xxxxxx xxxxxxx
                                            Dont le siège social est situé au 265, Boulevard Zerktouni, Etage 9, N°92, Casablanca, Maroc.

                                        </p>
                                    </div>
                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>1.3 DIRECTEUR DE LA PUBLICATION</h1>
                                        <p>
                                            Le directeur de la publication de la Plate-forme MyHouse est Monsieur……………….
                                            1.4 CONTACTER LA SOCIETE
                                            L’Utilisateur a la possibilité de prendre contact auprès de la Société :
                                            -Par lettre simple à l’adresse suivante :
                                            Geomark, 265 Boulevard Zerktouni, Etage 9, N°92, Casablanca, Maroc
                                            -Par courrier électronique en adressant un e-mail à contact@geomark.ma

                                        </p>
                                    </div>
                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>1.5 HEBERGEUR DU SITE INTERNET</h1>
                                        <p>
                                            Heberjahiz
                                            SA au capital de xxxxxx xxxxxxx MAD
                                            11 BD Zerktouni, Immeuble Tarfaya 9ème étage numéro 23, Casablanca 20150 Maroc
                                            Tél. : (212) 05 22 49 19 44 (LG)
                                            Fax : (212) 05 22 49 19 40 2.

                                        </p>
                                    </div>
                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>2. CHAMP D’APPLICATION</h1>
                                        <p>
                                            2.1 Les CGU ont pour objet de définir les conditions dans lesquelles l’Utilisateur peut consulter la Plate-forme MyHouse.
                                            2.2 L’accès ou l’utilisation de la Plate-forme MyHouse implique l’acceptation sans restrictions ni réserves des CGU par l’Utilisateur.
                                            2.3 Les CGU pouvant faire l’objet de modifications, les conditions applicables sont celles en vigueur et accessibles sur la Plate-forme MyHouse à la date d’accès par l’Utilisateur.
                                            3. ACCES ET DISPONIBILITE DU SITE
                                            La Société met à la disposition des Utilisateurs de la Plate-forme MyHouse des informations concernant ses activités, ses produits et services.
                                            La Société fait ses meilleurs efforts afin de rendre la Plate-forme MyHouse disponible 24 heures sur 24 et 7 jours sur 7, indépendamment des opérations de maintenance qui seront prévus.
                                            La Société se réserve la possibilité de modifier, interrompre, à tout moment, temporairement ou de manière permanente tout ou partie de la Plate-forme MyHouse sans information préalable des Utilisateurs et sans droit à indemnités.
                                            La Société n’est en aucun cas responsable des conséquences qui pourraient en découler.
                                            4. DONNEES PERSONNELLES
                                            La Société ne collecte aucune donnée personnelle sur l’Utilisateur, si ce n’est celles que l’Utilisateur aura volontairement accepté de transmettre.
                                            4.1 Nature des données personnelles – finalité
                                            Afin de constituer son profil, il sera demandé à l’Utilisateur de renseigner les éléments suivants, sans lesquels ce-dernier ne pourra pas accéder aux services de la plate-forme Myhouse :
                                            Pour l’utilisateur qui dépose 1 annonce pour 1 unité immobilière à la fois, ci-après désigné par « Le Particulier » :
                                            -Son nom d’Utilisateur
                                            -Son numéro de téléphone portable
                                            -Son adresse de courrier électronique
                                            -Sa ville de connexion
                                            Pour l’Utilisateur qui dépose 1 annonce pour plusieurs unités immobilières, ou plus d’1 annonce, ci-après désigne par « Le Professionnel » :
                                            -Son nom d’Utilisateur
                                            -Son numéro de téléphone portable
                                            -Son adresse de courrier électronique
                                            -Sa ville de connexion
                                            -Son adresse postale
                                            Les données de l’Utilisateur, collectées auprès de lui, ont pour finalité de permettre à la Société de procéder à la gestion des annonces et de proposer de meilleurs services BtoC entre les Utilisateurs de la Plate-forme MyHouse.


                                        </p>
                                    </div>
                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>4.2.  Respect des droits des Utilisateurs</h1>
                                        <p>
                                            L’Utilisateur dispose d’un droit naturel d’information et d’accès, d’un droit de rectification et d’effacement (mettre à jour ou corriger ses données), à partir de son profil personnel.
                                            L’Utilisateur dispose également d’un droit à la limitation du traitement des données personnelles, d’un droit à la portabilité, d’un droit d’opposition, et d’un droit de suppression de ses données à caractère personnel. Il suffit à l’Utilisateur d’adresser un simple courrier en prenant soin de justifier de :
                                            Pour le Particulier : son identifiant, adresse de courrier électronique, son mot de passe
                                            Pour le Professionnel : son identifiant, adresse de courrier électronique, son mot de passe, de la photocopie de sa dernière facture,

                                            A l’adresse de la Société : Geomark, 265 Boulevard Zerktouni, Etage 9, N°92, Casablanca, Maroc


                                        </p>
                                    </div>
                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>4.2.  Respect des droits des Utilisateurs</h1>
                                        <p>
                                            L’Utilisateur dispose d’un droit naturel d’information et d’accès, d’un droit de rectification et d’effacement (mettre à jour ou corriger ses données), à partir de son profil personnel.
                                            L’Utilisateur dispose également d’un droit à la limitation du traitement des données personnelles, d’un droit à la portabilité, d’un droit d’opposition, et d’un droit de suppression de ses données à caractère personnel. Il suffit à l’Utilisateur d’adresser un simple courrier en prenant soin de justifier de :
                                            Pour le Particulier : son identifiant, adresse de courrier électronique, son mot de passe
                                            Pour le Professionnel : son identifiant, adresse de courrier électronique, son mot de passe, de la photocopie de sa dernière facture,

                                            A l’adresse de la Société : Geomark, 265 Boulevard Zerktouni, Etage 9, N°92, Casablanca, Maroc


                                        </p>
                                    </div>


                                </div>
                                <div class="menu-body-profile-box-faq-content-item">
                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>5. GARANTIE DE L’UTILISATEUR</h1>
                                        <p>
                                            En accédant à la Plate-forme MyHouse de la Société, l’Utilisateur déclare, garantit et s’engage à :
                                            Accéder et utiliser la Plate-forme MyHouse en toute bonne foi, de manière raisonnable, non contraire aux termes des CGU ;
                                            Ne pas utiliser de dispositifs ou logiciels autres que ceux fournis par la Société destinés à :
                                            1)	Affecter ou tenter d’affecter le bon fonctionnement de la Plate-forme MyHouse ;
                                            2)	Extraire, modifier, consulter, même en mémoire tampon ou temporaire, ou encore pour une utilisation individualisée, tout ou partie de la Plate-forme MyHouse ;
                                            3)	Ne pas accéder et/ou utiliser la Plate-forme MyHouse et/ou les Contenus fournis par la Société sur ladite Plate-forme MyHouse à des fins illicites et/ou dans le but de causer un préjudice à la réputation et l’image de la Société ou plus généralement à porter atteinte aux droits, notamment de propriété intellectuelle, de la Société et/ou de tiers ;
                                            4)	Ne pas réutiliser tout ou partie de la Plate-forme MyHouse et des Contenus qu’elle contient, en particulier à des fins commerciales et/ou collectives et/ou à des fins personnelles sous une forme et/ou un média non autorisé par la Société ;
                                            5)	Ne pas exploiter les Contenus fournis par la Société ou les données auxquelles il pourrait avoir accès via lesdits Contenus et/ou la Plate-forme MyHouse à des fins directement ou indirectement commerciales et/ou à des fins personnelles sous une forme et/ou un média non autorisé(s) par la Société ;
                                            6)	Ne pas reproduire, représenter tout ou partie de la Plate-forme MyHouse à des fins privées au-delà des exceptions légales prévues, en particulier par le Code de la propriété intellectuelle, ou en vue d’une commercialisation directe ou indirecte, extérieure à la Plate-forme MyHouse, notamment auprès de tiers ;
                                            7)	Ne pas contrevenir aux dispositions légales réprimant les pratiques dites de « hacking ».


                                        </p>
                                    </div>

                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>5.1 LIMITATION DE RESPONSABILITE</h1>
                                        <p>
                                            L’Utilisateur est seul responsable de l’utilisation qu’il fait de la Plate-forme MyHouse et des Contenus auxquels il accède depuis cette-dernière.
                                            La Société ne pourra en aucun cas être tenue responsable dans le cadre d’une procédure introduite à l’encontre de l’Utilisateur qui se serait rendu coupable d’une utilisation non-conforme de la Plate-forme MyHouse et/ou des Contenus qu’il procure.
                                            L’Utilisateur reconnaît et accepte à cet égard qu’il fera son affaire personnelle de toute réclamation ou procédure formée contre la Société, du fait de l’utilisation non-conforme par lui des Contenus et/ou de Plate-forme MyHouse.
                                            La Plate-forme MyHouse peut contenir des liens hypertextes renvoyant vers des sites Internet de tiers.
                                            A cet égard, compte tenu du caractère évanescent du contenu qui peut y être diffusé, la responsabilité de la Société ne saurait être engagée dans le cas où le contenu desdits sites Internet de tiers contreviendrait aux dispositions légales et/ou réglementaires en vigueur.
                                            En toute hypothèse, la Société ne saurait être responsable :
                                            1) En cas d’indisponibilité des Contenus ;
                                            2) En cas d’utilisation des Contenus par un Utilisateur dans des conditions non-conformes aux termes des CGU ;
                                            3) La Société ne saurait être tenue responsable de tout dysfonctionnement de quelque nature qu’il soit relatif au matériel informatique de l’Utilisateur ainsi qu’à sa connexion d’accès à Internet, lors de l’accès au Site Internet et plus généralement aux Contenus.
                                            6.DROIT D’AUTEUR SUR LA PLATE-FORME MYHOUSE DE LA SOCIETE
                                            La Société est le titulaire ou le concessionnaire des droits de propriété intellectuelle tant de la structure générale de la Plate-forme MyHouse, que de son Contenu (textes, slogans, graphiques, images, vidéos, photos et autres contenus).
                                            Dès lors, conformément aux dispositions légales sur la propriété intellectuelle, toute représentation, reproduction, modification, dénaturation et/ou exploitation totale ou partielle de la Plate-forme MyHouse et/ou de son Contenu, par quelque procédé que ce soit et sur quelque support que ce soit, sans l’autorisation expresse et préalable de la Société, est prohibée et constitue des actes de contrefaçon de droits d’auteur.
                                            De même, toute exploitation non autorisée de la Plate-forme MyHouse et/ou de son Contenu engage la responsabilité pénale et civile de l’Utilisateur sur le fondement de la contrefaçon de droits d’auteur.


                                        </p>
                                    </div>

                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>6.1 SIGNES DISTINCTIFS</h1>
                                        <p>
                                            Les marques, logos, dénominations sociales, sigles, noms commerciaux, enseignes et/ou nom de domaine de la Société mentionnés sur la Plate-forme MyHouse, permettant l’accès aux Contenus mis à disposition par la Société, constituent des signes distinctifs insusceptibles d’utilisation sans l’autorisation expresse et préalable de leur titulaire.
                                            Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de ces signes distinctifs est donc prohibée et constitutif de contrefaçon de marque, en application des dispositions légales sur la propriété intellectuelle, d’usurpation de dénomination sociale, nom commercial et de nom de domaine engageant la responsabilité civile délictuelle de son auteur.


                                        </p>
                                    </div>

                                    <div class="menu-body-profile-box-faq-question">
                                        <h1>6.2 CONTENU DES SERVICES</h1>
                                        <p>
                                            L’Utilisateur reconnaît et accepte que l’accès aux Contenus mis à sa disposition par la Société ne saurait emporter une quelconque cession ou concession des droits de propriété intellectuelle (droits d’auteurs notamment) et autres droits au bénéfice de l’Utilisateur.
                                            L’accès aux Contenus est exclusivement limité à l’usage privé et personnel de l’Utilisateur dans les conditions et limites définies dans les CGU.
                                            6.3 LIENS HYPERTEXTES
                                            Les liens hypertextes accessibles sur la Plate-forme MyHouse, permettant l’accès aux Contenus, en direction d’autres sites Internet et d’une manière générale vers toutes ressources existantes sur Internet ne sauraient engager la responsabilité de la Société.
                                            7. COOKIES
                                            La Société utilise des cookies sur son Site Internet. Des cookies sont des informations afférentes à la navigation de l’ordinateur de l’Utilisateur de la Plate-forme MyHouse de la Société et qui permettent de déterminer les pages qu’il a consultées, leur date et heure de consultation.
                                            A aucun moment, ces cookies ne permettent à la Société d’identifier personnellement l’Utilisateur. La durée de conservation de ces cookies dans l’ordinateur de l’Utilisateur n’excède pas un (1) an. L’Utilisateur est cependant informé qu’il a la faculté de s’opposer à l’enregistrement de ces cookies et ce notamment en configurant son navigateur Internet pour ce faire.
                                            8. LITITGE – JURIDICTION COMPETENTE
                                            Les présentes Conditions Générales d’Utilisation sont soumises au droit marocain.
                                            Tout éventuel litige se rapportant à l’interprétation ou l’exécution des présentes Conditions Générales d’Utilisation sera soumis à la compétence des tribunaux marocains compétents.


                                        </p>
                                    </div>


                                </div>

                        </div>
                    </div>
                </div>


            </div>

            <!-- End List -->


        </div>
    </div>
@stop
