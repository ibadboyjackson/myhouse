<template>
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <template v-for="conversation in conversations" >
                    <router-link :to="{name: 'conversation', params: {id: conversation.id} }" class="list-group-item d-flex justify-content-between align-items-center">
                        {{ conversation.nom }}
                        <span class="badge badge-pill badge-primary" v-if="conversation.unread">{{ conversation.unread }}</span>
                    </router-link>
                </template>
            </div>
        </div>
        <div class="col-md-9">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import Echo from 'laravel-echo';
    import {mapGetters} from 'vuex';
    export default {
        props: {
            user: Number
        },

        computed: {
            ...mapGetters(['conversations'])
        },

        mounted() {
            new Echo({
                broadcaster: 'socket.io',
                host: window.location.hostname + ':6001'
            })
                .private(`App.User.${this.user}`)
                .listen('MessageComponent', (e) => {
                    console.log(e)
                });

            this.$store.dispatch('loadConversations');
            this.$store.commit('setUser', this.user)
        }
    }
</script>
