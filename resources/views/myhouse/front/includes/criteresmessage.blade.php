 @if (Session::has('backerror'))


    <div class = "myhouse myhouse-danger" id = "myhouse-errors">
        <div class="myhouse-text">
            <span>{{ session('backerror') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>

@endif

 @if (Session::has('statut'))


    <div class = "myhouse myhouse-danger" id = "myhouse-errors">
        <div class="myhouse-text">
            <span>{{ session('statut') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>

@endif


 @if (Session::has('error'))


    <div class = "myhouse myhouse-danger" id = "myhouse-errors">
        <div class="myhouse-text">
            <span>{{ session('error') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>

@endif


    <div class = "myhouse myhouse-danger housable" id = "myhouse-errors">
        <div class="myhouse-text">
            <span>{{ __('myhouse/help.error') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>





    