@extends('layouts.admin')

@section("title", "Boolpress | Admin Dashboard")

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <dt>Username</dt>
                        <dd>{{ Auth::user()->name }}</dd>
                        
                        @if(Auth::user()->api_token)
                            <dt>API Token</dt>
                            <div class="form-group">
                                <input class="form-control" type="password" value="{{ Auth::user()->api_token}}">
                                <small>The token is hidden for security reasons. If you can't remember it, click regenerate to request a new token</small>
                            </div>
                        @endif
        
                        <form action="{{ route('admin.api-token') }}" method="post">
                            @csrf
                            <button class="btn btn-outline-primary" type="submit"> @if(!Auth::user()->api_token) Generate @else Re-generate @endif Token</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
