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

        <div class="menu-body stf">
            <div class="menu-body-title pl-var">contact</div>
                <div class="menu-body-flex">
                    <div class="menu-body-hr"></div>
                </div>
            <div class="menu-body-contact pl-var">
                <div class="menu-body-contact-box">
                    <div class="menu-body-contact-box-block">
                        <div class="menu-body-contact-box-block-item">
                            <div class="menu-body-content-box-bg">
                                <div class="menu-body-contact-box-block-left-box">
                                    <div class="menu-body-contact-box-block-left-box-title">
                                        MyHouse
                                    </div>
                                    <div class="menu-body-contact-box-block-left-box-title-next">
                                        By Geomark
                                    </div>
                                    <div class="menu-body-contact-box-block-left-box-info">
                                        Service Client: +212607440000
                                        Du lundi au samedi, de 8h00 à 19h00.
                                    </div>
                                    <div class="menu-body-contact-box-block-left-box-info"  >
                                        Adresse postale: 265, Boulevard Zerktouni,
                                        Etage 9, N°92, Casablanca, Maroc.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-body-contact-box-block-item mt-45">
                            <form action="">
                                <div class="form-group">
                                    <label for="#"></label>
                                    <input type="text" name="" id="#" class="form-control contact-inputs" placeholder="Sujet">
                                </div>
                                <div class="form-group">
                                    <label for="#"></label>
                                    <label for=""></label>
                                    <textarea name="#" id=""  class="form-control contact-area"></textarea>
                                </div>
                                <div class="menu-body-profile-box-button">ENVOYER</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- End List -->

<!--
  <div class="menu-body-profile-box-button">ENVOYER</div>
-->

    </div>
</div>









@include('development.menu.include.footer')



