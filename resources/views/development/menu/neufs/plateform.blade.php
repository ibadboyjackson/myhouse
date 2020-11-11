@include('development.menu.include.head')
@include('development.next.include.myhouseNav')



<div class="plateform">
    <div class="plateform-wrap">
        <div class="menu-wrap-x-button">
            <img src="http://myhouse.com/images/residential/single/x.svg" alt="">
        </div>

        <div class="palateform-title">
            PLATE-FORME DE JEU
        </div>
        <div class="palateform-subtitle-hr"></div>
        <div class="palateform-subtitle">
            Compte Manager<span class="plateform-email"> abderazakjamo@hotmail.com</span>
        </div>

        <div class="plateform-guide">
            <div class="plateform-guide-title">GUIDE D'installation</div>
            <div class="plateform-guide-title-box">
                <div class="plateform-guide-title-box-text">Étape 1</div>
                <div class="plateform-guide-title-box-text">Téléchargez le PLAN DE MASSE 3D du Projet</div>
            </div>
        </div>

        <div class="plateform-box">
            <div class="plateform-box-st">
                <div class="plateform-box-one">
                    <label for="file-upload">
                        <img src="{{ asset('images/residential/single/menu/spio.svg') }}" alt="">
                    </label>
                    <input id="file-upload" type="file">
                </div>
                <div class="plateform-box-two">ENVOYER PLAN DE MASSE 3D DU PROJET</div>
            </div>
        </div>
        <div class="menu-body-event-bbox-buuton-box pb-5">
            <div class="menu-body-event-bbox-buuton-box-one">QUITTER</div>
            <div>
                <a href="http://myhouse.com/menu/projets-neufs/evenement/plateform" style="text-decoration: none; color: inherit">
                    <div class="menu-body-event-bbox-buuton-box-two text-uppercase">
                        continuer
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>









@include('development.menu.include.footer')
