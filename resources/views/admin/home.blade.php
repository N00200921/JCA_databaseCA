@extends('layouts.app')

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

                    You are Logged in as an Admin user
                    <a href="{{ route('admin.video_games.index')}}"> View All video_games</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
