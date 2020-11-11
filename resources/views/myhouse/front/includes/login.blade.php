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
