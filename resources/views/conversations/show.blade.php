@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @include('conversations.users', ['users', $users])
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        {{ $user->role->nom }}
                    </div>
                    <div class="card-body conversation">

                        @if($messages->hasMorePages())
                            <div class="text-center">
                                <a href="{{ $messages->previousPageUrl() }}" class="btn btn-light">
                                    Voir les messages précédants
                                </a>
                            </div>
                        @endif

                        @foreach($messages as $message)
                            <div class="row">
                                <div class="col-md-10 {{ $message->from->id !== $user->id ? 'offset-md-2 text-right' : '' }}">
                                    <p>
                                        <strong> {{ $message->from->id !== $user->id ? 'Moi' : $message->from->nom }}</strong><br>
                                        {!! nl2br( e($message->message) ) !!}
                                    </p>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                        @if($messages->hasMorePages())
                            <div class="text-center">
                               <a href="{{ $messages->nextPageUrl() }}" class="btn btn-light">
                                  Voir les messages suivants
                               </a>
                            </div><br>
                        @endif

                        <form action="{{ route('conversation.store', $user->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea name="message" class="form-control  @error('message') is-invalid @enderror" placeholder="{{ __('message/message.placeholder') }}"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">{{ __('message/message.send') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
