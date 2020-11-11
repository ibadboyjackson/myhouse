@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-8">
                <div class="card">
                    @include('myhouse.back.includes.messages')
                    <div class="card-header">
                        {{ __('agent/dashboard.name') }}
                        <a href="{{ route('agent.conversations') }}" class="btn btn-success m-3"> {{ __('agent/dashboard.action_2') }} </a>
                    </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                       {{ __('agent/dashboard.text-1') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
