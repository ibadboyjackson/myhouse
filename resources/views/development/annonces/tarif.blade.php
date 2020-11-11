@include('development.includes.head')


@include('development.includes.nav')



<div class="overlay mt-89">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <img src="{{ asset('images/residential/x.svg') }}" alt="">
    </div>
    <div class="tarif d-flex align-items-center justify-content-md-around mt-1">
        <div class="tarif-pricing tp1 mt-001">
            <div class="tarif-around-1">
                <div class="text-right text-uppercase">sans limitation</div>
            </div>
            <div class="tarif-around-2 text-uppercase text-center">gratuit</div>
            <div class="tarif-around-3 text-center">
                <span class="tarif-around-prev">00</span>
                <span class="tarif-around-next">MAD</span>
            </div>
            <div class="tarif-around-4 text-uppercase text-center">
                1 annonce gratuite
            </div>
            <div class="tarif-around-5 text-center">
                Pour les particuliers qui réalisent
                des transac tions occasionnelles
            </div>
            <div class="tarif-around-6 text-center">
                <button class="btn btn-tarif btn-light text-uppercase rounded-pill">
                    <a href="{{ route('deposer.connexion') }}" style="text-decoration: none; color: rgba(87, 87, 87, 0.8)">
                        commencer
                    </a>
                </button>
            </div>
        </div>


        <div class="tarif-pricing tp2 mt-001">
            <div class="tarif-around-7 text-uppercase text-center">
                PACK PRéSENCE
            </div>
            <div class="tarif-around-8 text-center text-uppercase">
                tarifs
            </div>
            <div class="tarif-around-9 text-uppercase text-center">
                De 2 à 100 annonces
                professionnelles
            </div>
            <div class="tarif-around-10 text-center">
                Adapté aux agents immobiliers
                et aux intermédiaires
            </div>
            <div class="tarif-around-11 text-center">
                <button class="btn btn-tarif btn-light text-uppercase rounded-pill">Voir</button>
            </div>
        </div>
        <div class="tarif-pricing tp3 mt-001">
            <div class="tarif-around-7 text-uppercase text-center">
                PACK ENVOL
            </div>
            <div class="tarif-around-8 text-center text-uppercase">
                tarifs
            </div>
            <div class="tarif-around-9 text-uppercase text-center">
                Jusqu'à 50 projets
                immobiliers
            </div>
            <div class="tarif-around-10 text-center">
                Conçu pour les promoteurs et les programmes neufs
            </div>
            <div class="tarif-around-11 text-center">
                <button class="btn btn-tarif btn-light text-uppercase rounded-pill">Voir</button>
            </div>
        </div>
    </div>
</div>


























@include('development.includes.footer')
