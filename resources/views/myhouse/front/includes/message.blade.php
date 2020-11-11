@if (session()->has('success'))
    <div class="col-md-6 offset-md-3">
        <div class="alert alert-success">
            {{  session('success') }}
        </div>
    </div>
@endif



@if (session()->has('registered'))
    <div class="col-md-6 offset-md-3">
        <div class="alert alert-success">
            {{  __('myhouse/auth/email.ae') }}
        </div>
    </div>
@endif

@if (session('status'))

    <div class="col-md-6">
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    </div>
@endif

@if (session('statut'))
    <div class="col-md-6 offset-md-3">
        <div class="alert alert-success" role="alert"> 
            {{ session('statut') }}
        </div>
    </div>
@endif
@if (session('error'))
    <div class="col-md-6 offset-md-3">
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    </div>
@endif


@if (session('exceed'))
    <div class="col-md-6 offset-md-3">
        <div class="alert alert-danger" role="alert">
            {{ session('exceed') }}
        </div>
    </div>
@endif


@if(Session::has('errors'))
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!--
    <div class="alert alert-danger" style="position:relative;">

        <div style="position:absolute; right:3px;top:2px;">
            <img src="{{ asset('images/residential/x.svg') }}" alt="" style="width:21px;">
        </div>        

        <ul>
            <li>jgjhgjhgjhgjjhfjhgfjuhgfjhyuy</li>
        </ul>
    </div> -->