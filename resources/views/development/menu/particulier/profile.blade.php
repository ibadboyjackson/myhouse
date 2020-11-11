@include('development.menu.include.head')
@include('development.next.include.myhouseNav')


<div class="menu-wrap-full">
    <div class="menu-wrap-content">
        <!-- X button -->
        <div class="menu-wrap-x-button">
            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
        </div>
        <!-- End X button -->

    @include('development.menu.include.particulier.aside')

    <!-- List -->

        <div class="menu-body pl-var">
            <div class="menu-body-title">mon profil</div>
            <div class="menu-body-hr"></div>

            <div class="menu-body-profile">
                <div class="menu-body-profile-box">
                    <div class="menu-body-profile-box-title">Modifier mes informations</div>
                    <div class="menu-body-profile-box-block">
                        <div class="menu-body-profile-box-block-item">
                            <div class="field">
                                <label for="nom" class="field-label">Nom d'utilisateur</label>
                                <input type="text" id="nom" name="nom" class="field-input">
                            </div>
                            <div class="field">
                                <label for="Ville" class="field-label">Ville</label>
                                <input type="text" id="Ville" name="Ville" class="field-input">
                            </div>
                            <div class="field">
                                <label for="phone" class="field-label">Téléphone portable</label>
                                <input type="text" id="phone" name="phone" class="field-input">
                            </div>
                        </div>
                        <div class="menu-body-profile-box-block-item">
                            <div class="field">
                                <label for="doge" class="field-label">email</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="country" class="field-label">Pays</label>
                                <input type="text" id="country" name="country" class="field-input">
                            </div>
                            <div class="field">
                                <label for="password" class="field-label">Mot de passe</label>
                                <input type="password" id="password" name="password" class="field-input">
                            </div>
                        </div>
                    </div>
                    <div class="menu-body-profile-box-button">ENVOYER</div>
                </div>
            </div>


        </div>

        <!-- End List -->


    </div>
</div>









@include('development.menu.include.footer')



