@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">welcome video games</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif

                    Welcome to Video games.

                    Read more <a href="{{ route('about') }}">about us</a>

                    log in  <a href="/login"> Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection