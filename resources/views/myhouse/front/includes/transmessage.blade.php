
 @if (Session::has('backerror'))


    <div class = "myhouse myhouse-danger" id = "myhouse-errors" style="right: 743px; top: 456px">
        <div class="myhouse-text">
            <span>{{ session('backerror') }}</span>
            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>

@endif




 @if (Session::has('errors'))


    <div class = "myhouse myhouse-danger" id = "myhouse-errors" style="right: 756px; top: 452px; min-width: 394px;">
        <div class="myhouse-text">
            
            
            <span>

                <ul class="pl-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            <span>




            <div class="myhouse-content-image" id = "errors-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </div>
    </div>

@endif
    