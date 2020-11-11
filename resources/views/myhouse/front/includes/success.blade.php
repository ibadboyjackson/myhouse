 @if (Session::has('status'))


    <div class = "myhouse-success myhouse-success-success" id = "myhouse-errors">
        <div class="myhouse-text">
            <span>{{ session('status') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>

@endif


 @if (Session::has('statut'))


    <div class = "myhouse-success myhouse-success-success" id = "myhouse-errors">
        <div class="myhouse-text">
            <span>{{ session('statut') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>

@endif




 @if (Session::has('registered'))


    <div class = "myhouse-success myhouse-success-success" id = "myhouse-errors">
        <div class="myhouse-text">
            <span>{{ __('myhouse/auth/email.ae') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>

@endif


 @if (Session::has('success'))


    <div class = "myhouse-success myhouse-success-success" id = "myhouse-errors">
        <div class="myhouse-text">
            <span>{{ session('success') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>

@endif




    <div class = "myhouse-success myhouse-success-success housable" id = "myhouse-errors">
        <div class="myhouse-text">
            <span>{{ __('myhouse/help.criteres') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>
