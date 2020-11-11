<template>
    <div class="card">
        <div class="card-header">{{ name }}</div>
        <div class="card-body conversation__body" id="conversation__body">
            <Message :message="message" v-for="message in messages" :key="message.id" :user="user"></Message>
            <form method="post">
                <div class="form-group">
                    <textarea name="message" v-model="message" :class="{'form-control': true, 'is-invalid': errors['message']} " placeholder="Ecrivez votre message, entrée pour envoyer" @keypress.enter="sendMessage"></textarea>
                    <span class="invalid-feedback" role="alert">
                        <strong v-if="errors['message']">{{ errors['message'].join(', ') }}</strong>
                    </span>
                </div>
            </form>
            <div class="conversation__loading" v-if="loading">
                <div class="loader"></div>
            </div>
        </div>
    </div>
</template>


<script>
    import Message from './MessageComponent';
    import {mapGetters} from 'vuex';
    export default {

        components: {Message},

        data () {
          return {
              message: '',
              errors: {},
              loading: false
          }
        },

        computed: {
          ...mapGetters(["user"]),
          messages: function () {
              return this.$store.getters.messages(this.$route.params.id);
          },

          name: function () {
              return this.$store.getters.conversation(this.$route.params.id).nom;
          },

          count: function () {
              return this.$store.getters.conversation(this.$route.params.id).count;
          }
        },

        mounted() {
            this.loadMessages();
            this.$element =  this.$el.querySelector('.conversation__body');
        },

        watch: {
          '$route.params.id': function () {
              this.loadMessages()
          }
        },

        methods: {
            async loadMessages () {
                let response = await this.$store.dispatch('loadMessages', this.$route.params.id);
                this.scrollBot();

                if (this.messages.length < this.count) {
                    this.$element.addEventListener('scroll', this.onScroll)
                }
            },

            async onScroll () {
              if ( this.$element.scrollTop === 0) {
                  this.loading = true;
                  this.$element.removeEventListener('scroll', this.onScroll);

                  let previousHeight = this.$element.scrollHeight;

                  await this.$store.dispatch('loadPreviousMessages', this.$route.params.id);

                  this.$nextTick( () => {
                     this.$element.scrollTop = this.$element.scrollHeight - previousHeight;
                  });

                  if (this.messages.length < this.count) {
                      this.$element.addEventListener('scroll', this.onScroll)
                  }

                  this.loading = false;
              }
            },

            scrollBot () {
                this.$nextTick( () => {
                    this.$element.scrollTop = this.$element.scrollHeight;
                })
            },

            async sendMessage (e) {
                if(e.shiftKey === false) {
                    this.loading = true;
                    this.errors = {};
                    e.preventDefault();
                    try {
                        await this.$store.dispatch('sendMessage', {
                            message: this.message,
                            userId: this.$route.params.id
                        });

                        this.message = '';
                        this.scrollBot();

                    }catch (e) {
                        if(e.errors){
                            this.errors = e.errors
                        }else {
                            console.error(e)
                        }
                    }
                    this.loading = false;
                }
            }
        }
    }
</script>
