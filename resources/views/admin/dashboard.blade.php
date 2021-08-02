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
                        <dt>API Token</dt>
        
                        @if(Auth::user()->api_token)
                            {{ Auth::user()->api_token}}
                        @endif
        
                        <form action="{{route('admin.api-token')}}" method="POST">
                            @csrf
                            <button class="btn btn-primary mt-3" type="submit">Generate Token</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
