<template>
    <div class="page-liste">

        <div class="no-result" v-if="success">
            <p>
                Aucun resultat(s) trouvé(s)
            </p>
        </div>

        <div class="page-list-panel js-marker" id ="item"> 
            <div class="page-list-panel-item" style="height: 100%">
                <a href="#" target="_blank">
                    <div class="carousel slide" data-ride="carousel" id="carouselExemple">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#1" data-slide-to="1"></li>
                            <li class="" data-target="#2" data-slide-to="2"></li>
                            <li class="" data-target="#3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/development/files/particulier/429/ba5ff3ba93f6d52600836ddbfde00be6.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/d727d0ab07707f375379a01445c4e8d8.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/fe710eb70c4c4c85c3416f25a74dc9ba.jpg" alt="Third Slide"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExemple" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExemple" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="page-list-panel-item-two-pro" style="height: 100%">

                <a href="#" style="text-decoration: none; color: inherit" target="_blank">
                    <div class="page-list-panel-item-two-pro-head">
                        <div class="page-list-panel-item-two-head-left">

                            <div class="page-list-panel-item-two-head-left-box">
                                <div class="page-list-panel-item-two-head-left-box-left">
                                    <img src="/images/residential/loc.svg'" alt="" class="img-fluid" width="10" height="10">
                                </div>
                                <div class="page-list-panel-item-two-head-left-box-right">
                                    11 rue de libourne <br>
                                    <strong>Mers sultan</strong> <br>
                                    <strong>Casablanca</strong>
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body-box-item">
                            <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">
                                Appartement
                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                    2 chambres
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="page-list-panel-item-two-pro-body">

                        <div class="page-list-panel-item-two-pro-body-box">

                            <div class="page-list-panel-item-two-pro-body-box-st">

                                <div class="page-list-panel-item-two-pro-body-content">
                                    Surface habitable 200 m²
                                </div>

                                <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                    <div style="font-size: 14px; color: #868686;">
                                        Superficie terrain 150 m²
                                    </div>


                                    <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                        <strong>Achat </strong>
                                        <!-- <span style="font-size: 13px;">Echange provisoire,</span>
                                        <span style="font-size: 13px;">Echange définitif</span> -->

                                    </div>
                                </div>

                            </div>

                            <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">

                                <strong>200.000 <span style="font-size: 13px;">MAD</span> </strong>

                            </div>

                        </div>


                        <!-- <div class="page-list-item-two-pro-body-content-text">
                            {{ substr($particulier->description, 0, 92) }} (...)

                        </div> -->

                    </div>

                    <div class="page-list-panel-item-two-pro-footer">
                        <div class="page-list-panel-item-two-body-box-threes">
                            <div class="page-list-panel-item-two-body-box-three-box"> 1 appart par immeuble </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> plage 200m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> cuisine américaine </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 places véhicules </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> montagne 500m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 dressings </div>

                        </div>
                    </div>

                </a>

            </div>
        </div>
        <div class="page-list-panel js-marker" id ="item">
            <div class="page-list-panel-item" style="height: 100%">
                <a href="#" target="_blank">
                    <div class="carousel slide" data-ride="carousel" id="carouselExemple">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#1" data-slide-to="1"></li>
                            <li class="" data-target="#2" data-slide-to="2"></li>
                            <li class="" data-target="#3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/development/files/particulier/429/ba5ff3ba93f6d52600836ddbfde00be6.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/d727d0ab07707f375379a01445c4e8d8.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/fe710eb70c4c4c85c3416f25a74dc9ba.jpg" alt="Third Slide"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExemple" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExemple" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="page-list-panel-item-two-pro" style="height: 100%">

                <a href="#" style="text-decoration: none; color: inherit" target="_blank">
                    <div class="page-list-panel-item-two-pro-head">
                        <div class="page-list-panel-item-two-head-left">

                            <div class="page-list-panel-item-two-head-left-box">
                                <div class="page-list-panel-item-two-head-left-box-left">
                                    <img src="/images/residential/loc.svg'" alt="" class="img-fluid" width="10" height="10">
                                </div>
                                <div class="page-list-panel-item-two-head-left-box-right">
                                    11 rue de libourne <br>
                                    <strong>Mers sultan</strong> <br>
                                    <strong>Casablanca</strong>
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body-box-item">
                            <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">
                                Appartement
                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                    2 chambres
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="page-list-panel-item-two-pro-body">

                        <div class="page-list-panel-item-two-pro-body-box">

                            <div class="page-list-panel-item-two-pro-body-box-st">

                                <div class="page-list-panel-item-two-pro-body-content">
                                    Surface habitable 200 m²
                                </div>

                                <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                    <div style="font-size: 14px; color: #868686;">
                                        Superficie terrain 150 m²
                                    </div>


                                    <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                        <strong>Achat </strong>
                                        <!-- <span style="font-size: 13px;">Echange provisoire,</span>
                                        <span style="font-size: 13px;">Echange définitif</span> -->

                                    </div>
                                </div>

                            </div>

                            <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">

                                <strong>200.000 <span style="font-size: 13px;">MAD</span> </strong>

                            </div>

                        </div>


                        <!-- <div class="page-list-item-two-pro-body-content-text">
                            {{ substr($particulier->description, 0, 92) }} (...)

                        </div> -->

                    </div>

                    <div class="page-list-panel-item-two-pro-footer">
                        <div class="page-list-panel-item-two-body-box-threes">
                            <div class="page-list-panel-item-two-body-box-three-box"> 1 appart par immeuble </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> plage 200m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> cuisine américaine </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 places véhicules </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> montagne 500m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 dressings </div>

                        </div>
                    </div>

                </a>

            </div>
        </div>
        <div class="page-list-panel js-marker" id ="item">
            <div class="page-list-panel-item" style="height: 100%">
                <a href="#" target="_blank">
                    <div class="carousel slide" data-ride="carousel" id="carouselExemple">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#1" data-slide-to="1"></li>
                            <li class="" data-target="#2" data-slide-to="2"></li>
                            <li class="" data-target="#3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/development/files/particulier/429/ba5ff3ba93f6d52600836ddbfde00be6.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/d727d0ab07707f375379a01445c4e8d8.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/fe710eb70c4c4c85c3416f25a74dc9ba.jpg" alt="Third Slide"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExemple" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExemple" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="page-list-panel-item-two-pro" style="height: 100%">

                <a href="#" style="text-decoration: none; color: inherit" target="_blank">
                    <div class="page-list-panel-item-two-pro-head">
                        <div class="page-list-panel-item-two-head-left">

                            <div class="page-list-panel-item-two-head-left-box">
                                <div class="page-list-panel-item-two-head-left-box-left">
                                    <img src="/images/residential/loc.svg'" alt="" class="img-fluid" width="10" height="10">
                                </div>
                                <div class="page-list-panel-item-two-head-left-box-right">
                                    11 rue de libourne <br>
                                    <strong>Mers sultan</strong> <br>
                                    <strong>Casablanca</strong>
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body-box-item">
                            <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">
                                Appartement
                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                    2 chambres
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="page-list-panel-item-two-pro-body">

                        <div class="page-list-panel-item-two-pro-body-box">

                            <div class="page-list-panel-item-two-pro-body-box-st">

                                <div class="page-list-panel-item-two-pro-body-content">
                                    Surface habitable 200 m²
                                </div>

                                <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                    <div style="font-size: 14px; color: #868686;">
                                        Superficie terrain 150 m²
                                    </div>


                                    <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                        <strong>Achat </strong>
                                        <!-- <span style="font-size: 13px;">Echange provisoire,</span>
                                        <span style="font-size: 13px;">Echange définitif</span> -->

                                    </div>
                                </div>

                            </div>

                            <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">

                                <strong>200.000 <span style="font-size: 13px;">MAD</span> </strong>

                            </div>

                        </div>


                        <!-- <div class="page-list-item-two-pro-body-content-text">
                            {{ substr($particulier->description, 0, 92) }} (...)

                        </div> -->

                    </div>

                    <div class="page-list-panel-item-two-pro-footer">
                        <div class="page-list-panel-item-two-body-box-threes">
                            <div class="page-list-panel-item-two-body-box-three-box"> 1 appart par immeuble </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> plage 200m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> cuisine américaine </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 places véhicules </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> montagne 500m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 dressings </div>

                        </div>
                    </div>

                </a>

            </div>
        </div>
        <div class="page-list-panel js-marker" id ="item">
            <div class="page-list-panel-item" style="height: 100%">
                <a href="#" target="_blank">
                    <div class="carousel slide" data-ride="carousel" id="carouselExemple">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#1" data-slide-to="1"></li>
                            <li class="" data-target="#2" data-slide-to="2"></li>
                            <li class="" data-target="#3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/development/files/particulier/429/ba5ff3ba93f6d52600836ddbfde00be6.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/d727d0ab07707f375379a01445c4e8d8.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/fe710eb70c4c4c85c3416f25a74dc9ba.jpg" alt="Third Slide"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExemple" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExemple" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="page-list-panel-item-two-pro" style="height: 100%">

                <a href="#" style="text-decoration: none; color: inherit" target="_blank">
                    <div class="page-list-panel-item-two-pro-head">
                        <div class="page-list-panel-item-two-head-left">

                            <div class="page-list-panel-item-two-head-left-box">
                                <div class="page-list-panel-item-two-head-left-box-left">
                                    <img src="/images/residential/loc.svg'" alt="" class="img-fluid" width="10" height="10">
                                </div>
                                <div class="page-list-panel-item-two-head-left-box-right">
                                    11 rue de libourne <br>
                                    <strong>Mers sultan</strong> <br>
                                    <strong>Casablanca</strong>
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body-box-item">
                            <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">
                                Appartement
                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                    2 chambres
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="page-list-panel-item-two-pro-body">

                        <div class="page-list-panel-item-two-pro-body-box">

                            <div class="page-list-panel-item-two-pro-body-box-st">

                                <div class="page-list-panel-item-two-pro-body-content">
                                    Surface habitable 200 m²
                                </div>

                                <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                    <div style="font-size: 14px; color: #868686;">
                                        Superficie terrain 150 m²
                                    </div>


                                    <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                        <strong>Achat </strong>
                                        <!-- <span style="font-size: 13px;">Echange provisoire,</span>
                                        <span style="font-size: 13px;">Echange définitif</span> -->

                                    </div>
                                </div>

                            </div>

                            <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">

                                <strong>200.000 <span style="font-size: 13px;">MAD</span> </strong>

                            </div>

                        </div>


                        <!-- <div class="page-list-item-two-pro-body-content-text">
                            {{ substr($particulier->description, 0, 92) }} (...)

                        </div> -->

                    </div>

                    <div class="page-list-panel-item-two-pro-footer">
                        <div class="page-list-panel-item-two-body-box-threes">
                            <div class="page-list-panel-item-two-body-box-three-box"> 1 appart par immeuble </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> plage 200m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> cuisine américaine </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 places véhicules </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> montagne 500m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 dressings </div>

                        </div>
                    </div>

                </a>

            </div>
        </div>
        <div class="page-list-panel js-marker" id ="item">
            <div class="page-list-panel-item" style="height: 100%">
                <a href="#" target="_blank">
                    <div class="carousel slide" data-ride="carousel" id="carouselExemple">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#1" data-slide-to="1"></li>
                            <li class="" data-target="#2" data-slide-to="2"></li>
                            <li class="" data-target="#3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/development/files/particulier/429/ba5ff3ba93f6d52600836ddbfde00be6.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/d727d0ab07707f375379a01445c4e8d8.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/fe710eb70c4c4c85c3416f25a74dc9ba.jpg" alt="Third Slide"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExemple" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExemple" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="page-list-panel-item-two-pro" style="height: 100%">

                <a href="#" style="text-decoration: none; color: inherit" target="_blank">
                    <div class="page-list-panel-item-two-pro-head">
                        <div class="page-list-panel-item-two-head-left">

                            <div class="page-list-panel-item-two-head-left-box">
                                <div class="page-list-panel-item-two-head-left-box-left">
                                    <img src="/images/residential/loc.svg'" alt="" class="img-fluid" width="10" height="10">
                                </div>
                                <div class="page-list-panel-item-two-head-left-box-right">
                                    11 rue de libourne <br>
                                    <strong>Mers sultan</strong> <br>
                                    <strong>Casablanca</strong>
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body-box-item">
                            <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">
                                Appartement
                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                    2 chambres
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="page-list-panel-item-two-pro-body">

                        <div class="page-list-panel-item-two-pro-body-box">

                            <div class="page-list-panel-item-two-pro-body-box-st">

                                <div class="page-list-panel-item-two-pro-body-content">
                                    Surface habitable 200 m²
                                </div>

                                <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                    <div style="font-size: 14px; color: #868686;">
                                        Superficie terrain 150 m²
                                    </div>


                                    <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                        <strong>Achat </strong>
                                        <!-- <span style="font-size: 13px;">Echange provisoire,</span>
                                        <span style="font-size: 13px;">Echange définitif</span> -->

                                    </div>
                                </div>

                            </div>

                            <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">

                                <strong>200.000 <span style="font-size: 13px;">MAD</span> </strong>

                            </div>

                        </div>


                        <!-- <div class="page-list-item-two-pro-body-content-text">
                            {{ substr($particulier->description, 0, 92) }} (...)

                        </div> -->

                    </div>

                    <div class="page-list-panel-item-two-pro-footer">
                        <div class="page-list-panel-item-two-body-box-threes">
                            <div class="page-list-panel-item-two-body-box-three-box"> 1 appart par immeuble </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> plage 200m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> cuisine américaine </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 places véhicules </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> montagne 500m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 dressings </div>

                        </div>
                    </div>

                </a>

            </div>
        </div>
        <div class="page-list-panel js-marker" id ="item">
            <div class="page-list-panel-item" style="height: 100%">
                <a href="#" target="_blank">
                    <div class="carousel slide" data-ride="carousel" id="carouselExemple">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#1" data-slide-to="1"></li>
                            <li class="" data-target="#2" data-slide-to="2"></li>
                            <li class="" data-target="#3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/development/files/particulier/429/ba5ff3ba93f6d52600836ddbfde00be6.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/d727d0ab07707f375379a01445c4e8d8.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/fe710eb70c4c4c85c3416f25a74dc9ba.jpg" alt="Third Slide"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExemple" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExemple" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="page-list-panel-item-two-pro" style="height: 100%">

                <a href="#" style="text-decoration: none; color: inherit" target="_blank">
                    <div class="page-list-panel-item-two-pro-head">
                        <div class="page-list-panel-item-two-head-left">

                            <div class="page-list-panel-item-two-head-left-box">
                                <div class="page-list-panel-item-two-head-left-box-left">
                                    <img src="/images/residential/loc.svg'" alt="" class="img-fluid" width="10" height="10">
                                </div>
                                <div class="page-list-panel-item-two-head-left-box-right">
                                    11 rue de libourne <br>
                                    <strong>Mers sultan</strong> <br>
                                    <strong>Casablanca</strong>
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body-box-item">
                            <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">
                                Appartement
                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                    2 chambres
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="page-list-panel-item-two-pro-body">

                        <div class="page-list-panel-item-two-pro-body-box">

                            <div class="page-list-panel-item-two-pro-body-box-st">

                                <div class="page-list-panel-item-two-pro-body-content">
                                    Surface habitable 200 m²
                                </div>

                                <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                    <div style="font-size: 14px; color: #868686;">
                                        Superficie terrain 150 m²
                                    </div>


                                    <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                        <strong>Achat </strong>
                                        <!-- <span style="font-size: 13px;">Echange provisoire,</span>
                                        <span style="font-size: 13px;">Echange définitif</span> -->

                                    </div>
                                </div>

                            </div>

                            <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">

                                <strong>200.000 <span style="font-size: 13px;">MAD</span> </strong>

                            </div>

                        </div>


                        <!-- <div class="page-list-item-two-pro-body-content-text">
                            {{ substr($particulier->description, 0, 92) }} (...)

                        </div> -->

                    </div>

                    <div class="page-list-panel-item-two-pro-footer">
                        <div class="page-list-panel-item-two-body-box-threes">
                            <div class="page-list-panel-item-two-body-box-three-box"> 1 appart par immeuble </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> plage 200m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> cuisine américaine </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 places véhicules </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> montagne 500m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 dressings </div>

                        </div>
                    </div>

                </a>

            </div>
        </div>
        <div class="page-list-panel js-marker" id ="item">
            <div class="page-list-panel-item" style="height: 100%">
                <a href="#" target="_blank">
                    <div class="carousel slide" data-ride="carousel" id="carouselExemple">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#1" data-slide-to="1"></li>
                            <li class="" data-target="#2" data-slide-to="2"></li>
                            <li class="" data-target="#3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/development/files/particulier/429/ba5ff3ba93f6d52600836ddbfde00be6.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/d727d0ab07707f375379a01445c4e8d8.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/fe710eb70c4c4c85c3416f25a74dc9ba.jpg" alt="Third Slide"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExemple" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExemple" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="page-list-panel-item-two-pro" style="height: 100%">

                <a href="#" style="text-decoration: none; color: inherit" target="_blank">
                    <div class="page-list-panel-item-two-pro-head">
                        <div class="page-list-panel-item-two-head-left">

                            <div class="page-list-panel-item-two-head-left-box">
                                <div class="page-list-panel-item-two-head-left-box-left">
                                    <img src="/images/residential/loc.svg'" alt="" class="img-fluid" width="10" height="10">
                                </div>
                                <div class="page-list-panel-item-two-head-left-box-right">
                                    11 rue de libourne <br>
                                    <strong>Mers sultan</strong> <br>
                                    <strong>Casablanca</strong>
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body-box-item">
                            <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">
                                Appartement
                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                    2 chambres
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="page-list-panel-item-two-pro-body">

                        <div class="page-list-panel-item-two-pro-body-box">

                            <div class="page-list-panel-item-two-pro-body-box-st">

                                <div class="page-list-panel-item-two-pro-body-content">
                                    Surface habitable 200 m²
                                </div>

                                <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                    <div style="font-size: 14px; color: #868686;">
                                        Superficie terrain 150 m²
                                    </div>


                                    <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                        <strong>Achat </strong>
                                        <!-- <span style="font-size: 13px;">Echange provisoire,</span>
                                        <span style="font-size: 13px;">Echange définitif</span> -->

                                    </div>
                                </div>

                            </div>

                            <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">

                                <strong>200.000 <span style="font-size: 13px;">MAD</span> </strong>

                            </div>

                        </div>


                        <!-- <div class="page-list-item-two-pro-body-content-text">
                            {{ substr($particulier->description, 0, 92) }} (...)

                        </div> -->

                    </div>

                    <div class="page-list-panel-item-two-pro-footer">
                        <div class="page-list-panel-item-two-body-box-threes">
                            <div class="page-list-panel-item-two-body-box-three-box"> 1 appart par immeuble </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> plage 200m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> cuisine américaine </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 places véhicules </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> montagne 500m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 dressings </div>

                        </div>
                    </div>

                </a>

            </div>
        </div>
        <div class="page-list-panel js-marker" id ="item">
            <div class="page-list-panel-item" style="height: 100%">
                <a href="#" target="_blank">
                    <div class="carousel slide" data-ride="carousel" id="carouselExemple">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#1" data-slide-to="1"></li>
                            <li class="" data-target="#2" data-slide-to="2"></li>
                            <li class="" data-target="#3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/development/files/particulier/429/ba5ff3ba93f6d52600836ddbfde00be6.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/d727d0ab07707f375379a01445c4e8d8.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/fe710eb70c4c4c85c3416f25a74dc9ba.jpg" alt="Third Slide"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExemple" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExemple" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="page-list-panel-item-two-pro" style="height: 100%">

                <a href="#" style="text-decoration: none; color: inherit" target="_blank">
                    <div class="page-list-panel-item-two-pro-head">
                        <div class="page-list-panel-item-two-head-left">

                            <div class="page-list-panel-item-two-head-left-box">
                                <div class="page-list-panel-item-two-head-left-box-left">
                                    <img src="/images/residential/loc.svg'" alt="" class="img-fluid" width="10" height="10">
                                </div>
                                <div class="page-list-panel-item-two-head-left-box-right">
                                    11 rue de libourne <br>
                                    <strong>Mers sultan</strong> <br>
                                    <strong>Casablanca</strong>
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body-box-item">
                            <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">
                                Appartement
                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                    2 chambres
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="page-list-panel-item-two-pro-body">

                        <div class="page-list-panel-item-two-pro-body-box">

                            <div class="page-list-panel-item-two-pro-body-box-st">

                                <div class="page-list-panel-item-two-pro-body-content">
                                    Surface habitable 200 m²
                                </div>

                                <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                    <div style="font-size: 14px; color: #868686;">
                                        Superficie terrain 150 m²
                                    </div>


                                    <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                        <strong>Achat </strong>
                                        <!-- <span style="font-size: 13px;">Echange provisoire,</span>
                                        <span style="font-size: 13px;">Echange définitif</span> -->

                                    </div>
                                </div>

                            </div>

                            <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">

                                <strong>200.000 <span style="font-size: 13px;">MAD</span> </strong>

                            </div>

                        </div>


                        <!-- <div class="page-list-item-two-pro-body-content-text">
                            {{ substr($particulier->description, 0, 92) }} (...)

                        </div> -->

                    </div>

                    <div class="page-list-panel-item-two-pro-footer">
                        <div class="page-list-panel-item-two-body-box-threes">
                            <div class="page-list-panel-item-two-body-box-three-box"> 1 appart par immeuble </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> plage 200m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> cuisine américaine </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 places véhicules </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> montagne 500m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 dressings </div>

                        </div>
                    </div>

                </a>

            </div>
        </div>
        <div class="page-list-panel js-marker" id ="item">
            <div class="page-list-panel-item" style="height: 100%">
                <a href="#" target="_blank">
                    <div class="carousel slide" data-ride="carousel" id="carouselExemple">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#1" data-slide-to="1"></li>
                            <li class="" data-target="#2" data-slide-to="2"></li>
                            <li class="" data-target="#3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/development/files/particulier/429/ba5ff3ba93f6d52600836ddbfde00be6.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/d727d0ab07707f375379a01445c4e8d8.jpg" alt="Third Slide"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="/development/files/particulier/429/fe710eb70c4c4c85c3416f25a74dc9ba.jpg" alt="Third Slide"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExemple" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExemple" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="page-list-panel-item-two-pro" style="height: 100%">

                <a href="#" style="text-decoration: none; color: inherit" target="_blank">
                    <div class="page-list-panel-item-two-pro-head">
                        <div class="page-list-panel-item-two-head-left">

                            <div class="page-list-panel-item-two-head-left-box">
                                <div class="page-list-panel-item-two-head-left-box-left">
                                    <img src="/images/residential/loc.svg'" alt="" class="img-fluid" width="10" height="10">
                                </div>
                                <div class="page-list-panel-item-two-head-left-box-right">
                                    11 rue de libourne <br>
                                    <strong>Mers sultan</strong> <br>
                                    <strong>Casablanca</strong>
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body-box-item">
                            <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">
                                Appartement
                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                    2 chambres
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="page-list-panel-item-two-pro-body">

                        <div class="page-list-panel-item-two-pro-body-box">

                            <div class="page-list-panel-item-two-pro-body-box-st">

                                <div class="page-list-panel-item-two-pro-body-content">
                                    Surface habitable 200 m²
                                </div>

                                <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                    <div style="font-size: 14px; color: #868686;">
                                        Superficie terrain 150 m²
                                    </div>


                                    <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                        <strong>Achat </strong>
                                        <!-- <span style="font-size: 13px;">Echange provisoire,</span>
                                        <span style="font-size: 13px;">Echange définitif</span> -->

                                    </div>
                                </div>

                            </div>

                            <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">

                                <strong>200.000 <span style="font-size: 13px;">MAD</span> </strong>

                            </div>

                        </div>


                        <!-- <div class="page-list-item-two-pro-body-content-text">
                            {{ substr($particulier->description, 0, 92) }} (...)

                        </div> -->

                    </div>

                    <div class="page-list-panel-item-two-pro-footer">
                        <div class="page-list-panel-item-two-body-box-threes">
                            <div class="page-list-panel-item-two-body-box-three-box"> 1 appart par immeuble </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> plage 200m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> cuisine américaine </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 places véhicules </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> montagne 500m </div>
                            <div class="page-list-panel-item-two-body-box-three-box"> 4 dressings </div>

                        </div>
                    </div>

                </a>

            </div>
        </div>


        </div>
</template>


<script>

    export default {

        mounted () {

        },

        data () {

            return {
                success: false
            }
        },

        methods : {
            nothing: function () {
            }
        }
    }

</script>
