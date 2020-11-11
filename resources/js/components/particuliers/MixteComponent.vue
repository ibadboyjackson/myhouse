<template>

    <div>
        <Headers></Headers>

        <div class="particulier pa mixte">
            <div class="overplay">
                <div class="row mt-25">

                    <div class="page">
                        <Carte></Carte>
                        <Liste></Liste>
                    </div>

                </div>
            </div>
        </div>
    </div> 


</template>


<script>

    import Headers from './HeadersComponent'
    import Carte from './recherche/modules/CarteComponent'
    import Liste from './recherche/modules/ListeComponent'
    export  default {
        components: {
           Headers, Carte, Liste
        },

    }

</script>
