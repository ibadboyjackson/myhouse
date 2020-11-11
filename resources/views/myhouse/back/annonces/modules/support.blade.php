<div class="service-commercial-block">
    <div class="service-commercial">
        <div class="service-commercial-zone-one">
            {{ __('myhouse/back/annonces/modules/support.aa') }}
        </div>
        <div class="service-commercial-zone-two">
            {{ __('myhouse/back/annonces/modules/support.ab') }}
        </div>
        <div class="service-commercial-hr"></div>
        <!-- <div class="service-commercial-number">
            {{ __('myhouse/back/annonces/modules/support.ac') }}
        </div> -->
        <a href="{{ route('menu.messagerie', ['user' => 'particulier']) }}" style="text-decoration: none; color: #0d9564">
            <div class="service-commercial-chat">
                <div class="service-commercial-chat-item">
                    <img src="{{ asset('images/residential/chat.svg') }}" alt="">
                </div>
                <div class="service-commercial-chat-item">{{ __('myhouse/back/annonces/modules/support.ad') }}</div>
            </div>
        </a>
    </div>
</div>
