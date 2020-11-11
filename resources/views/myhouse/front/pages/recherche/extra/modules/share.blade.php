<div class="the-page-contact">

    <div class="the-page-contact-box">

        <div class="the-page-contact-box-content">
            <div class="the-page-contact-box-content-img">
                <img src="{{ asset('images/residential/single/c1.svg') }}" alt="">
            </div>
            <div class="the-page-contact-box-content-text" style="font-size: 15px;">{{ __('myhouse/modules/share.aa') }}</div>
        </div>


    <div style="position: relative;" class="menu-email">
        <div class="the-page-contact-box-content">
            <div class="the-page-contact-box-content-img">
                <img src="{{ asset('images/residential/single/c2.svg') }}" alt="">
            </div>
            <div class="the-page-contact-box-content-text" style="font-size: 15px;">{{ __('myhouse/modules/share.ab') }}</div>
        </div>
        <div class="menu-popups">
        
            {{ $particulier->user->email  }}
                    <div style="position: absolute; right: 8px; top: 59px">
                <img src="{{ asset('images/residential/single/copy.png') }}" width="16" title='copier'>
            </div>
        
        </div>

    </div>


    <div style="position: relative;" class="menu-email">
        <div class="the-page-contact-box-content">
            <div class="the-page-contact-box-content-img">
                <img src="{{ asset('images/residential/single/c3.svg') }}" alt="">
            </div>
            <div class="the-page-contact-box-content-text" style="font-size: 15px;">{{ __('myhouse/modules/share.ac') }}</div>
        </div>
        <div class="menu-popup">
        
            {{ $particulier->user->telephone  }}

            <div style="position: absolute; right: 8px; top: 59px">
                <img src="{{ asset('images/residential/single/copy.png') }}" width="16" title='copier'>
            </div>
        
        </div>

    </div>

        <a href="{{ route('menu.messagerie', ['user' => 'particulier']) }}" style="text-decoration:none; color: inherit;">
                <div>
                
                    <div class="the-page-contact-box-content">

                        <div class="the-page-contact-box-content-img">
                            <img src="{{ asset('images/residential/single/c4.svg') }}" alt="">
                        </div>
                        <div class="the-page-contact-box-content-text" style="font-size: 15px;">{{ __('myhouse/modules/share.ad') }}</div>
                    
                    </div>
                
                </div>
        </a>


    </div>
</div>
